<?php
/* Smarty version 5.5.0, created on 2025-05-05 02:09:41
  from 'file:layouts/sidebar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_681801c5bc3e07_33511860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb6ced3a186db40e0a05b22f2836e17b5a26f8b9' => 
    array (
      0 => 'layouts/sidebar.tpl',
      1 => 1744657031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_681801c5bc3e07_33511860 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\patient-managment\\templates\\layouts';
?><aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="index.php" class="brand-link">
    <i class="fas fa-hospital-symbol mx-3"></i>
    <span class="brand-text font-weight-light">Patient Manager</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">
        <li class="nav-item">
          <a href="index.php" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>Accueil</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="patient.php" class="nav-link">
            <i class="nav-icon fas fa-user-injured"></i>
            <p>Gestion des Patients</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>
<?php }
}
