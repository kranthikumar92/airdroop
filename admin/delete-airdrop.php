<?php
// Database connection parameters
$servername = "localhost";
$username = "calix_web_user";
$password = "calixworldhhUUh383287HGSHhs";
$dbname = "calix_cry_world";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete a row based on the ID provided in the URL
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM airdrop_coins WHERE sno = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: airdrops.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Close database connection
$conn->close();
?>