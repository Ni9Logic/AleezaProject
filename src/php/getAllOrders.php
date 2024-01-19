<?php

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
        $query = "SELECT * FROM Orders";
        $result = $mysqli->query($query);

        // Check if the query was successful
        if (!$result) {
            echo 'Error Getting Orders: ' . $mysqli->error;
        } else {
            // Fetch the results as an associative array
            $data = $result->fetch_all(MYSQLI_ASSOC);

            // Convert the data to JSON and echo it
            echo json_encode($data);
            return json_encode($data);
        }

        // No need to return $result here; just echo or use it as needed
    } catch (Exception $e) {
        // Catch any exceptions that might occur
        echo 'Error: ' . $e->getMessage();
    } finally {
        // Close the connection when done
        $mysqli->close();
    }
}
?>
