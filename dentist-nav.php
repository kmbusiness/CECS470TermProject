
<nav>
  <ul class="topnav">
    <li><a href="index.php"><img src="images/dentist-logo.png" alt="Logo"><span><b>DR. JOHN'S DENTISTRY</b></span></a></li>

    <?php
    if(isset($_SESSION['login_status'])) {
    	if($_SESSION['login_status'] === 'login_successfull' || $_SESSION['login_status'] === 'account_creation_successfull') {
    		echo '<li class="right"><a href="logout.php">Log Out</a></li>';
    	}
    }
    

    ?>
    <!-- <li class="right"><a href="#">Sign Up</a></li> -->
  </ul>
</nav>
