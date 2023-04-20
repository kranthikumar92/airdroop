<?php
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

// Define the directory where the images will be stored
$target_dir = "airdrop_imgs/";
$publist_date = date('Y-m-d');

// Check if a file was uploaded and move it to the target directory
if (isset($_FILES["image"])) {
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Error: File already exists.";
        $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["image"]["size"] > 5000000) {
        echo "Error: File size is too large.";
        $uploadOk = 0;
    }
    
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
        echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadOk = 0;
    }
    
    if ($uploadOk == 0) {
        echo "Error uploading image.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Prepare the SQL statement
            $sql = "INSERT INTO airdrop_coins (coin_title, coin_img, airdrop_tagline, airdrop_description, airdrop_steps, whitepaper, tokens, est_value, end_date, referral_available, referral_link, blockchain, website_link, airdrop_join_link, publish_date, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            // Prepare the statement
            $stmt = mysqli_prepare($conn, $sql);
            
            // Bind the parameters with form data
            mysqli_stmt_bind_param($stmt, "ssssssssssssss", $_POST['airdrop_title'], $target_file, $_POST['airdrop_tagline'], $_POST['summernote'], $_POST['step_by_step_guide'], $_POST['whitepaper'], $_POST['tokens'], $_POST['est_value'], $_POST['end_date'], $_POST['referral_available'], $_POST['referral_link'], $_POST['blockchain'], $_POST['website_link'], $_POST['airdrop_join_link'], $publist_date, $_POST['status']);
        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Airdrop data inserted successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        
        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error uploading image.";
    }
}
}

// Close the connection
mysqli_close($conn);
?>