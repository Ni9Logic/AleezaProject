<?php
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$contact = $_POST['contact'];
$dishes = $_POST['dishes'];


// Database credentials
$host = "localhost";
$databaseName = "FoodPanda";
$user = "root";
$password = "root";
$port = 3306;

// Create a connection
$mysqli = new mysqli($host, $user, $password, $databaseName, $port);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} else {
    try {
        echo "Connected successfully";
        $query = "INSERT INTO orders (firstname, lastname, contact, dishes) VALUES ('$firstname', '$lastname', '$contact', '$dishes')";
        $result = $mysqli->query($query);
        if ($result){
           echo '<br>Order Created Successfully';
        }
    } catch (error) {
        echo $error;
    }
}


// Perform your database operations here

// Close the connection when done
$mysqli->close();
?>