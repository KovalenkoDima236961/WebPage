<?php
session_start();
header('Content-Type: application/json'); // Додаємо правильний заголовок

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['theme'])) {
    $_SESSION['theme'] = $data['theme'];
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error']);
}
?>