
<?php
require_once '../../config.php';
require_once '../helpers/DataTableHelper.php';

$columns = ['id', 'nom', 'prenom', 'date_naissance'];

// Get DataTable parameters
$draw = (int) ($_GET['draw'] ?? 0);
$start = (int) ($_GET['start'] ?? 0);
$length = (int) ($_GET['length'] ?? 10);
$order = $_GET['order'] ?? [];
$searchValue = $_GET['search']['value'] ?? '';

// Count total rows
$totalData = (int) $db->query("SELECT COUNT(*) FROM patients")->fetchColumn();

// Build SQL query
$sql = "SELECT * FROM patients WHERE 1";
$sql .= DataTableHelper::buildSearch($columns, $searchValue);
$sql .= DataTableHelper::buildOrderLimit($columns, $order, $start, $length);

$stmt = $db->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Count filtered
if (!empty($searchValue)) {
    $filterCountSql = "SELECT COUNT(*) FROM patients WHERE 1";
    $filterCountSql .= DataTableHelper::buildSearch($columns, $searchValue);
    $filtered = $db->query($filterCountSql)->fetchColumn();
} else {
    $filtered = $totalData;
}

// Return JSON
echo json_encode([
    'draw' => $draw,
    'recordsTotal' => $totalData,
    'recordsFiltered' => (int)$filtered,
    'data' => $data
]);