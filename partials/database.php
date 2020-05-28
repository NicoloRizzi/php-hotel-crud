<?php

include __DIR__ . '/../env.php';

//CONNECTION
$connect = new mysqli($server_name, $username, $password, $db_name);

//CHECK-CONNECTION
if ($connect && $connect->connect_error) {
    die('Si è verificato un errore');
}

?>