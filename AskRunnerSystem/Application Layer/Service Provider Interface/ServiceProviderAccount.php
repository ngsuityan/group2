
<!DOCTYPE html>
<html>
<head>
	<title>SERVICE PROVIDER | ASKRUNNER</title>
</head>
<body>
				
<?php
	include '../View Interface/Header.php';
	require_once $_SERVER["DOCUMENT_ROOT"].'/AskRunnerSystem/Business Service Layer/Controller/ServiceProvider.php';
	$spid = $_SESSION['SP_ID'];
	$serviceprovider = new spcontroller();


	if(isset($_POST['EditSP'])){
		$spedit = $serviceprovider->spedit($spid);
	}
	
?>

<!--    utk content    -->
	<div class="container-fluid content mb-5">
		<div class="col-lg-12 py-4" align="center">
		    <div class="col-lg  form-style-6">
				<fieldset>
					<?php 
						$spview = $serviceprovider->spview($spid);
						foreach ($spview as $row) {
					?>
					<legend><h1><?php echo $row['SP_USERNAME'];?> Account</h1></legend>
					<form action="" method="POST">
						<table>
							<input type="text" name="SP_ID" value="<?php echo $row['SP_ID']; ?>" hidden>
							<tr>
								<td>
									<h3 style="color: #061161">Owner Name</h3>
								</td>
								<td>
									<input type="text" name="SP_OWNNAME"  class="form-control input-lg col-xs-4" value="<?php echo $row['SP_OWNNAME']; ?>" >
								</td>
							</tr>
							<tr>
								<td>
									<h3 style="color: #061161">Company Name</h3>
								</td>
								<td>
									<input type="text" name="SP_BUSINESS_NAME"  class="form-control input-lg col-xs-4" value="<?php echo $row['SP_BUSINESS_NAME']; ?>" >
								</td>
							</tr>
							<tr>
								<td>
									<h3 style="color: #061161">Account Password</h3>
								</td>
								<td><input type="text" name="SP_PASSWORD"  class="form-control input-lg" value="<?php echo $row['SP_PASSWORD']; ?>" ></td>
							</tr>
							<tr>
								<td>
									<h3 style="color: #061161">Phone Number</h3>
								</td>
								<td>
									<input type="text" name="SP_PHONE_NO"  class="form-control input-lg col-xs-4" value="<?php echo $row['SP_PHONE_NO']; ?>" >
								</td>
							</tr>
							<tr>
								<td>
									<h3 style="color: #061161">Company Address</h3>
								</td>
								<td>
									<input type="text" name="SP_COMPADDRESS"  class="form-control input-lg col-xs-4" value="<?php echo $row['SP_COMPADDRESS']; ?>" >
								</td>
							</tr>
							<tr>
								<td>
									<h3 style="color: #061161">Company Email</h3>
								</td>
								<td>
									<textarea cols="50" rows="4" name="SP_EMAIL" class="form-control input-lg" ><?php echo $row['SP_EMAIL']; ?></textarea>
								</td>
							</tr>
							<tr>
								<td>
									<h3 style="color: #061161">SSM Registration Number</h3>
								</td>
								<td><input type="text" name="SP_SSM"  class="form-control input-lg" value="<?php echo $row['SP_SSM']; ?>"></td>
							</tr>
							<tr>
								<td>
									<h3 style="color: #061161">Verification</h3>
								</td>
								<td>
									<input type="text" name="SP_VERIFY"  class="form-control input-lg col-xs-4"value="<?php echo $row['SP_VERIFY']; ?>" readonly>
								</td>
							</tr>


						</table>
						<div class="form-style-6">
							<input type="submit" name="EditSP" value="Update" >
						</div>
						<?php
								}
							?>

					</form>
				</fieldset>
			</div>

		</div>
	
	</div>

	<!--     tamat utk content   -------------------- -->
<?php
	include "../View Interface/Footer.php";
?>
</body>

</html>