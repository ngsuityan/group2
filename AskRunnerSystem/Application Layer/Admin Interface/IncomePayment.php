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
	require_once $_SERVER["DOCUMENT_ROOT"].'/AskRunnerSystem/Business Service Layer/Controller/Product.php';
	require_once $_SERVER["DOCUMENT_ROOT"].'/AskRunnerSystem/Business Service Layer/Controller/Runner.php';
	$serviceprovider = new spcontroller();
?>
	<div class="container-fluid content mb-5">
        <div class="col-lg-12 py-4" align="center">

        	<?php
        		if(isset($_GET['serviceprovider'])){
        		
        	?>
        	<div style="width: 80%;font-size: 20px; text-align: center">
				<fieldset>
					<legend><h1>Service Provider Income</h1></legend>
					
					
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
										<h3 style="color: #061161;">SP Username</h3>
									</th >
									<th >
										<h3 style="color: #061161;">Income (RM)</h3>
									</th >
								</tr>
								
							</thead>
							
							<?php 
								$total = 0;
								$i=0;
								$spallincome = $serviceprovider->spallincome();
								foreach ($spallincome as $row) {
								$i++;
								$spid = $row['SP_ID'];
							?>
							<tr>
								<td>
									<?php echo $i; ?>
									
								</td>
								<td>
									<?php echo $row['SP_INDATE']; ?>
									
								</td>	
								<td>
									<?php
										$spview = $serviceprovider->spview($spid);
										foreach ($spview as $row2) {
											echo $row2['SP_USERNAME']; 
										}
									?>
									
								</td>
								<td>
									<?php echo $row['SP_INCOME']; ?>
									
								</td>
							</tr>
							
							<?php
								$income = $row['SP_INCOME'];
								$total=$total+$income;
								}
							?>
							<tr>
								
								<td colspan="3">
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

			<?php
				}else if(isset($_GET['runner'])){
			?>
				<div style="width: 80%;font-size: 20px; text-align: center">
				<fieldset>
					<legend><h1>Runner Income</h1></legend>
					
					
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
										<h3 style="color: #061161;">Runner Username</h3>
									</th >
									<th >
										<h3 style="color: #061161;">Income (RM)</h3>
									</th >
								</tr>
								
							</thead>
							
							<?php 
								$total = 0;
								$i=0;
								$spallincome = $serviceprovider->spallincome();
								foreach ($spallincome as $row) {
								$i++;
								$spid = $row['SP_ID'];
							?>
							<tr>
								<td>
									<?php echo $i; ?>
									
								</td>
								<td>
									<?php echo $row['SP_INDATE']; ?>
									
								</td>	
								<td>
									<?php
										$spview = $serviceprovider->spview($spid);
										foreach ($spview as $row2) {
											echo $row2['SP_USERNAME']; 
										}
									?>
									
								</td>
								<td>
									<?php echo $row['SP_INCOME']; ?>
									
								</td>
							</tr>
							
							<?php
								$income = $row['SP_INCOME'];
								$total=$total+$income;
								}
							?>
							<tr>
								
								<td colspan="3">
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
			<?php
				}
			?>
    	</div>
    </div>
<?php
	include "../View Interface/Footer.php";
?>
</body>
</html>