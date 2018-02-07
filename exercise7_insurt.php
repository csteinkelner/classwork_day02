<?php 


echo ("<html><body>");

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "exercise4";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "\n");
}

// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST['lastname']);

// attempt insert query execution
$sql = "INSERT INTO idk (firstname, lastname) VALUES ('$first_name', '$last_name')";


if (mysqli_query($conn, $sql)) {
    echo "<h1>New record created.<h1>";
} else {
    echo "<h1>Record creation error for: </h1>" . 
          "<p>" . $sql . "</p>" . mysqli_error($conn);
}

?>