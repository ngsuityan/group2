
<!DOCTYPE html>
<html>
<head>
	<title>RUNNER | ASKRUNNER</title>
</head>
<body>
				
<?php
	include '../View Interface/Header.php';
	require_once $_SERVER["DOCUMENT_ROOT"].'/AskRunnerSystem/Business Service Layer/Controller/Runner.php';
	$runid = $_SESSION['RUN_ID'];
	$runner = new runnercontroller();
	

	if(isset($_POST['updateRunner'])){
		$editRunner = $runner->editRunner($runid);
	}


?>

<!--    utk content    -->

	<div class="container-fluid content mb-5">
		<div class="col-lg-12 py-4" align="center" >


			<?php 
						$viewRunner = $runner->viewRunner($runid);
						foreach ($viewRunner as $row) {
							$rows = $row;
			?>

			<legend><h1><?php echo $rows['RUN_USERNAME'];?> Account</h1></legend>

		<form enctype="multipart/form-data" method="post" action="">
            	<br>
            	<input type="hidden" name="RUN_ID" value="<?php echo $rows['RUN_ID'] ?>">
		   	<div class="row" style="font-size: 14px">
            	<div class="col-lg-12" align="center" >
		   			<div class="form-group row">
                		<label class="col-sm-8 col-form-label font-weight-bold">Runner Username </label>
                	
            		<div class="col-sm-2">
		   				<input type="text" name="username" class="form-control" required value="<?php echo $rows['RUN_USERNAME'];?>">
		   	  		</div>
		   			</div>
		   			<div class="form-group row">
                		<label class="col-sm-8 col-form-label font-weight-bold">Runner Name </label>
            		<div class="col-sm-2">
		   			<input type="text" name="name" class="form-control" required value="<?php echo $rows['RUN_NAME'];?>">
		   			</div>
		   			</div>
		   			<div class="form-group row">
                		<label class="col-sm-8 col-form-label font-weight-bold">Runner Address </label>
            		<div class="col-sm-2">
		   			<textarea rows="4" cols="50" class="form-control" name="address" required><?php echo $rows['RUN_ADDRESS'] ?></textarea>
		   			</div>
		   			</div>
		   			<div class="form-group row">
                		<label class="col-sm-8 col-form-label font-weight-bold">Runner Email </label>
            		<div class="col-sm-2">
		   			<input type="text" name="email" class="form-control" required value="<?php echo $rows['RUN_EMAIL'];?>">
		   			</div>
		   			</div>
		   			<div class="form-group row">
                		<label class="col-sm-8 col-form-label font-weight-bold">Runner Phone No </label>
            		<div class="col-sm-2">
		   			<input type="text" name="phoneNum" class="form-control" required value="<?php echo $rows['RUN_PHONE_NO'];?>">
		   			</div>
		   			</div>
		   			<div class="form-group row">
                		<label class="col-sm-8 col-form-label font-weight-bold">Runner Gender </label>
            		<div class="col-sm-2">
	            		<select class="form-control" name="gender" required>
			   			<option>Select Gender</option>
			   			<option <?php echo $rows['RUN_GENDER'] == 'Male' ? 'selected' : '' ?> value="Male">Male</option>
			   			<option <?php echo $rows['RUN_GENDER'] == 'Female' ? 'selected' : '' ?> value="Female">Female</option>
			   			</select>
		   			</div>
		   			</div>
		   			<div class="form-group row">
                		<label class="col-sm-8 col-form-label font-weight-bold">Runner Password </label>
            		<div class="col-sm-2">
		   			<input type="text" name="password" class="form-control" required value="<?php echo $rows['RUN_PASSWORD'];?>">
		   			</div>
		   			</div>
		   			<div class="form-group row">
                		<label class="col-sm-8 col-form-label font-weight-bold">Runner IC </label>
            		<div class="col-sm-2">
		   			<input type="text" name="runIC" class="form-control" required value="<?php echo $rows['RUN_IC'];?>">
		   			</div>
		   			</div>
		   			<div class="form-group row">
                		<label class="col-sm-8 col-form-label font-weight-bold">Runner License </label>
            		<div class="col-sm-2">
		   			<input type="text" name="runLicense" class="form-control" required value="<?php echo $rows['RUN_LICENSE'];?>">
		   			</div>
		   			</div>
		   			<div class="form-group row">
                		<label class="col-sm-8 col-form-label font-weight-bold">Verification status </label>
            		<div class="col-sm-2">
		   			<input type="text" name="runVerify" class="form-control" readonly required value="<?php echo $rows['RUN_VERIFY'];?>">
		   			</div>
		   			</div>
		   	
			
		   	<div>

				<button style="background-color: #4CAF50; color: black; border-radius: 12px; padding: 14px 40px; font-size: 14px" type="submit" name="updateRunner">Update</button>
				<button style="background-color: #008CBA; color: black; border-radius: 12px; padding: 14px 40px;; font-size: 14px" onclick="window.location.href='../View Interface/Index.php'">Back</button>
			</div>

		</div>
	</div>
	<?php  
		}
	?>
	 
	</form>


	<!--     tamat utk content   -------------------- -->
<?php
	include "../View Interface/Footer.php";
?>


</body>

</html>


<!--

	colour:green = #4CAF50
	colour:blue = #008CBA


-->