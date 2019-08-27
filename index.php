
  <?php
 include 'inc/header.php';
 include 'lib/User.php';
 Session::checkSession();


?>

 <?php  
    $loginmsg = Session::get("loginmsg");
    if (isset($loginmsg)) {
    	echo  $loginmsg;
    }

 ?>

<div class="panel panel-default">
	<h2> User List <span class="pull-right"> Welcome <strong> 

  <?php
  $name = Session::get("username");
  if (isset($name)) {
  	echo $name;
  }

  Session::set("loginmsg", NULL);

  ?>

	 </strong> 
	</span>	 </h2>
	
</div>

<div class="panel-body">
<table class="table table-striped">

	<th width="20%"> Serial  </th>
	<th width="20%"> Name  </th>
	<th width="20%"> User Name </th>
	<th width="20%"> Emaiil  </th>
	<th width="20%"> Action  </th>
	

  <?php
  $user = new User();
  $userdata = $user->getUserData();
  if ($userdata) {
  	$i = 0;
  	foreach ($userdata as $sdata) {
  		$i++

  ?>



<tr>
	<td><?php echo $i ?></td>
	<td> <?php echo $sdata['name'] ?></td>
	<td> <?php echo $sdata['username'] ?></td>
	<td> <?php echo $sdata['email'] ?></td>
	<td> <a class="btn btn-primary" href="profile.php?id=<?php echo $sdata['id'] ?>"> View </a> </td>


</tr>
<?php  }   }else {  ?>

 <tr>
 	<td> <h2> No User Data Found </h2></td>


 </tr>

<?php }  ?>



</table>
	

</div>






  <?php
 include 'inc/footer.php';
?>





