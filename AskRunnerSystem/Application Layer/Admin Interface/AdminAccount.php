<!DOCTYPE html>
<html>
<head>
	<title>
		ADMIN | ASKRUNNER
	</title>
</head>
<body>
<?php

	include '../View Interface/Header.php';
	require_once $_SERVER["DOCUMENT_ROOT"].'/AskRunnerSystem/Business Service Layer/Controller/Admin.php';
	$adminid = $_SESSION['ADMIN_ID'];
	$admin = new admincontroller();


	if(isset($_POST['EditAdmin'])){
		$adminedit = $admin->adminedit($adminid);
	}
    
?>

	<div class="container-fluid content mb-5">
        <div class="col-lg-12 py-4" align="center">
        	<div class="col-lg  form-style-6">
				<fieldset>
					<?php 
						$adminview = $admin->adminview($adminid);
						foreach ($adminview as $row) {
					?>
					<legend><h1><?php echo $row['ADMIN_NAME'];?> Account</h1></legend>
					<form action="" method="POST">
						<table>
							<input type="text" name="ADMIN_id" value="<?php echo $row['ADMIN_id']; ?>" hidden>
							<tr>
								<td>
									<h3 style="color: #061161">Admin Name</h3>
								</td>
								<td>
									<input type="text" name="ADMIN_NAME"  class="form-control input-lg col-xs-4" value="<?php echo $row['ADMIN_NAME']; ?>" >
								</td>
							</tr>
							<tr>
								<td>
									<h3 style="color: #061161">Admin Password</h3>
								</td>
								<td>
									<input type="text" name="ADMIN_PASSWORD"  class="form-control input-lg col-xs-4" value="<?php echo $row['ADMIN_PASSWORD']; ?>" >
								</td>
							</tr>
							

						</table>
						<div class="form-style-6">
							<input type="submit" name="EditAdmin" value="Update" >
						</div>
						<?php
								}
							?>

					</form>
				</fieldset>
			</div>

    	</div>
    </div>


<?php
	include "../View Interface/Footer.php";

?>
</body>
</html>