<?php

    include __DIR__ .'/../database.php';
    include __DIR__ .'/../function.php';

    if(empty($_GET['id'])){
        die('nessun id');
    }

    $id = $_GET['id'];

    $row = getOneRoom($conn, 'stanze', $id);

    // $sql = "SELECT id, room_number, floor, beds FROM stanze WHERE id = $id";
    // $result = $conn->query($sql);
    //
    // if ($result && $result->num_rows > 0) {
    //     $row = $result->fetch_assoc();
    // } elseif ($result) {
    //     echo "0 results";
    // } else {
    //     echo "query error";
    // }
    // $conn->close();
 ?>
