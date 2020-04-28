<?php
	session_start();
?>
<html>
<head>
	<title>Info About Delivery</title>
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/my.css" />

</head>
	<body>
		<?php include 'header.php'; ?>
				<section id="one" class="wrapper special">
				<div class="inner">
					<header class="major">
						<h2> Information About Your Delivery</h2>
						<form method="POST">
							
								<input type="text" name="ordno" placeholder="Enter The Order No..." required>
								<br>
								<input type="password" name="key" placeholder="Enter Secreat Key Word..."required>
								<br>
								<button type="submit" name="search" >Get Information</button>
								
						</form>
						<?php
						
							include 'in.php';
						
							if(isset($_POST['search']))
							{
								$od=$_POST['ordno'];
								$key=$_POST['key'];
	
								$q9="SELECT * FROM ord WHERE ord_no=$od AND skey='$key'";
								$que9= mysqli_query($conn,$q9);
								$num9= mysqli_num_rows($que9);
			
								if(!($num9>0))
								{
									echo "invalid order no or secreat keyword";
									echo "<br>";
								}
							}
						?>
						<br>
						<h2 text-align="center"><b> Good Information</b></h2>
						
						<table align="center" border="1px" style="width:1045px; line-height:40px; ">
						<tr>
							<th> Order No. </th>
							<th> Type </th>
							<th> Weight </th>
							<th> Size </th>
							<th> Fare </th>
						</tr>
						<?php
					
						include 'in.php';
						
						if(isset($_POST['search']))
						{
							$od=$_POST['ordno'];
							$q3="SELECT * FROM good WHERE ord_no=$od";
							$res1=mysqli_query($conn,$q3);
							$num1=mysqli_num_rows($res1);
							
							if($num1>0)
							{
								
								while($rows = mysqli_fetch_assoc($res1))
								{
									echo "<tr>";
										echo "<td>";
													echo $od;
										echo "</td>";
										echo "<td>";
													echo $rows['type'];
										echo "</td>";
										echo "<td>";
													echo $rows['weight'];
										echo "</td>";
										echo "<td>";
													echo $rows['size'];
										echo "</td>";
										echo "<td>";
													echo $rows['fare'];
										echo "</td>";
										echo "</tr>";
								}
								//echo "</table>";	
							}
						}
					?>
					</table>
					<br>
					<h2 text-align="center"><b> Delivery Information</b></h2>
					<table align="center" border="1px" style="width:1045px; line-height:40px; ">
						<tr>
							<th> Order No. </th>
							<th> Sender Name </th>
							<th> Sender E-mail </th>
							<th> Receiver Name </th>
							<th> Receiver E-mail </th>
						</tr>
						<?php
					
						include 'in.php';
						
						if(isset($_POST['search']))
						{
							$od=$_POST['ordno'];
							$q4="SELECT * FROM ord WHERE ord_no=$od";
							$res2=mysqli_query($conn,$q4);
							$num2=mysqli_num_rows($res2);
							
							if($num2>0)
							{
								
								while($row = mysqli_fetch_assoc($res2))
								{
									echo "<tr>";
										echo "<td>";
													echo $od;
										echo "</td>";
										echo "<td>";
													echo $row['sname'];
										echo "</td>";
										echo "<td>";
													echo $row['semail'];
										echo "</td>";
										echo "<td>";
													echo $row['rname'];
										echo "</td>";
										echo "<td>";
													echo $row['remail'];
										echo "</td>";
										echo "</tr>";
								}
								//echo "</table>";	
							}
						}
					?>
					</table>
					<br>
					<h2 text-align="center"><b> Address Information</b></h2>
					<table align="center" border="1px" style="width:1045px; line-height:40px;">
						<tr>
							<th> Order No. </th>
							<th> Sender Address </th>
							<th> Receiver Address </th>
						</tr>
						<?php
					
						include 'in.php';
						
						if(isset($_POST['search']))
						{
							$od=$_POST['ordno'];
							$q5="SELECT * FROM ord WHERE ord_no=$od";
							$res3=mysqli_query($conn,$q5);
							$num3=mysqli_num_rows($res3);
							
							if($num3>0)
							{
								
								while($row = mysqli_fetch_assoc($res3))
								{
									echo "<tr>";
										echo "<td>";
													echo $od;
										echo "</td>";										
										echo "<td >";
													echo $row['sadd'];
										echo "</td>";
										echo "<td>";
													echo $row['radd'];
										echo "</td>";
										echo "</tr>";
									
									
									/*echo "Order No :"."&nbsp";
									echo "&nbsp".$od;
									echo "<br>";
									echo "Sender Name :"."&nbsp";
									echo "&nbsp".$rows['sname'];
									echo "<br>";
									echo "Sender E-mail :"."&nbsp";
									echo "&nbsp".$rows['semail'];
									echo "<br>";
									echo "Receiver Name :"."&nbsp";
									echo "&nbsp".$rows['rname'];
									echo "<br>";
									echo "Receiver E-mail :"."&nbsp";
									echo $rows['remail'];
									echo "<br>";
									echo "Sender Address :"."&nbsp";
									echo $rows['sadd'];
									echo "<br>";
									echo "Receiver Address :"."&nbsp";
									echo $rows['radd'];*/
								}
								//echo "</table>";	
							}
						}
					?>
					</table>
					</header>
					
					<a href='homsen.php' class='button special'> Back </a>
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