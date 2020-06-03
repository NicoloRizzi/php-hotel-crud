<?php
/*
* GET ALL RECORDS FROM A DB TABLE
*/
function getAll ($connect, $table) {
    //GET ROOM LIST HOMEPAGE
    $sql = "SELECT * FROM `$table`";
    $result = $connect->query($sql);

    if ($result && $result->num_rows > 0) {
        $records = [];
        //looping array
        while ($row = $result->fetch_assoc()) {
            $records[] = $row;
        }
    } elseif ($result) {
        $records = [];
    } else {
        $records = false;
    }

    // CLOSE DB CONNECTION
    $connect->close();

    return $records;
}
/**
 * GET SINGLE RECORD BY ID
 */
function getById($connect, $table, $id_room){
    //QUERY SELECTED ROOM
    $sql = "SELECT * FROM `$table` WHERE `id` = $id_room";
    $result = $connect->query($sql);

    //CHECK

    if ($connect && $result->num_rows > 0) {
        $records = $result->fetch_assoc();
    } elseif ($result) {
        $records = [];
    } else {
        $records = false;
    }
    //CLOSE CONNECTION
    $connect->close();
    return $records;
}

/**
 * DELETE A RECORD BY ID
 */
function removeById ($connect, $table , $id_room, $url) {
    $sql = "DELETE FROM `$table` WHERE `id` = $id_room";
    $result = $connect->query($sql);

    if ($result && $connect->affected_rows > 0) {
        header("Location: $url");
    } elseif ($result) {
        echo 'Nessuna stanza trovata';
    } else {
        echo 'Si è verificato un errore';
    }
}
?>