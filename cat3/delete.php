<?php  



$conn = mysqli_connect("localhost", "root", "","christ");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
 
  $sql = "delete * from stuinfo";  
echo "Data has updated Sucessfully<br><a href='view.php'>BACK</a>";
//echo $sql;

 mysqli_query($conn, $sql);  
 
mysqli_close($conn);  
?>