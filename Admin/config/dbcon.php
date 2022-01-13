<?php
    // $host = "localhost";
    // $username = "id17909782_wilaiwan";
    // $password = "y>&{%PW9E2yOS/BL";
    // $database = "id17909782_website";

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "website";

    $con = mysqli_connect("$host","$username","$password","$database");
    if(!$con){
        header("Location: ../../errors/dberror.php");
        die();
    }
?>