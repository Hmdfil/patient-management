<?php
/* Smarty version 5.5.0, created on 2025-05-04 23:05:52
  from 'file:layouts/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_6817f2d08403a4_55092290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdc43db95aa9a4a6c29e95df28034c6767e96a2a' => 
    array (
      0 => 'layouts/main.tpl',
      1 => 1746399948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/sidebar.tpl' => 1,
  ),
))) {
function content_6817f2d08403a4_55092290 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\personel\\product-managment\\templates\\layouts';
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
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-dark" data-widget="pushmenu" href="#" role="button">
          <i class="fas fa-bars"></i>
        </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="logout.php" class="btn btn-outline-danger btn-sm mt-1">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </li>
    </ul>

  </nav>

  <?php $_smarty_tpl->renderSubTemplate("file:layouts/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid pt-2">
        <h1 class="m-0"><?php echo $_smarty_tpl->getValue('page_title');?>
</h1>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <?php echo $_smarty_tpl->getValue('content');?>

      </div>
    </section>
  </div>

</div>


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


<?php echo '<script'; ?>
 src="assets/js/app.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
