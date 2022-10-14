<?php
/*Database connection*/
class Model{
    private $servername = 'localhost';
    private $userrname = 'root';
    private $password = '';
    private $dbname = 'brief1';
    private $conn;

    function __construct(){
        $this->conn = new mysqli($this->servername,$this->userrname,$this->password,$this->dbname);
        if($this->conn->connect_error){
            echo 'Connection Failed';
        }else{
            echo 'Connected';
        } 
    }//constructor close  
}//class close

?>