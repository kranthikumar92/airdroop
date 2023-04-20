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
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// define the directory where the images will be stored
$target_dir = "airdrop_imgs/";
$publist_date = date('Y-m-d');

// get the name of the uploaded file
$target_file = $target_dir . basename($_FILES["file"]["name"]);


// move the uploaded file to the target directory
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    // prepare the SQL statement
    $sql = "INSERT INTO airdrop_coins (coin_name, coin_img, coin_tagline, airdrop_description, airdrop_steps, whitepaper, tokens, est_value, end_date, referral_available, referral_link, blockchain, website_link, airdrop_join_link, publish_date, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // prepare the statement
    $stmt = mysqli_prepare($conn, $sql);

    // bind the parameters with form data
    mysqli_stmt_bind_param($stmt, "ssssssssssssss", $_POST['airdrop_title'], $target_file, $_POST['airdrop_tagline'], $_POST['summernote'], $_POST['step_by_step_guide'], $_POST['whitepaper'], $_POST['tokens'], $_POST['est_value'], $_POST['end_date'], $_POST['referral_available'], $_POST['referral_link'], $_POST['blockchain'], $_POST['website_link'], $_POST['airdrop_join_link'], $publist_date, $_POST['status']);

    // execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "Airdrop data inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // close the statement
    mysqli_stmt_close($stmt);
} else {

    echo "Error uploading image.";
}

// close the connection
mysqli_close($conn);

?>