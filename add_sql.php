<?php

    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $note = $_POST['note'];

    include 'db_conn.php'; //DB connection

    $sql = "INSERT INTO contacts VALUES (NULL, '$fullname', '$phone', '$email', '$note')"; // sql script
    
    mysqli_query($conn, $sql); //run sql script

    header("Location: index.php"); //redirect to index page
    exit(); //end script

?>