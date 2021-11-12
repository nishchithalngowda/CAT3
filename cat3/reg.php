<?php  

$a= $_REQUEST['fname'];
$l= $_REQUEST['age'];
$b= $_REQUEST['gender'];
$c = $_REQUEST['course'];
$d = $_REQUEST['address'];
$e= $_REQUEST['email'];
$f = $_REQUEST['psw'];

$conn = mysqli_connect("localhost", "root", "","christ");  

if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "INSERT INTO `stuinfo` (`stuid`, `stuname`, `age`, `gender`,`course`, `address`,`email`, `psw`  ) VALUES ('','$a','$l','$b','$c', '$d', '$e', '$f');";  
 
?>
		 <script type="text/javascript">
				alert('Yippie');
				window.location="login.html";
		 </script>
		<?php
  mysqli_query($conn, $sql); 
    ?>
	<!-- <script type="text/javascript">
				alert('Registration successful');
				window.location="login_reg.html";
		 </script>!>
	<?php

  mysqli_close($conn);
 
 ?>
 