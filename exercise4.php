<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php  

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "exercise4";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// // Create database
// $sql = "CREATE DATABASE $dbname";
// if (mysqli_query($conn, $sql)) {
//     echo "Database $dbname created successfully! \n";
// } else {
//     echo "Error creating database $dbname: " . mysqli_error($conn);
// }

// // sql to create table
// $sql = "CREATE TABLE exercise4.idk (
// 		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// 		firstname VARCHAR(20) NOT NULL,
// 		lastname VARCHAR(20) NOT NULL,
// 		reg_date TIMESTAMP
// 		)";

// if (mysqli_query($conn, $sql)) {
//     echo "Table IDK created successfully" . "\n";
// } else {
//     echo "Error creating table: " . mysqli_error($conn) . "\n";
// }

$sql = "INSERT INTO idk (firstname, lastname)
VALUES('Marry', 'Sue')";

if (mysqli_query($conn, $sql)) {
    echo "New record created.\n";
} else {
    echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
}

mysqli_close($conn);


?>

</body>
</html>