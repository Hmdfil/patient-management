<?php
require_once '../config.php';

session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// Assign data to Smarty
$smarty->assign('page_title', 'Liste des Patients');

// Render the view inside the main layout
ob_start();
$smarty->display('patients/index.tpl');
$content = ob_get_clean();

$smarty->assign('content', $content);
$smarty->display('layouts/main.tpl');
