<form action="test.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" value="Upload">
</form>

<?php
// Define database connection parameters
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

// Check if image file was uploaded
if (isset($_FILES["image"])) {
    // Define upload directory
    $target_dir = "airdrop_imgs/";

    // Define filename
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
    } else {
        // Upload file to server
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Insert image path into database
            $sql = "INSERT INTO test (test_name) VALUES ('$target_file')";

            if ($conn->query($sql) === TRUE) {
                echo "File uploaded successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Close database connection
$conn->close();
?>
