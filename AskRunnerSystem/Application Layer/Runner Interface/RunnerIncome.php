
<!DOCTYPE html>
<html>
<head>
	<title>RUNNER | ASKRUNNER</title>
</head>
<body>
				
<?php
	include '../View Interface/Header.php';
	require_once $_SERVER["DOCUMENT_ROOT"].'/AskRunnerSystem/Business Service Layer/Controller/Runner.php';
	$runner = new runnercontroller();
	$runid = $_SESSION['RUN_ID'];
	$runnerincome = $runner->runnerincome($runid);
	$username = $_SESSION['RUN_USERNAME'];

?>

<!--    utk content    -->
	<div class="container-fluid content mb-5">
		<div class="col-lg-12 py-4" align="center">

		  <div style="width: 80%;font-size: 20px; text-align: center">
				<fieldset>
					<legend><h1><?php echo $username;?> Income</h1></legend>
					
					
					<form action="" method="POST">
						<table class="table ">
							
							<thead >
								<tr>
									<th >
										<h3 style="color: #061161;">No</h3>
									</th >
									<th >
										<h3 style="color: #061161;">Date</h3>
									</th >
									<th >
										<h3 style="color: #061161;">Income (RM)</h3>
									</th >
								</tr>
								
							</thead>
							
							<?php 
								$total = 0;
								$i=0;
								foreach ($runnerincome as $row) {
								$i++;
							?>
							<tr>
								<td>
									<?php echo $i; ?>
									
								</td>
								<td>
									<?php echo $row['RUN_INDATE']; ?>
									
								</td>	
								<td>
									<?php echo $row['RUN_INCOME']; ?>
									
								</td>
							</tr>
							
							<?php
								$income = $row['RUN_INCOME'];
								$total=$total+$income;
								}
							?>
							<tr>
								
								<td colspan="2">
									Total
									
								</td>	
								<td>
									<?php echo $total; ?>
									
								</td>
							</tr>
						</table>
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