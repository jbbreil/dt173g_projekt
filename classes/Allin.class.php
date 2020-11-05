<?php
class Allin {

    private $db;

    function __construct(){
        // Databas anslutning
        $this->db = new mysqli(DBHOST, DBUSER, DBPASS, DBDATABASE);
        if($this->db->connect_errno > 0){
            die("Fel vid anslutning: " . $this->db->connect_error);
        } 

    }
  
    // läs av kurser 
   function getAllDataTable(){
        $sql = 
        "SELECT `code`, `name`, `progression`, `syllabus` FROM `courses` 
        UNION 
        SELECT `id`, `date`, `company`, `title` FROM `work`";  

        $result = $this->db->query($sql);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);

    }
    
}
