<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Christ(Deemed to be University)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="style.css" crossorigin="anonymous">

</head>

<body background="bg.jpg">
  <div class="container-fluid">
  <div class="table">
    <div class="row">


      <div class="col-lg-3">
        <h3>Insert</h3>
        <form action="insert.php" method="post">
	  			<div class="field">
            <input type="number" name="id" required placeholder="student id">
          </div>

          <div class="field space">
          	<input type="text" name="name" required placeholder="student name">
          </div>

          <div class="field space">
          	<input type="number" name="age" required placeholder="age">
          </div>

	 			  <div class="field space">
            <input type="text" name="gender" required placeholder="gender">
          </div>

          <div class="field space">
            <input type="text" name="course" required placeholder="course">
          </div>

          <div class="field space">
            <input type="text" name="address" required placeholder="address">
          </div>

          <div class="field">
          	<input type="submit" value="Insert">
          </div>
        </form>
      </div>



      <div class="col-lg-3">
        <h3>Update</h3>

        <form action="updateName.php" method="post">
          <div class="field">
            <input type="number" name="id" placeholder="student id">
            <input type="text" name="name" placeholder="name">
            <input type="submit" value="Update Name">
          </div>
        </form>

        <hr>

        <form action="updateAge.php" method="post">
          <div class="field">
            <input type="number" name="id" placeholder="student id">
            <input type="number" name="age" placeholder="age">
            <input type="submit" value="Update Age">
          </div>
        </form>

        <hr>

        <form action="updateGender.php" method="post">
          <div class="field">
            <input type="number" name="id" placeholder="student id">
            <input type="text" name="gender" placeholder="gender">
            <input type="submit" value="Update Gender">
          </div>
        </form>

        <hr>

        <form action="updateCourse.php" method="post">
          <div class="field">
            <input type="number" name="id" placeholder="student id">
            <input type="text" name="course" placeholder="course">
            <input type="submit" value="Update Course">
          </div>
        </form>

        <hr>

        <form action="updateAddress.php" method="post">
          <div class="field">
            <input type="number" name="id" placeholder="student id">
            <input type="text" name="address" placeholder="address">
            <input type="submit" value="Update Address">
          </div>
        </form>
      </div>



      <div class="col-lg-3">
        <h3>Delete</h3>
        <form action="delete.php" method="post">
          <div class="field">
            <input type="number" name="id" placeholder="student id">
            <input type="submit" value="Delete Student">
          </div>
        </form>
      </div>



      <div class="col-lg-3">
        <h3>Search</h3>
        <form action="search.php" method="post">
          <div class="field">
            <input type="number" name="id" placeholder="student id">
            <input type="submit" value="Search Student">
          </div>
        </form>
      </div>


    </div>
  </div>

  <div>
    <form action="showall.php" method="post">
      <div class="field">
        <input type="submit" value="Show All MCA Students">
      </div>
    </form>
  </div>
  </div>
</body>
