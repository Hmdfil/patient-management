<?php
use Smarty\Smarty;

require 'vendor/autoload.php';

// Setup Smarty
$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__ . '/templates');
$smarty->setCompileDir(__DIR__ . '/templates_c');

// Setup DB
$db = new PDO('mysql:host=localhost;dbname=patient_management', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
