<?php
// INCLUDE DB
include __DIR__ . '/../database.php';
//UTILS
include __DIR__ . '/../functions.php';
$rooms = getAll($connect, 'stanze');
?>