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
    <h1 class="page-title">User Manager | Add User</h1>
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
      $firstname = $_GET['firstname'];
      $lastname = $_GET['lastname'];
      $email = $_GET['email'];
      $gender = $_GET['gender'];
      $language = $_GET['language'];

      // Setup Query Details
      $insertQuery = "INSERT INTO $tablename (firstname, lastname, email, gender, language) VALUES ('$firstname', '$lastname', '$email', '$gender', '$language');";
      
      // INSERT
      if(isset($_GET['submit'])) {
        mysqli_query($conn, $insertQuery);
      }

      // Display Feedback
      echo $firstname." ".$lastname." was added successfully!";
      echo "<a href=\"index.html\">Go Home</a>";
    ?>
  </div>
</body>

</html>