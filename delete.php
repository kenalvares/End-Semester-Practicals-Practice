<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="normalize.css" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <title>User Manager | Dashboard</title>
</head>

<body>
  <div id="wrapper">
    <h1 class="page-title">User Manager | Delete User</h1>
    <?php
      // Setup Database Details
      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = '';
      $dbname = 'end_sem_db';
      $tablename = 'users';

      // Setup Connection Details
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
      if(mysqli_connect_errno()) {
        echo "Connection Failed";
      }

      // Get Field Values
      $id = $_GET['id'];

      // Setup Query Details
      $deleteQuery = "DELETE FROM $tablename WHERE id='$id'";
      
      // DELETE
      if(isset($_GET['submit'])) {
        mysqli_query($conn, $deleteQuery);
      }

      // Display Feedback
      echo "Deleted user #$id";
      echo "<a href=\"index.html\">Go Home</a>";
    ?>
  </div>
</body>

</html>