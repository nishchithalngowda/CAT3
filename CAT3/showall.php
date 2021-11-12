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

  $sql = "SELECT stuid, stuname FROM stuinfo WHERE course='MCA'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0)
  {
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
    {
      $id = $row["stuid"];
      $name = $row["stuname"];
      echo "ID: $id <br>Name: $name <br><br><br><br>";
    }

    echo "<a href='./index.php'><button>Back</button></a>";
  }
  else
  {
    // echo "0 results";
  }

  mysqli_close($conn);
?>
