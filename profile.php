<?php
	session_start();
?>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/my.css" />

</head>
	<body>
		<?php include 'header.php'; ?>
				<section id="one" class="wrapper special">
				<div class="inner">
					<header class="major">
						<h2> User Profile </h2>
					</header>
					<?php
						
						include 'in.php';

						$mail=$_SESSION['uemail'];
						$q8="SELECT * FROM login WHERE email='$mail'";
						$res8=mysqli_query($conn,$q8);
						$num8=mysqli_num_rows($res8);
							
							if($num8>0)
							{
								
								while($rows = mysqli_fetch_assoc($res8))
								{
									echo "<b>User-name :</b>";
									echo $rows['uname'];
									echo "<br>";
									echo "<b>Password :</b>";
									echo $rows['password'];
									echo "<br>";
									echo "<b>Phone No. :</b>";
									echo $rows['phone'];
									echo "<br>";
									echo "<b>E-mail :</b>";
									echo $rows['email'];
								}
							}
						
					?>
					<br>
					<br>
						<a href='homsen.php' class='button special'> Back </a>
						&nbsp
						<a href='index.php' class='button special'> Log Out </a>
				</div>
			</section>

		<!-- Two -->
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