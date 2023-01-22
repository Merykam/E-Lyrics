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


    private $id;
    private $Title;
    private $Creationdate;
    private $Lyrics;
    private $Name;


    public function setTid($id){

        $this->id=$id;

    }

    public function GetTid(){
         $this->id;


    }

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
    
        }   
    }

    public function ShowAllData()
    {
        $req = $this->conn()->prepare("SELECT * FROM `song-info`");
        $req->execute();
        return $req->fetchAll();
    }


    
    public function update()
    {
        $stm = $this->conn()->prepare("UPDATE `song-info` SET `Title`=?,`Creation-date`=?, `Lyrics`=?, `Name`=? WHERE id=?");

        $stm->execute([$this->Title,$this->Creationdate,$this->Lyrics,$this->Name,$this->id]);
        
    }



    public function delete()
    {
        $stmt = $this->conn()->prepare("DELETE FROM `song-info` WHERE id=?");
        $stmt->execute([$this->id]);
      
    }




    
    
    
  
}
class statistique extends connection{

    public function CountAdmins(){
        $stm = $this->conn()->prepare("SELECT COUNT(*) as 'countAdmin' FROM `admines`");
        $stm->execute(); 
        $s = $stm->fetch();
        // var_dump($s);
        
        return $s['countAdmin'];

    }


    public function CountTitles(){
        $stm = $this->conn()->prepare("SELECT COUNT(*) as 'countTitle' FROM `song-info`");
        $stm->execute(); 
        $s = $stm->fetch();
        // var_dump($s);
        
        return $s['countTitle'];

    }

    public function CountArtist(){
        $stm = $this->conn()->prepare("SELECT COUNT(DISTINCT `Name`) as 'countArtists' FROM `song-info`");
        $stm->execute(); 
        $s = $stm->fetch();
        // var_dump($s);
        
        return $s['countArtists'];
     
        // var_dump($s);
        
        // return $stm->fetch();

    }



}









?>