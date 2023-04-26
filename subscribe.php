<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the email address from the AJAX request
    $email = $_POST["email"];

    // Define the database connection parameters
    include ('db_config.php');

    // Check if the email address already exists in the "subscribers" table
    $sql = "SELECT * FROM subscribers WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // If the email address already exists, display an error message
        echo "This email address is already subscribed.";
    } else {
        // If the email address does not exist, insert it into the "subscribers" table
        $sql = "INSERT INTO subscribers (email, date_time) VALUES ('$email', NOW())";
        if ($conn->query($sql) === TRUE) {
            echo "Success";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
}
?>
