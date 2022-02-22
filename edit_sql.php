<?php

    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $note = $_POST['note'];
    $id = $_POST['id'];

    include 'db_conn.php'; //DB connection

    $sql = "UPDATE contacts SET fullname='$fullname', phone='$phone', email='$email', note='$note' WHERE id=$id"; // sql script
    
    mysqli_query($conn, $sql); //run sql script

    header("Location: index.php"); //redirect to index page
    exit(); //end script

?>