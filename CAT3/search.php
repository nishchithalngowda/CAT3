<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "christ";

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn)
  {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM stuinfo WHERE stuid='$_POST[id]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0)
  {
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
    {
      $id = $row["stuid"];
      $name = $row["stuname"];
      $age = $row["age"];
      $gender = $row["gender"];
      $course = $row["course"];
      $address = $row["address"];
    }

    echo "ID: $id <br>Name: $name <br>Age: $age<br>Gender: $gender<br>Course: $course<br>Address: $address <br><a href='./index.php'><button>Back</button></a>";
  }
  else
  {
    // echo "0 results";
  }

  mysqli_close($conn);
?>
