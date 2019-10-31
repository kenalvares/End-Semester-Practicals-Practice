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
    <h1 class="page-title">User Manager | View Users</h1>
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

      // Setup Query Details
      $selectQuery = "SELECT * FROM $tablename";

      // VIEw
      if(isset($_GET['submit'])) {
        echo "<table border=1 cellpadding=5>";
        echo "<tr>";
          echo "<th>User ID</th>";
          echo "<th>First Name</th>";
          echo "<th>Last Name</th>";
          echo "<th>Email</th>";
          echo "<th>Gender</th>";
          echo "<th>Language</th>";
        echo "</tr>";
        $results = mysqli_query($conn, $selectQuery);
        while($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
          echo "<tr>";
            echo "<th>".$row['id']."</th>";
            echo "<th>".$row['firstname']."</th>";
            echo "<th>".$row['lastname']."</th>";
            echo "<th>".$row['email']."</th>";
            echo "<th>".$row['gender']."</th>";
            echo "<th>".$row['language']."</th>";
          echo "</tr>";
        }
        echo "</table>";
      }

      // Display Feedback
      echo "<a href=\"index.html\">Go Home</a>";
    ?>
  </div>
</body>

</html>