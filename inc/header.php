<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath.'/../lib/Session.php';
Session::init();
?>



<!DOCTYPE html>
<html>
<head>
	<title> Login and Register System </title>

  <?php 
  if (isset($_GET['action'])  && $_GET['action'] == "logout") {
    Session::destroy();
  }

  ?>


  <link rel="stylesheet" href="inc/bootstrap.min.css" />
  <script src="inc/bootstrap.min.js" ></script>
    <script src="inc/jquery.min.js" ></script>
</head>


<body>

<div class="container">
	<nav class="navbar navbar-default">
		<div class="conatiner-fluid">
<div class="navbar-header">
	<a class="navbar-brand" href="index.php">  <img src="inc/logo.png" > </a>
	
</div>

   <ul class="nav navbar-nav pull-right">


<?php
 $id = Session::get("id");
 $userlogin = Session::get("login");
if ($userlogin == true) {
  

?>

   	<li><a href="indx.php"> Home </a>  </li>
   	<li><a href="profile.php?id=<?php echo $id; ?>"> Profile </a>  </li>
   	<li><a href="?action=logout"> Logout </a>  </li>

<?php  }else{ ?>

   	<li><a href="login.php"> Login </a>  </li>
   	<li><a href="register.php"> Register </a>  </li>
<?php } ?>

   </ul>


			
		</div>
		
	</nav>