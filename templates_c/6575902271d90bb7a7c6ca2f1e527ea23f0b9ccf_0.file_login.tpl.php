<?php
/* Smarty version 5.5.0, created on 2025-05-05 01:45:32
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_6817fc1c547ac2_27369824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6575902271d90bb7a7c6ca2f1e527ea23f0b9ccf' => 
    array (
      0 => 'login.tpl',
      1 => 1746399782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6817fc1c547ac2_27369824 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\patient-managment\\templates\\auth';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? 'Patient Management' ?? null : $tmp);?>
</title>
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card card-primary">
        <div class="card-header text-center">
          <h4 class="mb-0">Login</h4>
        </div>
        <div class="card-body">
          <?php if ((true && ($_smarty_tpl->hasVariable('error') && null !== ($_smarty_tpl->getValue('error') ?? null)))) {?>
            <div class="alert alert-danger"><?php echo $_smarty_tpl->getValue('error');?>
</div>
          <?php }?>
          <form method="POST">
            <div class="mb-3">
              <label>Username</label>
              <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>

          <div class="text-center mt-3">
            <a href="register.php" class="text-decoration-none">Create an account</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

<!-- jQuery -->
<?php echo '<script'; ?>
 src="assets/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>

<!-- Bootstrap -->
<?php echo '<script'; ?>
 src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

<!-- AdminLTE -->
<?php echo '<script'; ?>
 src="assets/dist/js/adminlte.min.js"><?php echo '</script'; ?>
>

<!-- ToastrJs -->
<?php echo '<script'; ?>
 src="assets/plugins/toastr/toastr.min.js"><?php echo '</script'; ?>
>

<!-- SweetAlert2 -->
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@11"><?php echo '</script'; ?>
>


<!-- DataTables -->
<?php echo '<script'; ?>
 src="assets/plugins/datatables/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/plugins/jszip/jszip.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/plugins/pdfmake/pdfmake.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/plugins/pdfmake/vfs_fonts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/plugins/datatables-buttons/js/buttons.print.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"><?php echo '</script'; ?>
>


</html>

<?php }
}
