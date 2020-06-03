<?php
//INCLUDE DB
include_once __DIR__ . '/../database.php';

//CHECK DATA
if ( empty($_POST['room_number'] ) || ( empty($_POST['beds'] ) ) || (empty($_POST['floor'])) ){
    die ('Missing parameters');
}

//ASSEGNAZIONE

$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

//QUERY

$sql = "INSERT INTO `stanze`
(`room_number`, `beds`, `floor`, `created_at`, `updated_at`) VALUES (?,?,?, NOW(), NOW());";
$stmt = $connect->prepare($sql);
$stmt->bind_param('iii', $room_number, $beds, $floor);
$stmt->execute();

// CHECK DATA

if($stmt && $stmt->insert_id) {
    $id_room = $stmt->insert_id;
    header("Location: $base_path" . "show.php?id=$id_room");
} else {
    die('Room creation error');
}