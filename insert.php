<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $class = $_POST['class'];
    $home_academy = $_POST['home_academy'];
    $host_academy = $_POST['host_academy'];
    $residential = $_POST['residential'];
    $student_id = $_POST['student_id'];
    $financial_aid = $_POST['financial_aid'];

    $sql = "INSERT INTO students (name, age, nationality, religion, class, home_academy, host_academy, residential, student_id, financial_aid) VALUES ('$name', '$age', '$nationality', '$religion', '$class', '$home_academy', '$host_academy', '$residential', '$student_id', '$financial_aid')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>