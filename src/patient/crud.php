<?php
require_once '../../config.php';
require_once '../class/patient.class.php';

header('Content-Type: application/json');

$action = $_GET['action'] ?? $_POST['action'] ?? null;

// Initialize Patient class
$patient = new Patient($db);

// Dispatcher: handle CRUD operations based on the "action" parameter
switch ($action) {
    case 'create':
        $nom = $_POST['nom'] ?? '';
        $prenom = $_POST['prenom'] ?? '';
        $date = $_POST['date_naissance'] ?? '';
        echo json_encode($patient->createPatient($nom, $prenom, $date));
        break;

    case 'update':
        $id = $_POST['id'] ?? '';
        $nom = $_POST['nom'] ?? '';
        $prenom = $_POST['prenom'] ?? '';
        $date = $_POST['date_naissance'] ?? '';
        echo json_encode($patient->updatePatient($id, $nom, $prenom, $date));
        break;

    case 'delete':
        $id = $_POST['id'] ?? null;
        echo json_encode($patient->deletePatient($id));
        break;

    case 'get':
        $id = $_GET['id'] ?? null;
        echo json_encode($patient->getPatient($id));
        break;

    default:
        http_response_code(500);
        echo json_encode('Action invalide');
}
