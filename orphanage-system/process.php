<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orphanage_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $mother_fullname = $_POST['mother_fullname'];
    $guardian = $_POST['guardian'];
    $dob = $_POST['dob'];
    $death_year = $_POST['death_year'];

    $sql = "INSERT INTO orphanage_db (fullname, mother_fullname, guardian, dob, death_year)
            VALUES ('$fullname', '$mother_fullname', '$guardian', '$dob', '$death_year')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>