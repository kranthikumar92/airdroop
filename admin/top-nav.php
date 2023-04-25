<?php
session_start();

// Check if user is not logged in, redirect to login.php
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
  header("Location: login.php");
  exit();
}

// Check if session has expired, redirect to login.php
if(time() - $_SESSION['login_time'] > 7200) { // 2 hours in seconds
  session_unset();
  session_destroy();
  setcookie("username", "", time()-3600); // delete cookie
  setcookie("password", "", time()-3600); // delete cookie
  header("Location: login.php");
  exit();
}
?>

<!-- Your index.php page HTML code goes here -->


    
    <!-- Start Top Right -->
    <ul class="top-right">
    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="img/profileimg.png" alt="img"><b><?php echo $_SESSION['username']; ?></b><span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
          <li><a href="users.php"><i class="fa falist fa-user"></i>Users</a></li>
          <li class="divider"></li>
          <li><a href="logout.php"><i class="fa falist fa-power-off"></i> Logout</a></li>
        </ul>
    </li>

    </ul>
    <!-- End Top Right -->