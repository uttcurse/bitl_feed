<?php
    $server = "localhost";
    $username =  "root";
    $password = "";
    $dbname = "bitl";

    $conn = mysqli_connect($server, $username, $password);

    if(!$conn)
        die("connection to database failed due to".mysqli_connect_error());
    //echo "Successfully Connected!";
    $name= $_POST['name'];
    $roll= $_POST['roll'];
    $stream= $_POST['stream'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $feed=  $_POST['feed'];

    $sql = "INSERT INTO `bitl`.`feedback` (`name`, `roll`, `stream`, `email`, `phone`, `feed`) VALUES ('$name', '$roll', '$stream', '$email', '$phone', '$feed');";
    // echo $sql;

    if($conn->query($sql)==true)
    {
        echo "Sucessfully Inserted";
    }
    else
    {
        echo "ERROR: $sql <br> $conn->error";
    }
    $conn->close();
?>