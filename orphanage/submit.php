<?php
// Database connection settings
$servername = "localhost";
$username = "root"; // Default XAMPP MySQL username
$password = "";     // Default XAMPP MySQL password is empty
$dbname = "orphanage_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO orphans (orphan_name, mother_name, guardian, date_of_birth, year_of_death) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssssi", $orphan_name, $mother_name, $guardian, $date_of_birth, $year_of_death);

// Set parameters and execute
$orphan_name = $_POST['orphan_name'];
$mother_name = $_POST['mother_name'];
$guardian = $_POST['guardian'];
$date_of_birth = $_POST['date_of_birth'];
$year_of_death = $_POST['year_of_death'];

if ($stmt->execute()) {
  echo "<div class='container mt-5'><div class='alert alert-success' role='alert'>New record created successfully</div></div>";
} else {
  echo "<div class='container mt-5'><div class='alert alert-danger' role='alert'>Error: " . $stmt->error . "</div></div>";
}

// Close connections
$stmt->close();
$conn->close();
?>
