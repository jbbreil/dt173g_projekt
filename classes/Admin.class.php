<?php
class Admin {

    private $db;

    private $username; 
	private $password; 


    function loginAdmin($username, $password) {
		/* Kontrollera om värden är korrekta */ 
		if(!$this->setUsername($username)){ return false; }
		if(!$this->setPassword($password)){ return false; }
		
		if($username == "admin" && $password == "password") {
			$_SESSION['username'] = $username; // Det finns en användare med den här username och password då beviljas inloggning. 
			return true;
		} else {
			return false;
		}
	}


    /* Skydd mot sql-injection 
    kontroll om specialtecken i en sträng åt en SQL-fråga genom att ersätta citaten (‘) med bakåtvänd snedstreck (\)*/
    function setPassword($password){
		if($password != ""){
			/* Skydd mot sql-injection */
			$this->password = mysqli_real_escape_string($this->db, $password);
			return true;
		}else{
			return false;
		}
	}
	function setUsername($username){
		if($username != ""){  
			/* Skydd mot sql-injection */
			$this->username = mysqli_real_escape_string($this->db, $username);;
			return true;
		}else{
			return false;
		}
	}
}
