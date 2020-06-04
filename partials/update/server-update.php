<?php
//CONNECT TO DB
include_once __DIR__ . '/../database.php';


//CHECK ID
if(empty($_POST['id'])){
    die('ID non esistente');
}

$id_room = $_POST['id'];
$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];


 //UPDATE WITH BIND PARAM
$sql = "UPDATE `stanze`
SET `room_number` = ?, `beds` = ?, `floor` = ? , `updated_at` = NOW()
WHERE `id` = ?";
$stmt = $connect->prepare($sql);

$stmt->bind_param('iiii', $room_number, $beds, $floor, $id_room);

$stmt->execute();


//CHECK

if ($stmt && $stmt->affected_rows > 0) {
    header("Location: $base_path" . "show.php?id=$id_room");
} elseif ($stmt) {
    die('Nessuna room trovata');
} else {
    die('Si è verificato un errore');
}


//CLOSE CONNECTION
$connect->close();
?>