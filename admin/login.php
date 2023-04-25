<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <title>Kode - Premium Bootstrap Admin Template</title>

  <!-- ========== Css Files ========== -->
  <link href="css/root.css" rel="stylesheet">
  <style type="text/css">
    body{background: #F5F5F5;}
  </style>
  </head>
  <body>

    <div class="login-form">
    <?php
// Database connection parameters
$servername = "localhost";
$username = "calix_web_user";
$password = "calixworldhhUUh383287HGSHhs";
$dbname = "calix_cry_world";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['login'])) {
  // Retrieve username and password from form data
  $username = $_POST['username'];
  $password = $_POST['password'];
  $remember = isset($_POST['remember']) ? true : false;

  // Query database to check if user exists and password matches
  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND status ='Active'";
  $result = $conn->query($sql);

  // If user exists and password matches, redirect to index.php
  if ($result->num_rows > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['login_time'] = time(); // set session login time

    if ($remember) {
      setcookie('username', $username, time() + (86400 * 30), "/"); // 30 days
      setcookie('password', $password, time() + (86400 * 30), "/"); // 30 days
    }

    header("Location: index.php");
    exit();
  } else {
    echo "Invalid username or password";
  }
}

$conn->close();
?>
<form action="login.php" method="POST">
  <div class="top">
    <img src="img/kode-icon.png" alt="icon" class="icon">
    <h1>Kode</h1>
    <h4>Bootstrap Admin Template</h4>
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

      <div class="footer-links row">
        <div class="col-xs-6"><a href="#"><i class="fa fa-external-link"></i> Register Now</a></div>
        <div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> Forgot password</a></div>
      </div>
    </div>

</body>
</html>