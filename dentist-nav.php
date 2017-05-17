
<nav>
  <ul class="topnav">
    <li><a href="index.php"><img src="images/dentist-logo.png" alt="Logo"><span><b>DR. JOHN'S DENTISTRY</b></span></a></li>

    <?php
    if (!isset($_SESSION))
      {
        session_start();
      }
    if(isset($_SESSION['login_status'])) {
        if(isset($_SESSION['login_first_name']) && isset($_SESSION['login_last_name'])) {
            echo '<div>Welcome, '.$_SESSION['login_first_name'].' '.$_SESSION['login_last_name'].'</div>';
        }
    	if($_SESSION['login_status'] === 'login_successfull' || $_SESSION['login_status'] === 'account_creation_successfull') {
    		echo '<li class="right"><a href="logout.php">Log Out</a></li>';
    	}
    }


    ?>
    <!-- <li class="right"><a href="#">Sign Up</a></li> -->
  </ul> 
  <div class="allen-container">
    <ul class="bottomnav">
      <li><a href="index.php">Home</a></li>
      <li><a href="aboutJohn.php">About</a></li>
      <li><a href="learn.php">Learn</a></li>
      <li><a href="procedure.php">Services</a></li>
      <li><a href="appointments.php">Appointments</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
</nav>
