<?php
//INCLUDE DB
include_once __DIR__ . '/../database.php';

//CHECK DATA
if ( empty($_POST['room_number'] ) || ( empty($_POST['beds'] ) ) || (empty($_POST['floor'])) ){
    die ('Missing parameters');
}