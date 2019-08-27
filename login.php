  <?php
 include 'inc/header.php';
 include 'lib/User.php';
 Session::checkLogin();
?>

<?php 
$user = new User();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
 
  $userLogin = $user->userLogin($_POST);

}


?>



<div class="panel panel-default">
	<h2> User Login  </h2>
	
</div>

<div class="panel-body">
<div style="max-width: 600px; margin:0 auto"> 

	<?php 
  if (isset($userLogin)) {
   echo $userLogin;
  }
	?>


 
	<form action="" method="POST">
		<div class="form-group">
			<label for="email"> Email Address </label>
			<input type="text" id="email" name="email" class="form-control">
			
		</div>

			<div class="form-group">
			<label for="password"> Password </label>
			<input type="password" id="password" name="password" class="form-control">
			
<br>
  <button type="submit" name="login" class="btn btn-success"> Login  </button>

		</div>


	</form>

</div>

</div>




  <?php
 include 'inc/footer.php';
?>





