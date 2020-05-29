<?php
//CONNECT TO DB
include_once __DIR__ . '/../database.php';

include_once __DIR__ . '/../../env.php';

if (empty($_POST['id'])) {
    die('Operazione non eseguibile');
}
$id_room = $_POST['id'];

//QUERY
$sql = "DELETE FROM `stanze` WHERE `id` = $id_room";
$result = $connect->query($sql);

if($result && $connect->affected_rows > 0) {
    header("Location: $base_path?del=1");
}elseif ($result) {
    echo 'Nessuna stanza trovata';
} else {
    echo 'Si è verificato un errore';
}
?>