<?php
	session_start();
?>
<html>
<head>
	<title>Feedback & Review</title>
	<link rel="stylesheet" href="assets/css/main.css" />
			<link rel="stylesheet" href="assets/css/my.css" />

</head>
	<body>
		<?php include 'header.php'; ?>
				<section id="one" class="wrapper special">
				<div class="inner">
					<header class="major">
						<h2>Please Feedback Our Service </h2>
					</header>
					<form method="POST">
							
								<input type="text" name="ordno" placeholder="Enter The Order No..." required>
								<br>
								<br>
									<input type="radio" id="star5" name="rate" value="5" >
									<label for="star5" title="text">5 stars</label>
									<input type="radio" id="star4" name="rate" value="4" >
									<label for="star4" title="text">4 stars</label>
									<input type="radio" id="star3" name="rate" value="3" >
									<label for="star3" title="text">3 stars</label>
									<input type="radio" id="star2" name="rate" value="2" >
									<label for="star2" title="text">2 stars</label>
									<input type="radio" id="star1" name="rate" value="1" >
									<label for="star1" title="text">1 star</label>
								
								<br>
								<br>
								Describe your experience(optional) :
								<br>
								<textarea name="com" rows=5 cols=5  placeholder="Describe your experience(optional)">
								</textarea>
								<br>
								<button type="submit" name="review" class='button special'>Submit</button>
								
						</form>
						
						<?php 
						
							include 'in.php';
						
							if(isset($_POST['review']))
							{
								$od=$_POST['ordno'];
								$rate=$_POST['rate'];
								$wr=$_POST['com'];
								$mail=$_SESSION['uemail'];
								
								$q6="SELECT * FROM ord WHERE ord_no=$od";
								$res3=mysqli_query($conn,$q6);
								$nu=mysqli_num_rows($res3);
								
								if($nu>0)
								{
									$q7="INSERT INTO review (ord_no,email,rate,com) VALUES ($od,'$mail',$rate,'$wr')";
									mysqli_query($conn,$q7);
									
									echo "Thank You For Review...";
								}
								else
								{
									echo "Your Order Does Not Exist ...";
								}
							}
						?>
						<br>
						<br>
						<a href='homsen.php' class='button special'> Back </a>
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