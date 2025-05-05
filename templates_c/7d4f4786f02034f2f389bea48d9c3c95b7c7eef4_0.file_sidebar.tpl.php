<?php
/* Smarty version 5.5.0, created on 2025-05-04 22:06:00
  from 'file:layouts/sidebar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_6817e4c832c3b7_93249961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d4f4786f02034f2f389bea48d9c3c95b7c7eef4' => 
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
function content_6817e4c832c3b7_93249961 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\personel\\product-managment\\templates\\layouts';
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
