<html>
<head>
		<title> Service AvailableṬ</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
				<link rel="stylesheet" href="assets/css/my.css" />

</head>
<body>
	<?php include 'header.php'; ?>
		<section id="one" class="wrapper special">
					<header>
						<h2> <strong>We are Providing Services in Following Cities...</strong></h2>
						<br><br><p> You Can Find Your City Below ...</p>
						<form method="POST">
						<input type="text" name="pin" placeholder="Enter the Pin Code of Your City ">
						<br>
						<br>
						<button type="submit" name="submit">Search</button>
						</form>
						<?php
							include 'in.php';
							if(isset($_POST['submit']))
							{
								$pn=$_POST['pin'];
								
								$qs="select * from pin where pincode='$pn';";
								$ress=mysqli_query($conn,$qs);
								$ns=mysqli_num_rows($ress);
								
								if($ns>0)
								{
									echo "Yes , service is Available in Your Area...";
									echo "<br>";
								}
							}
						?>
						<br>
						<p> Services Available in Following City</p>
						<br>
						
						<table>
						<tr>
							<td>Mumbai</td>
							<td>Delhi</td>
							<td>Bangalore</td>
							<td>Hyderabad</td>
							<td>Ahmedabad</td>
						</tr>
						<tr>
							<td>Chennai</td>
							<td>Kolkata</td>
							<td>Surat</td>
							<td>Pune</td>
							<td>Jaipur</td>
						</tr>
						<tr>
							<td>Visakhapatnam</td>		
							<td>Kanpur</td>
							<td>Nagpur</td>
							<td>Lucknow</td>
							<td>Thane</td>
						</tr>
						<tr>
							<td>Bhopal</td>
							<td>Indore</td>
							<td>Pimpri-Chinchwad</td>
							<td>Patna</td>
							<td>Vadodara</td>
						</tr>
						<tr>
							<td>Ghaziabad</td>
							<td>Ludhiana</td>
							<td>Agra</td>
							<td>Nashik</td>
							<td>Faridabad</td>
						</tr>
						<tr>
							<td>Meerut</td>
							<td>Rajkot</td>
							<td>Kalyan-Dombivli	</td>
							<td>Vasai-Virar	</td>
							<td>Varanasi</td>
						</tr>
						<tr>
							<td>Srinagar</td>
							<td>Aurangabad</td>
							<td>Dhanbad</td>
							<td>Amritsar</td>
							<td>Navi Mumbai	</td>
						</tr>
						<tr>
							<td>Allahabad</td>
							<td>Howrah</td>
							<td>Ranchi</td>
							<td>Gwalior</td>
							<td>Jabalpur</td>
						</tr>
						<tr>
							<td>Coimbatore</td>
							<td>Vijayawada</td>
							<td>Jodhpur</td>
							<td>Madurai</td>
							<td>Raipur</td>
						</tr>
						<tr>
							<td>Chandigarh</td>
							<td>Guntur</td>
							<td>Guwahati</td>
							<td>Solapur</td>
							<td>Hubli–Dharwad</td>
						</tr>
						<tr>
							<td>Mumbai</td>
							<td>Delhi</td>
							<td>Bangalore</td>
							<td>Hyderabad</td>
							<td>Ahmedabad</td>
						</tr>
						<tr>
							<td>Chennai</td>
							<td>Kolkata</td>
							<td>Surat</td>
							<td>Pune</td>
							<td>Jaipur</td>
						</tr>
						<tr>
							<td>Visakhapatnam</td>		
							<td>Kanpur</td>
							<td>Nagpur</td>
							<td>Lucknow</td>
							<td>Thane</td>
						</tr>
						<tr>
							<td>Bhopal</td>
							<td>Indore</td>
							<td>Pimpri-Chinchwad</td>
							<td>Patna</td>
							<td>Vadodara</td>
						</tr>
						<tr>
							<td>Ghaziabad</td>
							<td>Ludhiana</td>
							<td>Agra</td>
							<td>Nashik</td>
							<td>Faridabad</td>
						</tr>
						<tr>
							<td>Meerut</td>
							<td>Rajkot</td>
							<td>Kalyan-Dombivli	</td>
							<td>Vasai-Virar	</td>
							<td>Varanasi</td>
						</tr>
						<tr>
							<td>Srinagar</td>
							<td>Aurangabad</td>
							<td>Dhanbad</td>
							<td>Amritsar</td>
							<td>Navi Mumbai	</td>
						</tr>
						<tr>
							<td>Allahabad</td>
							<td>Howrah</td>
							<td>Ranchi</td>
							<td>Gwalior</td>
							<td>Jabalpur</td>
						</tr>
						<tr>
							<td>Coimbatore</td>
							<td>Vijayawada</td>
							<td>Jodhpur</td>
							<td>Madurai</td>
							<td>Raipur</td>
						</tr>
						<tr>
							<td>Chandigarh</td>
							<td>Guntur</td>
							<td>Guwahati</td>
							<td>Solapur</td>
							<td>Hubli–Dharwad</td>
						</tr>
						
						</table>
						<section id="two" class="wrapper style2 special">
				<div class="inner narrow">
					<header>
						<h2>Get in touch</h2>
					</header>
					<a href="index.php">Home </a><br>
					<a href="tnc.html">Terms and Condition </a><br>
					<a href="privacy.html">Privcy policy </a><br>
					<a href="cancel.html">Cancellations and Refunds</a><br>
					<a href="Faq's.html">FAQs</a><br>
					<a href="service.php">Service Availability </a>
				</div>
			</section>
						
						</body>
						</html>