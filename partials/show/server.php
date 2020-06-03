<?php
//CONNECT TO DB
include __DIR__ . '/../database.php';

//GET ROOM ID
$id_room = $_GET['id'];

//QUERY SELECTED ROOM
$sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
$result = $connect->query($sql);

//CHECK

if($connect && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
} elseif($result) {
    echo 'No results';
} else {
    echo 'Error Query';
}
//CLOSE CONNECTION
$connect ->close();
?>