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
    <h1 class="page-title">User Manager | Modify User</h1>
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
      $language = $_GET['language'];

      // Setup Query Details
      $updateQuery = "UPDATE $tablename SET language='$language' WHERE id='$id';";
      
      // UPDATE
      if(isset($_GET['submit'])) {
        mysqli_query($conn, $updateQuery);
      }

      // Display Feedback
      echo "User #$id's language changed to $language";
      echo "<a href=\"index.html\">Go Home</a>";
    ?>
  </div>
</body>

</html>