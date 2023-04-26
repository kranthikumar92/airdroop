<?php
include('db_config.php');

// Delete a row based on the ID provided in the URL
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM blog_posts WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: blog-list.php");
        exit();
    } else {
        echo "Error deleting blog post: " . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
