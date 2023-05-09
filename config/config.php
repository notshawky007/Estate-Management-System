<?php
try {
    // Step 1: Define the host
    define('HOST', 'localhost');

    // Step 2: Define the database name
    define('DB_NAME', 'dtu');

    // Step 3: Define the database username
    define('USER', 'root');

    // Step 4: Define the database password
    define('PASSWORD', '');

    // Step 5: Establish a database connection using PDO
    $conn = new PDO('mysql:host=' . HOST . ';dbname=' . DB_NAME . ';', USER, PASSWORD);
    
    // Step 6: Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Connection successful
    echo "Database connection successful!";
} catch (PDOException $e) {
    // Step 7: Handle any exceptions that occur during the connection
    die("Database connection failed: " . $e->getMessage());
}
?>
