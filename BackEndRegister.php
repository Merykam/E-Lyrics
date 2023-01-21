<?php




include "SignUpCrud.php";

if(isset($_POST["submit"])){
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $password = $_POST["password"];
    $Cpassword = $_POST["Cpassword"];


    $NewAdmin = new Register($Name,$Email,$password,$Cpassword);
    $NewAdmin->signupAdmin();
    $NewAdmin->checkUser($Name,$Email);
    $NewAdmin->inserData();
    
    header("location:index.php"); 
    exit();


    
}

if(isset($_POST["login"])){

    $Email = $_POST["Email"];
    $password = $_POST["password"];
    


    $NewAdmin = new LogIn($Email,$password);
    $NewAdmin->EmptyInputs();
   
    $NewAdmin->getAdmin();
    
    header("location:dashbord.php");
    exit(); 


    
}






?>