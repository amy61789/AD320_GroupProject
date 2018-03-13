<?php
session_start();
require("logininfo.php");

if (is_logged_in()) { ?>

	Welcome, <?php echo $_SESSION['user']; ?><br />
	<a href="logout.php">Logout</a>

<?php } else { ?>

	You are not logged in.<br />
	<a href="login.php">Login</a><br />
<?php } ?>