<?php

    include __DIR__ .'/../database.php';

    if(empty($_POST['roomNumber'])){
        die('non hai inserito il numero della stanza');
    }

    if(empty($_POST['floor'])){
        die('non hai inserito il piano');
    }

    if(empty($_POST['beds'])){
        die('non hai inserito il numero dei letti');
    }


    $sql = "INSERT INTO `stanze` (`room_number`, `floor`, `beds`, `created_at`, `updated_at`) VALUES (?,?,?,NOW(),NOW())";

    $stmt = $conn->prepare($sql);
    $stmt -> bind_param("iii", $room, $floor, $bed);

    $room = $_POST['roomNumber'];
    $floor = $_POST['floor'];
    $bed = $_POST['beds'];

    $stmt->execute();

    if($stmt && $stmt->affected_rows > 0){
        header("Location: $basepath/show.php?id=$stmt->insert_id");
    } elseif ($stmt) {
        die('nessun inserimento');
    }

    $stmt->close();

    $conn->close();
 ?>
