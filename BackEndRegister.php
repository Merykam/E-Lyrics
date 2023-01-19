<?php




include "SignUpCrud.php";

if(isset($_POST["submit"])){
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $password = $_POST["password"];
    $Cpassword = $_POST["Cpassword"];


    $NewAdmin = new Register($Name,$Email,$password,$Cpassword);

    
}






?>