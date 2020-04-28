<?php
	session_start();
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Flash Dispatchment</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Banner -->
			<section id="banner">
				<h3><strong> Login & Sign Up </strong>
				<form method="post">
					<br/>
					<input type="email" name="uemail" placeholder="Enter The email id ...">
					<br>
					<input type="password" name="pass" placeholder="Enter The User Password ...">
					<br/>
					<button type="submit" name="login" value="submit"> Log In </button>
				</form>
				</h3>
				<?php
			
					include 'in.php';
					
					if(isset($_POST['login']))
					{
						$user=$_POST['uemail'];
						$pass=$_POST['pass'];
	
						$q="SELECT * FROM login WHERE email='$user' AND password='$pass'";
						$que= mysqli_query($conn,$q);
						$userd=mysqli_fetch_assoc($que);
						$num= mysqli_num_rows($que);
			
						if($num >0)
						{
							echo "<script>location.href='homsen.php'</script>";
							
							//echo "login sucessfully ...";
							/*echo "<br>";
							echo "<br>";
							echo "<a href='homsen.php' class='button special'>Get started</a>";
							echo "<br>";
							echo "<br>";*/
							
							$_SESSION['uemail']=$user;
							$_SESSION['uname']=$userd['uname'];
							
						}
						else
						{
							echo "<br>";
							echo "Invalid user-email or password";
							echo "<br>";
							echo "<br>";
						}
					}
					
					?>
				<br>
				<a href='signup.php' class='button special'>Create An Account </a>
				<br>
				<br>
				<p> <br> Customers satisfaction is our profit</p>  
			</section>

		<!-- One -->
			<!-- <section id="one" class="wrapper special">
				<div class="inner">
					<header class="major">
						<h2>More About Us </h2>
					</header>
					<div class="features">
						<div class="feature">
						<i class="fa fa-plus"></i>
							<h3>Features</h3>
							<p> </p>
						</div>
						<div class="feature">
						<i class="fa fa-info"></i>
							<h3>About Us</h3>
							<p> </p>
						</div>
						<div class="feature">
							<i class="fa fa-phone"></i>
							<h3>Contact US</h3>
							<p> </p>
						</div>
						<div class="feature">
							<i class="fa fa-question-circle"> </i>
							<h3>How It's Work</h3>
							<p> </p>
						</div>
						<div class="feature">
							<i class="fa fa-tags"></i>
							<h3>Offers & Discounts</h3>
							<p> </p>
						</div>
					</div>
				</div>
			</section> -->

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

