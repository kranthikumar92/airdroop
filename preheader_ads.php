<!--Retrieve data from db -->
<?php
include ('db_config.php');

// Query to retrieve blog post with ID 1
$sql = "SELECT * FROM preheader_ads WHERE sno = '1' AND status = 'Active'";
$result = mysqli_query($conn, $sql);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    // Fetch the first row as an associative array
    $post = mysqli_fetch_assoc($result);

?>
<div class="preheader-content-wrap d-flex">
    <img src="ads_imgs/<?php echo $post['banner_img']; ?>"/>
    <?php echo $post['banner_title']; ?>
    <a href="<?php echo $post['banner_link']; ?>" target="_blank" class="btn btn-green">Join</a>
</div>
<?php
}
?>