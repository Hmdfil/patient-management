<?php
require_once '../vendor/autoload.php';
require_once '../config.php';
require_once '../src/user.php';

$smarty->setTemplateDir('../templates/auth');
$smarty->setCompileDir('../templates_c');

$auth = new user($db);
$error = NULL;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = $auth->login($_POST['username'], $_POST['password']);
    if ($result['success']) {
        header('Location: index.php');
        exit;
    } else {
        $error = $result['error'];
    }
}

$smarty->assign('error', $error);
$smarty->display('login.tpl');
