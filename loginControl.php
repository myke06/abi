<?php
session_start();
require("./DAO/dao.php");

 if (isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["password"]) && !empty($_POST["password"])) {
     $email = htmlentities($_POST["email"]);
     $password = htmlentities($_POST["password"]);

     if (cnsDao::existLogin($email, $password)) {
         $_SESSION["email"] = $email;
         $group = cnsDao::getGroupUser($email);
         $_SESSION["group"]=$group;

         echo "OK";
     }
 }
