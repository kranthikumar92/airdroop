<?php
include('db_config.php');

// Delete a row based on the ID provided in the URL
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM info_pages WHERE sno = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: info-pages.php");
        exit();
    } else {
        echo "Error deleting blog post: " . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
