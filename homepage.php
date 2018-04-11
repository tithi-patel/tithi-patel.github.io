<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div>
		<div style="padding-bottom:30px">
			<header style="margin-left:33%"><h1> Auto Fining System </h1></header> 
		</div>
	
			<div style="width:100%">
			<div class="block1">
			<h3 style="padding-bottom:30px">Personal Details:</h3>

			<table>
			<?php
				$conn = mysqli_connect("localhost","root", "","login");
				if($conn-> connect_error){
					die("Connection Failed:". $conn-> connect_error);
				} 
				session_start(); 
				$sql = "SELECT name, address, lic_issue_at, lic_issue_on, lic_exp_on, email, mobile, account, vehicle_no, vehicle_type, challan_no, date, place, offense, section, fine from details WHERE email = '" . $_SESSION['sess_user'] ."'";
				$result = $conn-> query($sql);
				
	
				if ($result->num_rows > 0) {
										
						while($row = $result-> fetch_assoc()){
						
						echo"<tr><th>Registered Name:</th>";
						echo "<td>". $row["name"] ."</td> </tr>";
				
						echo"<tr><th>Address:</th>";
						echo "<td>". $row["address"] ."</td> </tr>";
				
						echo"<tr><th>Licence Issued at:</th>";
						echo "<td>". $row["lic_issue_at"] ."</td> </tr>";
				
						echo"<tr><th>Licence Issued on:</th>";
						echo "<td>". $row["lic_issue_on"] ."</td> </tr>";
				
						echo"<tr><th>Licence Expiry on:</th>";
						echo "<td>". $row["lic_exp_on"] ."</td> </tr>";
				
						echo"<tr><th>Email ID:</th>";
						echo "<td>". $row["email"] ."</td> </tr>";
				
						echo"<tr><th>Mobile Number:</th>";
						echo "<td>". $row["mobile"] ."</td> </tr>";
				
						echo"<tr><th>Account Number:</th>";
						echo "<td>". $row["account"] ."</td> </tr>";
					}
					echo "</table>";
				}
				else { echo "0 results"; }
				$conn->close();
			?>
				</div>
				<div  class="block1">
				<h3 style=padding-bottom:30px>Traffic Violation Details:</h3>
				<table>
				<?php
				$conn = mysqli_connect("localhost","root", "","login");
				if($conn-> connect_error){
					die("Connection Failed:". $conn-> connect_error);
				} 
				
				$sql = "SELECT name, address, lic_issue_at, lic_issue_on, lic_exp_on, email, mobile, account, vehicle_no, vehicle_type, challan_no, date, place, offense, section, fine from details WHERE email = '" . $_SESSION['sess_user'] ."'";
				$result = $conn-> query($sql);
				
	
				if ($result->num_rows > 0) {
										
						while($row = $result-> fetch_assoc()){
						
						echo"<tr><th>Vehicle Reg No:</th>";
						echo "<td>". $row["vehicle_no"] ."</td> </tr>";
						
						echo"<tr><th>Vehicle Type:</th>";
						echo "<td>". $row["vehicle_type"] ."</td> </tr>";
						
						echo"<tr><th>Challan No:</th>";
						echo "<td>". $row["challan_no"] ."</td> </tr>";
						
						echo"<tr><th>Date-time Of Violation:</th>";
						echo "<td>". $row["date"] ."</td> </tr>";
						
						echo"<tr><th>Place Of Violation:</th>";
						echo "<td>". $row["place"] ."</td> </tr>";
						
						echo"<tr><th>Current offense:</th>";
						echo "<td>". $row["offense"] ."</td> </tr>";
						
						
						echo"<tr><th>Application Section:</th>";
						echo "<td>". $row["section"] ."</td> </tr>";
						
						echo"<tr><th>Fine Amount(Rs):	</th>";
						echo "<td>". $row["fine"] ."</td> </tr>";
					}
					
				
				echo "</table>";
				}
				else { echo "0 results"; }
				$conn->close();
			?>
			</div>
			<button type="button" onclick="window.location.href='./logout.php'">Logout</button>
		

		</div>
		
		
			
			
		
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>