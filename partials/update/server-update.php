<?php
include_once __DIR__ . '/../database.php';


//CHECK ID
if(empty($_POST['id'])){
    die('ID non esistente');
}

$id_room = $_POST['id'];
$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

//UPDATE VALUE

$sql = "UPDATE `stanze`
SET `room_number` = $room_number,`beds` = $beds, `floor` = $floor
WHERE `id` = $id_room";

//PERFORM QUERY
$result = $connect->query($sql);

//CHECK

if ($result && $connect->affected_rows > 0) {
    header("Location: $base_path/show.php?id=$id_room");
} elseif ($result) {
    die('Nessuna room trovata');
} else {
    die('Si è verificato un errore');
}


//CLOSE CONNECTION
$connect->close();
?>