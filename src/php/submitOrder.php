<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$contact = $_POST['contact'];
$dish = $_POST['dishes'];

echo $first_name, $last_name, $contact, $dish;

// Database credentials
$host = "sql12.freesqldatabase.com";
$databaseName = "sql12677951";
$user = "sql12677951";
$password = "gqpdArHTUj";
$port = 3306;

// Create a connection
$mysqli = new mysqli($host, $user, $password, $databaseName, $port);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} else {
    try {
        echo "Connected successfully";
        $query = "INSERT INTO orders (first_name, last_name, contact, dish) VALUES ('$first_name', '$last_name', '$contact', '$dish')";
        $result = $mysqli->query($query);
        echo "Created Order Successfully";
        echo $result;
    } catch (error) {
        echo $error;
    }
}


// Perform your database operations here

// Close the connection when done
$mysqli->close();
?>