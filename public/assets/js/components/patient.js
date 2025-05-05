document.addEventListener('DOMContentLoaded', function () {

  // Initialize DataTable with server-side processing
  $('#patientsTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: '../src/patient/dataTable.php',
    responsive: true,
    lengthChange: false,
    autoWidth: false,
    columns: [
      { data: 'id' },
      { data: 'nom' },
      { data: 'prenom' },
      { data: 'date_naissance' },
      {
        data: null,
        orderable: false,
        render: function (data, type, row) {
          return (
            '<div class="btn-group">' +
              '<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">' +
                'Actions' +
              '</button>' +
              '<div class="dropdown-menu">' +
                '<a class="dropdown-item update" data-patient-id="' + row.id + '" >Modifier</a>' +
                '<a class="dropdown-item text-danger delete" data-patient-id="' + row.id + '" href="#">Supprimer</a>' +
              '</div>' +
            '</div>'
          );
        }          
      }
    ]
  });

  // Handle Add Patient Form Submission
  $('#addPatientForm').on('submit', function (e) {
    e.preventDefault();

    const form = $('#addPatientForm')[0];
    const formData = new FormData(form);
    formData.append('action', 'create');

    $.ajax({
      type: 'POST',
      url: '../src/patient/crud.php',
      data: formData,
      dataType: 'json',
      processData: false,
      contentType: false,
      success: function (response) {
        if (response.success) {
          $('#addPatientModal').modal('hide');
          form.reset();
          $('#patientsTable').DataTable().ajax.reload(null, false);
          toastr.success("Patient ajouté avec succès !");
        } else {
          toastr.error("Erreur: " + (response.error || "Inconnue"));
        }
      },
      error: function (jqXHR) {
        toastr.error(jqXHR.responseText);
      }
    });
  });

  // Load Patient Data into Edit Modal
  $('body').on('click', '.update', function () {
    const id = $(this).data('patient-id');

    $.ajax({
      url: '../src/patient/crud.php',
      method: 'GET',
      dataType: 'json',
      data: { action: 'get', id },
      success: function (res) {
        if (res.success) {
          $('#editPatientId').val(res.data.id);
          $('#editNom').val(res.data.nom);
          $('#editPrenom').val(res.data.prenom);
          $('#editDate').val(res.data.date_naissance);
          $('#editPatientModal').modal('show');
        } else {
          toastr.error("Impossible de charger le patient");
        }
      },
      error: function (xhr) {
        toastr.error("Erreur AJAX: " + xhr.status);
      }
    });
  });

  // Handle Edit Patient Form Submission
  $('#editPatientForm').on('submit', function (e) {
    e.preventDefault();

    const form = $('#editPatientForm')[0];
    const formData = new FormData(form);
    formData.append('action', 'update');

    $.ajax({
      type: 'POST',
      url: '../src/patient/crud.php',
      data: formData,
      dataType: 'json',
      processData: false,
      contentType: false,
      success: function (res) {
        if (res.success) {
          $('#editPatientModal').modal('hide');
          form.reset();
          $('#patientsTable').DataTable().ajax.reload(null, false);
          toastr.success("Patient mis à jour avec succès !");
        } else {
          toastr.error("Erreur: " + (res.error || "Inconnue"));
        }
      },
      error: function (xhr) {
        toastr.error("Erreur AJAX: " + xhr.status);
      }
    });
  });

  // Handle Delete Patient with SweetAlert2 Confirmation
  $('body').on('click', '.delete', function () {
    const id = $(this).data('patient-id');

    Swal.fire({
      title: 'Supprimer ce patient ?',
      text: 'Cette action est irréversible.',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: '<i class="fas fa-check me-1"></i> Supprimer',
      cancelButtonText: '<i class="fas fa-times"></i> Annuler',
      customClass: {
        popup: 'shadow-sm rounded-2',
        title: 'fs-6',
        confirmButton: 'btn btn-sm btn-danger',
        cancelButton: 'btn btn-sm btn-outline-secondary ms-2',
      },
      buttonsStyling: false,
      width: '350px',
      padding: '1rem',
      position: 'top',
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: 'POST',
          url: '../src/patient/crud.php',
          data: { action: 'delete', id },
          dataType: 'json',
          success: function (res) {
            if (res.success) {
              toastr.success("Patient supprimé !");
              $('#patientsTable').DataTable().ajax.reload(null, false);
            } else {
              toastr.error(res.error || "Erreur inconnue");
            }
          },
          error: function (xhr) {
            toastr.error("Erreur AJAX: " + xhr.status);
          }
        });
      } else {
        toastr.info("Annulé.");
      }
    });
  });

});
