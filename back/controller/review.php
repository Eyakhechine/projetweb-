<?php
class reviews
{
    private $conn;
    function __construct() {
   
    $servername = "localhost";
    $dbname = "crud";
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


    public function reviews_list(){
        
       $sql = "SELECT * FROM reviews ORDER BY review_id asc ";
       $result=  $this->conn->query($sql);
       return $result;  
    }
    
    public function create_review_info($post_data=array()){
         
       if(isset($post_data['create_review'])){
       $namec= mysqli_real_escape_string($this->conn,trim($post_data['namec']));
       $email_address= mysqli_real_escape_string($this->conn,trim($post_data['email_address']));
       
       $review= mysqli_real_escape_string($this->conn,trim($post_data['review']));
       
       $sql="INSERT INTO reviews (namec, email_address, review) VALUES ('$namec', '$email_address', '$review')";
        
        $result=  $this->conn->query($sql);
        
           if($result){
           
               $_SESSION['message']=" review added successfully";
               
              header('Location:../views/indexreview.php');
           }
          
       unset($post_data['create_review']);
       }
       
        
    }
    
    public function view_review_by_review_id($id){
       if(isset($id)){
       $review_id= mysqli_real_escape_string($this->conn,trim($id));
      
       $sql="Select * from reviews where review_id='$review_id'";
        
       $result=  $this->conn->query($sql);
     
        return $result->fetch_assoc(); 
    
       }  
    }
    
    
    
    
    public function delete_review_info_by_id($id){
        
       if(isset($id)){
       $review_id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  reviews  WHERE review_id =$review_id";
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Deleted review";
            
           }
       }
         header('Location: ../views/indexreview.php'); 
    }
    function __destruct() {
    mysqli_close($this->conn);  
    }
    
}

?>