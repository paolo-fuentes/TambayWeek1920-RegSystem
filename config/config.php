<?php
$connect=mysqli_connect("localhost", "root", "", "tambayreg_participants");

			//check if connection is successful by using if else statement
			if(mysqli_connect_errno($connect))
			{
				echo "Failed to connect:" . mysqli_connect_error();
			}
				//we can cross this out for the meantime
			//echo "CONNECTION SUCCESSFUL";

