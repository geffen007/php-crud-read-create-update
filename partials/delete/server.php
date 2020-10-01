<?php

    include __DIR__ .'/../database.php';
    include __DIR__ .'/../function.php';

    if(empty($_POST['id'])){
        die('nessun id');
    }

    $id = $_POST['id'];

    removeId($conn, 'stanze', $id, $basepath);

    // $sql = "DELETE FROM stanze WHERE id = ?";
    //
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("i",$id);
    //
    //
    //
    // $stmt->execute();
    //
    // if($stmt && $stmt->affected_rows > 0){
    //     header("Location: $basepath/index.php?roomId=$id");
    // } else {
    //     echo "non ho cancellato";
    // }
    //
    // $stmt->close();
    //
    // $conn->close();
 ?>
