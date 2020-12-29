<?php
class returns
{
    private $conn;
    function __construct() {
    
    $servername = "localhost";
    $dbname = "1projetweb";
    $username = "root";
    $password = "";
  

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
       }else{
        $this->conn=$conn;  
       }

    }


    public function returns_list(){
        
       $sql = "SELECT * FROM returnss ORDER BY us_id asc ";
       $result=  $this->conn->query($sql);
       return $result;  
    }
    
    public function create_returns_info($post_data=array()){
         
       if(isset($post_data['create_returns'])){
       $us_name= mysqli_real_escape_string($this->conn,trim($post_data['us_name']));
       $email_address= mysqli_real_escape_string($this->conn,trim($post_data['email_address']));
       $typee= mysqli_real_escape_string($this->conn,trim($post_data['typee']));
       $reason= mysqli_real_escape_string($this->conn,trim($post_data['reason']));
       $adress= mysqli_real_escape_string($this->conn,trim($post_data['adress']));

       $sql="INSERT INTO returnss (us_name,email_address, reason,adress,typee) VALUES ('$us_name', '$email_address', '$reason','$adress','$typee')";
        
        $result=  $this->conn->query($sql);
        
           if($result){
           
               $_SESSION['message']="Successfully addedd";
               
              header('Location: ../views/shop.php');
           }
          
       unset($post_data['create_returns']);
       }
       
        
    }
    
    public function view_returns_by_returns_id($id){
       if(isset($id)){
       $us_id= mysqli_real_escape_string($this->conn,trim($id));
      
       $sql="Select * from returnss where us_id='$us_id'";
        
       $result=  $this->conn->query($sql);
     
        return $result->fetch_assoc(); 
    
       }  
    }
    
    
   
    public function delete_returns_info_by_id($id){
        
       if(isset($id)){
       $us_id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  returnss  WHERE us_id =$us_id";
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Deleted ";
            
           }
       }
         header('Location: ../back/views/indexRE.php'); 
    }
    function __destruct() {
    mysqli_close($this->conn);  
    }
    
}

?>