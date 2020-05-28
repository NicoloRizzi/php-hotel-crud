<?php
include __DIR__ . '/../database.php';
//GET ROOM LIST HOMEPAGE
$sql = "SELECT * FROM `stanze`";
$result = $connect->query($sql);

if ($result && $result->num_rows > 0) {
    $rooms = [];
    //looping array
    while ($row = $result->fetch_assoc()) {
        $rooms[] = $row;
    }
} elseif ($result) {
    echo 'NO results';
} else {
    echo 'QUERY error';
}

// CLOSE DB CONNECTION
$connect->close();
?>