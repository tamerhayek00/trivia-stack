<?php
    if(isset($_GET['logout'])){
        if(isset($_COOKIE['userArray'])){
            unset($_COOKIE["userArray"]);
            setcookie("userArray", null, time()-3600);
            header("location: ./");
        }
    }
?>