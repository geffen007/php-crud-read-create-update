<?php

    include __DIR__ .'/../database.php';


    $sql = "UPDATE `stanze` SET room_number = ?, floor = ?, beds = ?, updated_at = NOW() WHERE id = ?";

    $stmt = $conn->prepare($sql);
    $stmt -> bind_param("iiii", $room, $floor, $bed, $id);

    $room = $_POST['roomNumber'];
    $floor = $_POST['floor'];
    $bed = $_POST['beds'];
    $id = $_POST['id'];

    $stmt->execute();

    if($stmt && $stmt->affected_rows > 0){
        header("Location: $basepath/show.php?id=$id");
        die();
    } elseif ($stmt && $stmt->affected_rows == 0) {
        echo "nessuna modifica effettuata";
    } else {
        die ("impossibile modificare");
    }

    $stmt->close();

    $conn->close();
