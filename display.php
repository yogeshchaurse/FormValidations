<?php session_start(); ?>
<html>
<head>
<title>Registration Form</title>
</head>
<body>


<h4 align="center">Registrtion Form</h4>
<form method="post" action="final.php" enctype="multipart/form-data">

	<TABLE align="center">
		<tr>
			<td align=center>
				First Name : 
			</td>
			<td>
			 <?php echo $_SESSION['firstname']; ?>	
			</td>
			<td>
				<a href="Form.php">Edit FirstName </a>
			</td>

		</tr>

		<tr>
			<td align=center>
				Last Name :
			</td>
			<td>
			<?php echo $_SESSION['lastname'];?>	
			</td>
			<td>
				<a href="Form.php">Edit LastName </a>
			</td>

		</tr>

		<tr>
			<td align=center>
				Email Id :
			</td>
			<td>
			<?php echo $_SESSION['email'];?>	
			</td>
			<td>
				<a href="Form.php">Edit EmailId </a>
			</td>

		</tr>

		

		<tr>
			<td align=center>
				 Country:
			</td>
			<td>
			<?php echo $_SESSION['country'];?>
			</td>
			<td>
				<a href="Form.php">Change Country</a>
			</td>

		</tr>

		<tr>
			<td align=center>
				 Zip Code:
			</td>
			<td>
			<?php echo $_SESSION['zipcode'];?>	
			</td>
			<td>
				<a href="Form.php">Edit Zipcode </a>
			</td>

		</tr>

		<tr>
			<td align=center>
				 Gender:
			</td>
			<td>
			<?php echo $_SESSION['gender'];?>
			</td>
			<td>
			<a href="Form.php">Edit</a>	
			</td>

		</tr>

		<tr>
			<td align=center>
				 Upload Profile Image:
			</td>
			<td>
				<?php echo $_SESSION['name'];?>
			</td>
			<td>
				<a href="Form.php">Change Image</a>
			</td>


		</tr>

		<tr>
			<td align=center>
				
			</td>
			<td>
				<input type="submit" value="Submit Finaly">
			</td>

		</tr>


	</TABLE>



</form>
</body>
</html>
