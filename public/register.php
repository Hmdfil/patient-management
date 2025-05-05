<?php
require_once '../vendor/autoload.php';
require_once '../config.php';
require_once '../src/User.php';

$smarty->setTemplateDir('../templates/auth');
$smarty->setCompileDir('../templates_c');

$user = new User($db);
$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    $result = $user->createUser($username, $password);
    $success = $result['success'];
    $error = $result['error'] ?? '';
}

$smarty->assign('success', $success);
$smarty->assign('error', $error);
$smarty->display('register.tpl');
