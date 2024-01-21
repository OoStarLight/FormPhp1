<?php 

    
    /* if($_SERVER["REQUEST_METHODE"] = "post"){ // bach nt2akdo bli luser dkhle lhad lpage mli wrek 3la submit. si nn ghy 3tih error.
        $firstname = htmlspecialchars($_POST["firstname"]); // $_POST["html-name"] ka nakhdo behom les valeurs li t3tawna fl form u kan stockewhom f variable.
        $lastname = htmlspecialchars($_POST["lastname"]);
        $pets = htmlspecialchars($_POST["pets"]);
    }

    echo "hello $firstname $lastname, do you love $pets's like me?"; 
    */

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myfirstdatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("no connection...".$conn->connect_error);
    } else{
        echo "you can access the DB";
    }



    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $pets = $_POST["pets"];


        $sql = "INSERT INTO petslover (firstname, lastname, pets) VALUES('$firstname', '$lastname', '$pets')";

        if($conn ->query($sql) === TRUE){
            echo "you sent some data ...";
        }else{
            echo "No data is sent ...".$conn->error;
        }

    }



