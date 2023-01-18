<?php
include "Crud.php";

if(isset($_POST["Add_lyrics"])){


    $New_lyrics = new Crud();

    $Name=$_POST["Name"];
 
    $Title=$_POST["Title"];
    $date=$_POST["date"];
    $lyrics=$_POST["Lyrics"];

    

    $New_lyrics ->setName($Name);
    $New_lyrics ->setCreationdate($date);
    $New_lyrics ->SetLyrics($lyrics);
    $New_lyrics ->setTitle($Title);


    $New_lyrics->InsertData();

    header("location:dashbord.php");

}

$show_data  =   new Crud();

$all_data   =   $show_data->ShowAllData();






?>