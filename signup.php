<?php
	session_start();
?>
<html>
	<head>
		<title>Sign Up</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Banner -->
			<section id="banner">
				<h3><strong> Create an Account </strong>
				<form method="post">
					<br/>

					<input type="text" name="uname" placeholder="Enter The name ..." required >
					<br/>
					<input type="password" name="pass" placeholder="Enter The Password ..."required>
					<br/>
					<input type="text" name="phno" placeholder="Enter The phone number ...">
					<br/>
					<input type="email" name="uemail" placeholder="Enter The email id ..."required>
					<br/>
					<button type="submit" name="signup" > Sign Up </button>
					
				</form>
				</h3>
				
				<?php
				
					include 'in.php';
					if(isset($_POST['signup']))
					{
					$em=$_POST['uemail'];
					$sql = "SELECT * FROM login WHERE email='$em';"; 
					$res = mysqli_query($conn, $sql);
					$num=mysqli_num_rows($res);
					
					if(!$num>0)
					{
						$uname=$_POST['uname'];
						$pass=$_POST['pass'];
						$phno=$_POST['phno'];
						$email=$_POST['uemail'];
						$_SESSION['uemail']=$email;
				
						$sql = "INSERT INTO login (uname, password, phone,email) VALUES ('$uname', '$pass', $phno,'$email')";

						if ($conn->query($sql) === TRUE) 
						{
							/*echo "<h4>Account Created Sucessfuly ...</h4>";
							echo "<h4><br></h4>";
							echo "<h4>Please login with registred email and password...</h4>";*/
							echo "<script>location.href='homsen.php'</script>";
							
						} 
						else
						{
							echo "<h4>Error: </h4>" . $sql . "<h4><br></h4>" . $conn->error;
						}
						
						$conn->close();
					}
					else
					{
						echo "<h4>user already exist ...</h4>";
					}
					}
					
					
					
				?>
			</section>

			<section id="one" class="wrapper special">
				<div class="inner">
					<header class="major">
						<h2><p> About the FlashDispatchment company</p></h2>
						<p> FlashDispatchment is a Mumbai, India based company engaged in design, printing, manufacturing & distributing wide range of packaging materials such as corrugated boxes, cardboard boxes, BOPP tapes, Bubble Wraps, Courier Bags, Strech Film, etc. We provide package design solutions to a wide array of industry and end user applications.<br><br>

Depending on the services you undertake, the task of shipping your possessions can be very complicated especially when you can’t find standard packaging materials. If you are looking for a one-stop-shop for online packaging supplies we at FlashDispatchment can help. Our website offers a wide range of online shipping supplies to cater for your packaging and shipping needs.<br><br>

Our packaging and shipping supplies are manufactured with high-quality materials that can protect your contents in a safe way.<br><br>

Our online packaging supplies are suitable for freight consolidation and shipping purposes. In a bid to protect your shipment and ensure safe transit of your items, we offer a wide range of quality products with unique features from courier bags, bubble mailers designed to absorb shock and provide cushioning that could damage your product to BOPP packing tape, edge protectors and cardboard shipping boxes for strong, rigid protection.<br><br>

Why stuff your products into flimsy and reused cardboard boxes retrieved from the attic when you can buy direct from FlashDispatchment at factory direct prices. Check out our corrugated boxes online that are exclusively designed for multiple packing purposes. This fail-safe method is all you need for safe transportation of your personal items.<br><br>

Although damage is generally believed to be a common occurrence during transit, however, it is important to understand that this can be easily avoided, as long as the correct shipping materials are used for the right application. Along with other packing supplies and solutions, we provide quality corrugated boxes online to guarantee that your product arrives at its destination safely.<br><br>

Built with special fiber boards, these shipping boxes are capable of holding items in place such that they won’t damage or spill while shipping. We constantly add the latest packaging and shipping supplies to our ever growing inventory, so do not hesitate to contact our customer service agents if you do not see it here. We will always help you get it.<br><br>

At FlashDispatchment we understand that our success is dependent upon yours.We offer top quality packaging materials at rock bottom prices.Being a large scale manufacturer and distributor, enables us to pass on bulk discounts directly to the customer.  This allows our customers the opportunity to purchase supplies in smaller quantities at the lowest possible prices. In a bid to help our customers order in confidence, we always stand behind our products and back every order with a 100% satisfaction guarantee. While we look forward to building continuing relations with our customers, we always strive to stand above the competition. Unarguably, www.upack.in is your one-stop source for all of your online packaging supplies and shipping supply requirements.<br><br>

Each of our employees understands our core values, and is committed to delivering on the FlashDispatchment.in motto.<br><br>

Thank you for taking the time to read about us.<br><br>

Sincerely,<br><br>
FlashDispatchment Team<br><br> </p>
					</header>
				
			</section>

			<section id="to" class="wrapper style2 special">
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
			<?php// include 'footer.php'; ?>
	</body>
</html>