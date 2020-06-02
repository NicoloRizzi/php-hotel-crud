<?php
// CONNECTION DB
include_once __DIR__ . '/../database.php';

//GET ROOM TO EDIT

if(!empty($_GET['id'])){
    $id_room = $_GET['id'];
    //QUERY
    $sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
    $result = $connect->query($sql);
    if($result && $result->num_rows > 0) {
        $room = $result->fetch_assoc();
    } else {
        die('ID non esistente');
    }
} else {
    die("Impossibile ottenere la stanza da editare");
}

$connect -> close();
?>