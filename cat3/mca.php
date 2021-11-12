<html>
<head>
    <title>View Student Info</title>
<style>
    body {
    background-color: grey;
    height: 100vh;
  }
table {
  font-family: arial, sans-serif;
  background-color: #grey;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
  color: #000;
}

a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid #15172b;
  border-radius: 12px;
  width: 50px;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #15172b;
  color: white;
}

</style>
<?php  

 
$conn = mysqli_connect("localhost", "root", "","christ");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "SELECT * FROM stuinfo where course='MCA'";  

$retval=mysqli_query($conn, $sql);  
 
 ?>
 <table width='200' border='1'>
 <tr><th>Id</th><th>Student Name</th><th>Age</th><th>Gender</th><th>Course</th><th>Address</th><th colspan='2'>For modification</th></tr>
 <?php
 
 while($row = mysqli_fetch_assoc($retval))
 {  
echo  "<tr><td>$row[stuid]</td><td>$row[stuname]</td> <td>$row[age]</td><td>$row[gender]</td><td>$row[course]</td><td>$row[address]</td> <td><a href='update1.php?stuid=$row[stuid]'>Edit</a></td><td><a href='delete.php?stuid=$row[stuid]'>Delete</a></td>  </tr>";
	
  } 
 ?>
 </table>
 <h4><a href="index.html">Back</a></h4>
 <html>
<head>
    <title>View Student Info</title>
<style>
    body {
    background-color: #000;
    height: 100vh;
  }
table {
  font-family: arial, sans-serif;
  background-color: #15172b;
  width: 100%;
  color: #fff;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
  color: #000;
}

a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid #15172b;
  border-radius: 12px;
  width: 50px;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #15172b;
  color: white;
}

</style>
<?php  

 
$conn = mysqli_connect("localhost", "root", "","christ");  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "SELECT * FROM stuinfo";  

$retval=mysqli_query($conn, $sql);  
 
 ?>
 <table width='200' border='1'>
 
 <?php
mysqli_close($conn);  
?>
</head>
</html>  <h4><a href="mca.php">MCA</a></h4>
 
 <?php
mysqli_close($conn);  
?>
</head>
</html>  