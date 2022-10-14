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
    }//insertPromotion function close

    public function updatePromotion($post){
        $name = $_POST['name'];
        $editid = $post['hid'];
        $sql = "UPDATE promotions SET name='$name' WHERE id=' $editid'";
        $result = $this->conn->query($sql);
        if ($result){
            header('location:../FrontEnd/index.php?msg=ins');
        }else{
            echo "Error".$sql."<br>".$this->conn->error;
        }
    }//updatePromotion function close

    public function deletePromotion($delid){
        $sql = "DELETE FROM promotions WHERE id='$delid'";
        $result = $this->conn->query($sql);
        if($result){
            header('location:../FrontEnd/index.php?msg=del');
        }else{
            echo "Error".$sql."<br>".$this->conn->error;
        }
    }


    /*function display promotions*/
    public function displayPromotion (){
        $sql = "SELECT * FROM promotions";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }//while close
            return $data;
        }//if close
    }//display promotions close

    public function displayPromotionById($editid){
        $sql = "SELECT * FROM promotions WHERE id = '$editid'";
        $result = $this->conn->query($sql);
        if ($result->num_rows==1){
            $row = $result->fetch_assoc();
            return $row;
        }//if close
    }//function displayPromotionById

}//class close

?>