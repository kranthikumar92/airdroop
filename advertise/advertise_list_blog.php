<!--Retrieve data from db -->
<?php
    // Define the database connection parameters
    include ('db_config.php');

// Query to retrieve blog post with ID 1
$sql = "SELECT * FROM advertisement WHERE ads_location = 'airdrop_list_blog' AND status = 'Active'";
$result = mysqli_query($conn, $sql);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    // Fetch the first row as an associative array
    $post = mysqli_fetch_assoc($result);

?>
    <div class="sidebar-advisement d-none d-lg-block">
        <a href="<?php echo $post['banner_link']; ?>" target="_blank"><img src="ads_imgs/<?php echo $post['banner_img']; ?>" alt="<?php echo $post['banner_title']; ?>"/></a>
    </div>
<?php
}
?>