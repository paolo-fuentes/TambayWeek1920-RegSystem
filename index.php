<?php
    require('config/config.php');
    include('inc/header.php');
    include('inc/assets/css/style.php');


    if(isset($_POST['submit'])) {


			date_default_timezone_set('Asia/Manila');
        	$timestamp = date('Y-m-d h:i:s');
			$idNumber = mysqli_real_escape_string($connect, $_POST['tbx_idNumber']);
			//$query2 = "UPDATE master SET timeRegistered='$timestamp' WHERE idNumber = $idNumber";
			$query = "SELECT * FROM members WHERE idNumber = {$idNumber}";
			$result = mysqli_query($connect, $query)
				or die(mysql_error());
			$row = mysqli_fetch_assoc($result);

    	//if($idNumber == $row['idNumber']) { 
				//echo $row["FirstName"]. " " . $row["LastName"];
    	
    	//$query2 = "UPDATE master SET timeRegistered='$timestamp' WHERE idNumber = $idNumber";
        //$stmt = $connect->prepare($query2);
        //$stmt->execute();
    //} 
    }

?>
	<div>
    	<form  method="POST" action="greeting.php" autocomplete="off">
    		<div class="container">
				<div class="col-xs-4">
					<h1>ID Number</h1>
					<input style="font-size:45px" type="text" name="tbx_idNumber" maxlength="6" size="16" required> <!-- i removed class=form control input lg -->
				</div>
			</div>
				<div class="btn-container2">
					<input style="font-size:36px;color:white" type="submit" name="submit" value="SUBMIT!" class="buttonPadding">
				</div>
		</form>
	</div>

<?php include('inc/footer.php'); ?>
