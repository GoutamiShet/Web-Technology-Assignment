<?php
$servername = "localhost";
$username = "root"; 
$password = "root";      
$dbname = "regdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$course = $_POST['course'];

$sql = "INSERT INTO registrations (name, email, phone, gender, course)
VALUES ('$name', '$email', '$phone', '$gender', '$course')";

$conn->query($sql);
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<title>Submission Successful</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <h1 class="title">Registration Successful 🎉</h1>

  <h3>Your Submitted Details:</h3>

  <p><strong>Name:</strong> <?php echo $name; ?></p>
  <p><strong>Email:</strong> <?php echo $email; ?></p>
  <p><strong>Phone:</strong> <?php echo $phone; ?></p>
  <p><strong>Gender:</strong> <?php echo $gender; ?></p>
  <p><strong>Course:</strong> <?php echo $course; ?></p>

  <a href="index.html">
    <button class="btn">Go Back</button>
  </a>
</div>

</body>
</html>
