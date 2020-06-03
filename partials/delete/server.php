<?php
//SETUP CONNECTION
include_once __DIR__ . '/../../env.php';


//CONNECT TO DB
include_once __DIR__ . '/../database.php';


//UTILS
include_once __DIR__ . '/../functions.php';

if (empty($_POST['id'])) {
    die('Operazione non eseguibile');
}
$id_room = $_POST['id'];
$url = "$base_path?del=room";
removeById($connect, 'stanze', $id_room, $base_path );

?>