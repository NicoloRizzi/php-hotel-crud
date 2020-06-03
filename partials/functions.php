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
?>