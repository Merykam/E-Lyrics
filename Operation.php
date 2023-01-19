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


if (isset($_GET["id"])) {

   

    $DeletSong = new Crud();

    $DeletSong->setTid($_GET["id"]);



    $DeletSong->delete($_GET["id"]);


    header("location:dashbord.php");
}

if (isset($_POST["update"])) {

    $Song_update = new Crud();
    $Song_update->setTid($_POST["id"]);
    // var_dump($Song_update);
    // die;
    $Song_update->setTitle($_POST["Title_update"]);
    $Song_update->setCreationdate($_POST["date_update"]);
    $Song_update->SetLyrics($_POST["lyrics_update"]);
    $Song_update->setName($_POST["Name_update"]);
    

    $Song_update->update();

    header("location:dashbord.php");
}






?>