
<!DOCTYPE html>
<html>
<head>
	<title>CUSTOMER | ASKRUNNER</title>
</head>
<body>
				
<?php
	include '../View Interface/Header.php';
	require_once $_SERVER["DOCUMENT_ROOT"].'/AskRunnerSystem/Business Service Layer/Controller/Customer.php';
	$custid = $_SESSION['CUST_ID'];
	$customer = new customercontroller();


	if(isset($_POST['EditCust'])){
		$custedit = $customer->custedit($custid);
	}
	
?>

<!--    utk content    -->
	<div class="container-fluid content mb-5">
		<div class="col-lg-12 py-4" align="center">
		    <div class="col-lg  form-style-6">
				<fieldset>
					<?php 
						$custview = $customer->custview($custid);
						foreach ($custview as $row) {
					?>
					<legend><h1><?php echo $row['CUST_USERNAME'];?> Account</h1></legend>
					<form action="" method="POST">
						<table>
							<input type="text" name="CUST_ID" value="<?php echo $row['CUST_ID']; ?>" hidden>
							<tr>
								<td>
									<h3 style="color: #061161">Name</h3>
								</td>
								<td>
									<input type="text" name="CUST_NAME"  class="form-control input-lg col-xs-4" value="<?php echo $row['CUST_NAME']; ?>" >
								</td>
							</tr>
							<tr>
								<td>
									<h3 style="color: #061161">Account Username</h3>
								</td>
								<td>
									<input type="text" name="CUST_USERNAME"  class="form-control input-lg col-xs-4" value="<?php echo $row['CUST_USERNAME']; ?>" readonly >
								</td>
							</tr>
							<tr>
								<td>
									<h3 style="color: #061161">Account Password</h3>
								</td>
								<td><input type="text" name="CUST_PASSWORD"  class="form-control input-lg" value="<?php echo $row['CUST_PASSWORD']; ?>" ></td>
							</tr>
							<tr>
								<td>
									<h3 style="color: #061161">Gender</h3>
								</td>
								<td>
									<select id="class" name="CUST_GENDER" required>
                    					<option value="Male" <?=$row['CUST_GENDER'] == 'Male' ? ' selected="selected"' : '';?>>Male</option>
                    					<option value="Female" <?=$row['CUST_GENDER'] == 'Female' ? ' selected="selected"' : '';?>>Female</option>
                    				</select>
									<!--<input type="text" name="CUST_USERNAME"  class="form-control input-lg col-xs-4" value="<?php echo $row['CUST_USERNAME']; ?>" >-->
								</td>
							</tr>
							<tr>
								<td>
									<h3 style="color: #061161">Phone Number</h3>
								</td>
								<td>
									<input type="text" name="CUST_PHONE_NO"  class="form-control input-lg col-xs-4" value="<?php echo $row['CUST_PHONE_NO']; ?>" >
								</td>
							</tr>
							
							<tr>
								<td>
									<h3 style="color: #061161">Email</h3>
								</td>
								<td>
									<input type="text" name="CUST_EMAIL"  class="form-control input-lg col-xs-4" value="<?php echo $row['CUST_EMAIL']; ?>" >
								</td>
							</tr>
							<tr>
								<td>
									<h3 style="color: #061161">Address</h3>
								</td>
								<td>
									<textarea cols="50" rows="4" name="CUST_ADDRESS" class="form-control input-lg" ><?php echo $row['CUST_ADDRESS']; ?></textarea>
									
								</td>
							</tr>
							
							


						</table>
						<div class="form-style-6">
							<input type="submit" name="EditCust" value="Update" >
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