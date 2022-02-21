<?php 

    include 'db_conn.php'; //DB connection
    
    $id = $_GET['id']; //get id number from url
    $sql = "DELETE FROM contacts WHERE id=$id"; //sql script
    
    mysqli_query($conn, $sql); //run sql script

    header("Location: index.php"); //redirect to index page
    exit(); //end script


?>