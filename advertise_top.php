<!--Retrieve data from db -->
<?php
    // Define the database connection parameters
    include ('db/db_config.php');

// Query to retrieve blog post with ID 1
$sql = "SELECT * FROM advertisement WHERE ads_location = 'top_banner' AND status = 'Active'";
$result = mysqli_query($conn, $sql);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    // Fetch the first row as an associative array
    $post = mysqli_fetch_assoc($result);

?>
<div class="row">
    <div class="col-md-12 m-auto">
        <div class="ads-content-wrap">
            <a href="<?php echo $post['banner_link']; ?>" target="_blank" class="d-block"><img src="ads_imgs/<?php echo $post['banner_img']; ?>" class="img-fluid" alt="<?php echo $post['banner_title']; ?>"/></a>
        </div>
    </div>
</div>

<?php
}
?>
