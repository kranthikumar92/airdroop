<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Crypto Airdrop Listing Website is your one-stop destination to find and participate in the latest cryptocurrency airdrops. Get access to the hottest and most promising airdrops.">
  <meta name="keywords" content="Crypto Airdrop, Cryptocurrency, Airdrops, Free Coins, Tokens, Crypto Community, Blockchain, ICO, Crypto Rewards, Crypto Giveaways" />
  <title>Admin | Airdrop Listo - Crypto Airdrop Listing Template</title>
  <?php
        include('db_config.php');
    ?>
  <!-- ========== Css Files ========== -->
  <link href="css/root.css" rel="stylesheet">
  <style type="text/css">
    body{background: #F5F5F5;}
  </style>
  </head>
  <body>

    <div class="login-form">
    <?php

if (isset($_POST['login'])) {
    // Retrieve username and password from form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']) ? true : false;

    // Query database to check if user exists
    $sql = "SELECT * FROM users WHERE username = '$username' AND status ='Active'";
    $result = $conn->query($sql);

    // If user exists, verify password hash
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hash = $row['password'];
        if (password_verify($password, $hash)) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $hash;
            $_SESSION['login_time'] = time(); // set session login time

            if ($remember) {
                setcookie('username', $username, time() + (86400 * 30), "/"); // 30 days
                setcookie('password', $hash, time() + (86400 * 30), "/"); // 30 days
            }

            header("Location: index.php");
            exit();
        } else {
            echo "Invalid password";
        }
    } else {
        echo "Invalid username or password";
    }
}

$conn->close();
?>

<form action="login" method="POST">
  <div class="top">
  
    <h1>Admin</h1>
    <h4>CalixWorld.com</h4>
  </div>
  <div class="form-area">
    <div class="group">
      <input type="text" name="username" class="form-control" placeholder="Username">
      <i class="fa fa-user"></i>
    </div>
    <div class="group">
      <input type="password" name="password" class="form-control" placeholder="Password">
      <i class="fa fa-key"></i>
    </div>
    <div class="checkbox checkbox-primary">
      <input id="checkbox101" type="checkbox" name="remember" checked>
      <label for="checkbox101"> Remember Me</label>
    </div>
    <button type="submit" name="login" class="btn btn-default btn-block">LOGIN</button>
  </div>
</form>

      
    </div>

</body>
</html>