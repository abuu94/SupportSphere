<?php
// Similar database connection code as above...

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $mother_fullname = $_POST['mother_fullname'];
    $guardian = $_POST['guardian'];
    $dob = $_POST['dob'];
    $death_year = $_POST['death_year'];

    $sql = "UPDATE orphanage_registration
            SET fullname='$fullname', mother_fullname='$mother_fullname', guardian='$guardian', dob='$dob', death_year='$death_year'
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>