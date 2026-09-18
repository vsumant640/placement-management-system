<?php
// Step 1: Connect to the database
$host = 'localhost';
$username = 'username';
$password = 'password';
$database = 'your_database';

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Step 2: Retrieve data
$sql = "SELECT * FROM placement";
$result = $connection->query($sql);

// Step 3: Process the data (if needed)

// Step 4: Generate the report
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Step 5: Close the connection
$connection->close();
?>
