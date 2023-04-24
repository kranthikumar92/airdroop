<!--Retrieve data from db -->
<?php
    // Establish a database connection
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

// Query to retrieve blog post with ID 1
$sql = "SELECT * FROM advertisement WHERE ads_location = 'req_contact_right' AND status = 'Active'";
$result = mysqli_query($conn, $sql);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    // Fetch the first row as an associative array
    $post = mysqli_fetch_assoc($result);

?>
<div class="step-page-adsvisement">
    <a href="<?php echo $post['banner_link']; ?>" class="d-block"><img src="ads_imgs/<?php echo $post['banner_img']; ?>" class="img-fluid" alt="<?php echo $post['banner_title']; ?>"/></a>
</div>
<?php
}
?>