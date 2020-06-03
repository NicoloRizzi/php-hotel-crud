<?php
//CONNECT TO DB
include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';

//GET ROOM ID
$id_room = $_GET['id'];

//CALLBACK FUNCTION GETBYID
$room = getById($connect, 'stanze' , $id_room)
?>