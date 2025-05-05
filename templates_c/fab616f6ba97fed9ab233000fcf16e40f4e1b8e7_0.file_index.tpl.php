<?php
/* Smarty version 5.5.0, created on 2025-05-04 22:06:05
  from 'file:patients/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_6817e4cd2b88f0_29835509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fab616f6ba97fed9ab233000fcf16e40f4e1b8e7' => 
    array (
      0 => 'patients/index.tpl',
      1 => 1744669438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6817e4cd2b88f0_29835509 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\personel\\product-managment\\templates\\patients';
?><!-- add Patient -->
<div class="modal fade" id="addPatientModal" tabindex="-1" role="dialog" aria-labelledby="addPatientLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form id="addPatientForm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addPatientLabel">Ajouter un patient</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" required>
          </div>
          <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" name="prenom" required>
          </div>
          <div class="form-group">
            <label for="date_naissance">Date de naissance</label>
            <input type="date" class="form-control" name="date_naissance" required>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-success">Enregistrer</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Edit Patient -->
<div class="modal fade" id="editPatientModal" tabindex="-1" aria-labelledby="editPatientLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="editPatientForm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editPatientLabel">Modifier Patient</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="id" id="editPatientId">

          <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="nom" id="editNom" required>
          </div>
          <div class="form-group">
            <label>Prénom</label>
            <input type="text" class="form-control" name="prenom" id="editPrenom" required>
          </div>
          <div class="form-group">
            <label>Date de naissance</label>
            <input type="date" class="form-control" name="date_naissance" id="editDate" required>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </div>
      </div>
    </form>
  </div>
</div>



<div class="card">
    <div class="card-header d-flex align-items-center">
    <h3 class="card-title m-0">Liste des Patients</h3>
    <div class="ml-auto">
        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addPatientModal">Ajouter</button>
    </div>
    </div>

    <div class="card-body">
        <table id="patientsTable" class="table table-bordered table-striped">
        <thead>
            <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Actions</th>
            </tr>
        </thead>
        </table>
    </div>
</div>


<?php echo '<script'; ?>
 src="assets/js/components/patient.js"><?php echo '</script'; ?>
><?php }
}
