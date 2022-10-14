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
            return $this->conn;
        } 
    }//constructor close 
     /*function define for insert promotions*/
    public function insertPromotion($post){
        $name = $_POST['name'];
        $sql = "INSERT INTO promotions(name)VALUES('$name')";
        $result = $this->conn->query($sql);
        if ($result){
            header('location:../FrontEnd/index.php?msg=ins');
        }else{
            echo "Error".$sql."<br>".$this->conn->error;
        }
    }
}//class close

?>