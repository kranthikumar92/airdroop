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
$sql = "SELECT * FROM advertisement WHERE ads_location = 'airdrop_desc' AND status = 'Active'";
$result = mysqli_query($conn, $sql);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    // Fetch the first row as an associative array
    $post = mysqli_fetch_assoc($result);

?>

<div class="preheader-content-wrap d-flex">
    <img src="assets/img/images/pre-ads-logo.png" alt="Ads Logo"/>
    <h2 class="h5">JOIN WITH US & GET <span>20% - 50% BONUS</span></h2>
    <a href="<?php echo $post['banner_link']; ?>" class="btn btn-green">Join</a>
</div>
<?php
}
?>