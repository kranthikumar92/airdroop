<?php

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection parameters
$servername = "localhost";
$username = "calix_web_user";
$password = "calixworldhhUUh383287HGSHhs";
$dbname = "calix_cry_world";

// Create database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define the directory where the images will be stored
$target_dir = "airdrop_imgs/";
$publist_date = date('Y-m-d');

// Get the name of the uploaded file
$target_file = $target_dir . basename($_FILES["file"]["name"]);

// Move the uploaded file to the target directory
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {

    // Prepare the SQL statement
    $sql = "INSERT INTO airdrop_coins (coin_name, coin_img, coin_tagline, airdrop_description, airdrop_steps, whitepaper, tokens, est_value, end_date, referral_available, referral_link, blockchain, website_link, airdrop_join_link, publish_date, status) VALUES ('".$_POST['airdrop_title']."', '".$target_file."', '".$_POST['airdrop_tagline']."', '".$_POST['airdrop_description']."', '".$_POST['step_by_step_guide']."', '".$_POST['whitepaper']."', '".$_POST['tokens']."', '".$_POST['est_value']."', '".$_POST['end_date']."', '".$_POST['referral_available']."', '".$_POST['referral_link']."', '".$_POST['blockchain']."', '".$_POST['website_link']."', '".$_POST['airdrop_join_link']."', '".$publist_date."', '".$_POST['status']."')";

    // Execute the statement
    if (mysqli_query($conn, $sql)) {
        echo "Airdrop data inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

} else {

    echo "Error uploading image.";
}

// Close the connection
mysqli_close($conn);

?>