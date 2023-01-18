<?php

class Connection{

    // Create connection
    public function conn(){
          try {
              $conn = new PDO("mysql:host=localhost;dbname=e-lyrics",'root',"");
              return $conn;
           
  
            } catch(PDOException $e) {
              echo "Connection failed: " . $e->getMessage();
            }
  }
  
  
  }
$checkConn = new connection();
$checkConn -> conn();





class Crud extends Connection{

    private $Title;
    private $Creationdate;
    private $Lyrics;
    private $Name;

    public function setTitle($Title){

        $this->Title=$Title;

    }

    public function GetTitle(){
         $this->Title;


    }

    public function setCreationdate($Creationdate){

        $this->Creationdate=$Creationdate;

    }

    public function GetCreationdate(){
         $this->Creationdate;


    }
    public function SetLyrics($Lyrics){

        $this->Lyrics=$Lyrics;

    }

    public function GetLyrics(){
         $this->Lyrics;


    }
    public function setName($Name){

        $this->Name=$Name;

    }

    public function GetName(){
         $this->Name;
        


    }

    public function InsertData(){
     
        
       
       
        for($i=0;$i<count($this->Name); $i++){

            $req= $this ->conn()->prepare("INSERT INTO `song-info` (`Title`,`Creation-date`,`Lyrics`,`Name`) VALUES (?,?,?,?)" );

            $req->execute([$this->Title[$i],$this->Creationdate[$i],$this->Lyrics[$i],$this->Name[$i]]);
    
    
            // $req2= $this ->conn()->prepare("INSERT INTO `artiste` (`Name`) VALUES (?)" );
    
          
            // $req2->execute([$this->Name[$i]]);
          

        }

    

       
    }

    public function ShowAllData()
    {
        $req = $this->conn()->prepare("SELECT * FROM `song-info`");
        $req->execute();
        return $req->fetchAll();
    }









    
    
    
  
}








?>