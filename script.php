<?php 

    if($_SERVER["REQUEST_METHODE"] = "post"){ // bach nt2akdo bli luser dkhle lhad lpage mli wrek 3la submit. si nn ghy 3tih error.
        $firstname = htmlspecialchars($_POST["firstname"]); // $_POST["html-name"] ka nakhdo behom les valeurs li t3tawna fl form u kan stockewhom f variable.
        $lastname = htmlspecialchars($_POST["lastname"]);
        $pets = htmlspecialchars($_POST["pets"]);
    }

    echo "hello $firstname $lastname, do you love $pets's like me?";