<?php
// Connect to the database
$servername = "localhost";
$username = "calix_web_user";
$password = "calixworldhhUUh383287HGSHhs";
$dbname = "calix_cry_world";

$conn = mysqli_connect("localhost", $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $coinName = $_POST["coin_name"];
    $projectName = $_POST["project_name"];
    $email = $_POST["email"];
    $designation = $_POST["designation"];
    $icoStartDate = $_POST["ico_start_date"];
    $icoEndDate = $_POST["ico_end_date"];
    $totalAirdropValue = $_POST["total_airdrop_value"];
    $individualRewardValue = $_POST["individual_reward_value"];
    $referralBonus = $_POST["referral_bonus"];
    $coinRateAgainstUSD = $_POST["coin_rate_against_usd"];
    $projectTelegramLink = $_POST["project_telegram_link"];
    $projectTwitterLink = $_POST["project_twitter_link"];
    $projectDiscordLink = $_POST["project_discord_link"];
    $projectContactTelegramID = $_POST["project_contact_telegram_id"];
    $moreInformation = $_POST["more_information"];

    // Generate unique reference number with 8 digits
    $reference = mt_rand(10000000, 99999999);

    // Insert form data into database
    $sql = "INSERT INTO new_airdrop_requests (reference, coin_name, project_name, email, designation, ico_start_date, ico_end_date, total_airdrop_value, individual_reward_value, referral_bonus, coin_rate_against_usd, project_telegram_link, project_twitter_link, project_discord_link, project_contact_telegram_id, more_information) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "dssssssdddssssss", $reference, $coinName, $projectName, $email, $designation, $icoStartDate, $icoEndDate, $totalAirdropValue, $individualRewardValue, $referralBonus, $coinRateAgainstUSD, $projectTelegramLink, $projectTwitterLink, $projectDiscordLink, $projectContactTelegramID, $moreInformation);
    $result = mysqli_stmt_execute($stmt);
    if ($result) {
        echo "Form data added to database successfully. Reference number: " . $reference;
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }
    mysqli_stmt_close($stmt);
}

// Close database connection
mysqli_close($conn);
?>
