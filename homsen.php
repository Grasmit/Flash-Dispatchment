<?php
	session_start();
?>
<html>
	<head>
		<title>HOME</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/my.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
	<?php include 'header.php'; ?>	
	<section id="one" class="wrapper special">
				<div class="inne">
					<header class="major">
						<h2 class="head">Welcome, <font style="text-transform: capitalize;"><?php echo $_SESSION['uname']; ?></font></h2>
					</header>
					<div class="features">
						<div>
							<div class="hexagon h-c1">
								<span>
								<a href="#banner">
								<img src="images/truck.svg" class="hexagonimg">
								</a><br><p class="thick">Request For Delivery</p>
								</span>
							</div>
						</div>
						<div>
							<div class="hexagon h-c2">
								<span>
								<a href="info.php">
								<img src="images/information.svg" class="hexagonimg1">
								</a><br><p class="thick1">Info Of Order</p>
								</span>
							</div>
						</div>
						<div>
							<div class="hexagon h-c3">
								<span>
								<a href="track.php">
								<img src="images/location.svg" class="hexagonimg1">
								</a><br><p class="thick1">Track an Order</p>
								</span>
							</div>
						</div>
					</div>
					<div class="features">
						<div>
							<div class="hexagon h-c4">
								<span>
								<a href="#features">
								<img src="images/feature.svg" class="hexagonimg1">
								</a><br><p class="thick1">Features</p>
								</span>
							</div>
						</div>
						<div>
							<div class="hexagon h-c5">
								<span>
								<a href="review.php">
								<img src="images/feedback.svg" class="hexagonimg1">
								</a><br><p class="thick1">Feedback</p>
								</span>
							</div>
						</div>
					</div>	
						<!-- <table border="0" class="tab1" style="background-color: #fff;">
							<tr>
								<td>
									<div class="hexagon"><span></span></div>
								</td>
								<td></td>
								<td>
									<div class="hexagon"><span></span></div>
								</td>
								<td></td>
								<td>
									<div class="hexagon"><span></span></div>
								</td>
							</tr>
						</table> -->
						<!-- <div class="feature">
							<i class="fa fa-truck"></i>
							<h3>Request For Delivery</h3>
							<a href='#banner'>Fill the detils for sending things</a>
							<br>
						</div>
						<div class="feature">
							<i class="fa fa-info-circle"></i>
							<h3>Info About Delivery</h3>
							<a href="info.php">Get The Information About Delivery</a>
						</div>
						<div class="feature">
							<i class="fa fa-user"></i>
							<h3>Profile</h3>
							<a href="profile.php">Show Profile</a>
						</div>
						<div class="feature">
							<i class="fa fa-map-marker"></i>
							<h3>Track The Delivery</h3>
							<a href="track.php">Open map</a>
							<br>
						</div>
						<div class="feature">
							<i class="fa fa-comments-o"></i>
							<h3>Feedback Our Service</h3>
							<a href="review.php">Review</a>
							<br>
						</div> -->
					</div>
				</div>
			</section>
			
			<section class="wrapp-banner specia">
				<div id="banner" class="box-banner">
					<div class="in-banner" style="margin-top: -70px;">
					<font style="font-size: 40px;">Fill-Up the details</font>	
					<form method="post" style="margin-top: 20px;text-align: left;">
						Good Type: <select name='type'>
						<option value="household">House-Hold</option>
						<option value="electronics">Electronics</option>
						<option value="electrics">Electric</option>
						<option value="grocerry">Grocerry</option>
						<option value="other">other</option>
						</select>
						
						Good Weight :<select name="weight" id="w">
						<option value="10">0-10</option>
						<option value="20">10-20</option>
						<option value="40">20-40</option>
						<option value="60">40-60</option>
						<option value="70">60+</option>
						</select>
						
						Good Size :<select name="size" id="s">
						<option value="small">Small</option>
						<option value="medium">Medium</option>
						<option value="large">Large</option>
						</select>
						
						Approx Distance :<select name="distance" id="d">
						<option value="5">0-5</option>
						<option value="10">5-10</option>
						<option value="15">10-15</option>
						<option value="20">15-20</option>
						<option value="30">20+</option>
						</select>
						<br>
						
						<!--<button type='submit' name='submit'> Calculate Fare </button>
						<br>
						<br>-->
						sender Name:
						<input type="text"  name="sname" Placeholder="Enter sender Name " required>
						<br>
						Receiver Name:
						<input type="text"  name="rname" Placeholder="Enter Receiver Name " required>
						<br>
						Secreat Key :
						<input type="text" name="skey" Placeholder="Enter  Secreat key ... " required>
						<br>
						Receiver Email:
						<input type="email" name="remail" Placeholder="Enter Receiver mail address " required>
						<br>
						Sender Address :
						<textarea name="sadd" rows=5 cols=2 wrap="hard" placeholder="enter the sender's address..." required>
							
						</textarea>
						<br>
						Receiver Address :
						<textarea name="radd" rows=5 cols=1 wrap="hard" required>
						</textarea>
						<br>
						<button type='submit' name='confirm' class='button special'>Confirm Request</button>
						
						<?php
						
							include 'in.php';
						
						if(isset($_POST['confirm']))
						{
							$type=$_POST['type'];
							$weight=$_POST['weight'];
							$size=$_POST['size'];
							$d=$_POST['distance'];
							$sname=$_POST['sname'];
							$semail=$_SESSION['uemail'];
							$rname=$_POST['rname'];
							$remail=$_POST['remail'];
							$skey=$_POST['skey'];
							$sadd=$_POST['sadd'];
							$radd=$_POST['radd'];
							$odno=rand(000000,999999);
							$f=0;
							
							if($d==5)
							{
								$f+=10;
							}
							else if($d==10)
							{
								$f+=20;
							}
							else if($d==15)
							{
								$f+=30;
							}
							else if($d==20)
							{
								$f+=40;
							}
							else if($d==30)
							{
								$f+=60;
							}
							
							if($weight==10)
							{
								$f+=20;
							}
							else if($weight==20)
							{
								$f+=40;
							}
							else if($weight==40)
							{
								$f+=60;
							}
							else if($weight==60)
							{
								$f+=80;
							}
							else if($weight==70)
							{
								$f+=120;
							}
							
							if($size=="small")
							{
								$f+=20;
							}
							else if($size=="medium")
							{
								$f+=40;
							}
							else if($size=="large")
							{
								$f+=60;
							}
							echo "<br>";
							echo "<br>";
							echo "Total Fare :"." ".$f;
							$_SESSION['fare']=$f;
							
							echo "<br>";
							echo "<br>";
							echo "<b><u>Order No. :</b></u>"." ".$odno;
							$_SESSION['ordno']=$odno;
							
							$q1="INSERT INTO good (ord_no,type,weight,size,fare) VALUES ($odno,'$type',$weight,'$size',$f)";
							mysqli_query($conn,$q1);
							
							$q2="INSERT INTO ord (ord_no,sname,semail,rname,remail,sadd,radd,skey) VALUES ($odno,'$sname','$semail','$rname','$remail','$sadd','$radd','$skey')";
							mysqli_query($conn,$q2);
							
							echo "<script>location.href='confirm.php'</script>";
						}
							
						?>
					</form>
					</div>
				</div>
			</section>
			<div id="features" class="features-section">
				<div class="features-box">
					<div class="features-content">
						<header>
							<h2 class="head" style="margin-left: 10px;color: black;font-weight: 1200;">Features</h2>
						</header>
						<ul class="features-list" style="color: black;font-weight: 1000;font-size: 20px;padding: 15px; margin: 5px;">
							<li>Fastest Delivery</li>
							<li>24*7 Services</li>
							<li>Live Tracking</li>
							<li>Privacy</li>
							<li>Cheapest Rate</li>
						</ul>
					</div>
				</div>
			</div>
			<section id="two" class="wrapper style2 special">
				<div class="inner narrow">
					<header>
						<h2>Get in touch</h2>
					</header>
					<ul>
					<li><a href="index.php">Home </a></li>
					<li><a href="tnc.html">Terms and Condition </a></li>
					<li><a href="privacy.html">Privcy policy </a></li>
					<li><a href="cancel.html">Cancellations and Refunds</a></li>
					<li><a href="Faq's.html">FAQs</a></li>
					<li><a href="service.php">Service Availability </a></li>
					</ul>
				</div>
			</section>
			
			</body>
			</html>