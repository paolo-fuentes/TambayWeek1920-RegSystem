 <?php
    require('config/config.php');
    include('inc/header2.php');
    include('inc/assets/css/style2.php');

    		date_default_timezone_set('Asia/Manila');
        	$timestamp = date('Y-m-d h:i:s');

			$idNumber = mysqli_real_escape_string($connect, $_POST['tbx_idNumber']);
			//$query2 = "UPDATE participants SET timeRegistered='$timestamp' WHERE idNumber = {$idNumber}";
			$query = "SELECT * FROM members WHERE idNumber = {$idNumber}";
			$result = mysqli_query($connect, $query)
				or die(mysql_error());
			$row = mysqli_fetch_assoc($result);

			//if($row = mysqli_fetch_assoc($result)){
			if($idNumber == $row['idNumber']) {

			$query2 = "UPDATE members SET timeRegistered='$timestamp' WHERE idNumber = $idNumber";
			//$query2 = "INSERT INTO `participants`(idNumber, timeRegistered) VALUES (?,?)";
        	$stmt = $connect->prepare($query2);
        	///$stmt->bind_param("is", $idNumber, $timestamp);
        	$stmt->execute();

        	echo "<div class='welcome'>";
        	echo "Have fun,";
        	echo "</div>";
       
        	echo "<div class='name'>";
			echo $row['FirstName']. " " . $row['LastName']. "!";
			echo "</div>";
					
			}
			else {
    		echo "<div class='error'>";
    		echo "INVALID ID NUMBER!";
    		echo "</div>";
    		}

			?>

		<div class="btn-container2">
			<form>
				<input style="font-size:28px;color: white;" class="buttonPadding2" type="button" name="return" value="RETURN" onclick="window.location.href='index.php'">
			</form>
		</div>
			<!--<a class="btn-container-2" href="index.php">RETURN</a>-->

<?php include('inc/footer.php');