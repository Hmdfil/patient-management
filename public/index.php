<?php
require_once '../config.php';

session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}


ob_start();
echo "<p>Bienvenue sur le système de gestion des patients.</p>";
$content = ob_get_clean();

$smarty->assign('page_title', 'Accueil');
$smarty->assign('content', $content);
$smarty->display('layouts/main.tpl');
