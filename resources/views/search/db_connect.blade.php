<?php
function connect(){
  $username="root";
  $pass="12345";
  $servername="localhost";
  $database="mydb";
  $conn=new mysqli($servername,$username,$pass,$database);
  if($conn->connect_error){
      die("Connection failed: ". $conn->connect_error);
  }
  return $conn;
}
function getData($query){ 
    $conn=connect();
    $result = $conn->query($query);
    $res=array();
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $res[]=$row;
      };
    }
     else {
      echo "0 results";
    }
    return $res;
    $conn->close();
  };
  function saveData($sql){
   $conn=connect();
   if($conn->query($sql)==TRUE){
    return "OK";
   } 
   else{
    return "error".$sql."<br>".$conn->error;
   }
   
  };
  
?>
