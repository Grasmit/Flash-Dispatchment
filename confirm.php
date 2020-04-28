<?php
	session_start();
?>
<html>
<head>
	<link rel="stylesheet" href="pay.css" />
	<script type="text/javascript">
		$(document).ready(function() 
		{
 
			$('.method').on('click', function() 
			{
				$('.method').removeClass('blue-border');
				$(this).addClass('blue-border');
			});
 
		})
		var $cardInput = $('.input-fields input');
 
		$('.next-btn').on('click', function(e) 
		{
 
		$cardInput.removeClass('warning');
 
		$cardInput.each(function()
		{    
			var $this = $(this);
			if (!$this.val())
			{
				$this.addClass('warning');
			}
		})
		});
		</script>
</head> 
<body>

<section id="one" class="wrapper special">
				<div class="inne">
					<header class="major">
						<h2 class="head">Your Order No. :  <font style="text-transform: capitalize;"><?php echo $_SESSION['ordno']; ?></font></h2><br>
						<h2 class="head">Total Fare. :  <font style="text-transform: capitalize;"><?php echo $_SESSION['fare']; ?></font></h2>
					</header>
</section>

<div class="checkout-panel">
  <div class="panel-body">
    <h2 class="title">Checkout here!</h2>
 
    <div class="progress-bar">
      <div class="step active"></div>
      <div class="step active"></div>
      <div class="step"></div>
      <div class="step"></div>
    </div>
 
	<form method='post'>
    <div class="payment-method">
      <label for="card" class="method card">
        <div class="card-logos">
          <img src="images/visa_logo1.png"/>
          <img src="images/master.png"/>
        </div>
 
        <div class="radio-input">
          <input id="card" type="radio" name='payment' value='Card'>
          Pay with credit card
        </div>
      </label>
 
      <label for="paypal" class="method paypal">
        <img src="images/paypal.png"/>
        <div class="radio-input">
          <input id="paypal" type="radio" name='payment' value='paypal'>
          Pay with PayPal
        </div>
      </label>
	  
	  <label for="paytm" class="method paypal">
        <img src="images/paytm.png"/>
        <div class="radio-input">
          <input id="paytm" type="radio" name='payment' value='paytm'>
          Pay with Paytm
        </div>
      </label>
	  
	  <label for="paytm" class="method paypal">
        <img src="cod.png"/>
        <div class="radio-input">
          <input id="paytm" type="radio" name='payment' value='COD'>
          Pay on delivery time
        </div>
      </label>
	  
    </div>
 
    <div class="input-fields">
      <div class="column-1">
        <label for="cardholder">Name</label>
        <input type="text" id="cardholder" />
 
        <div class="small-inputs">
          <div>
            <label for="date">Valid date</label>
            <input type="text" id="date"/>
          </div>
 
          <div>
            <label for="verification">CVV / CVC *</label>
            <input type="password" id="verification"/>
          </div>
        </div>
 
      </div>
      <div class="column-2">
        <label for="cardnumber">Card Number</label>
        <input type="password" id="cardnumber"/>
 
        <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
      </div>
    </div>
  </div>
 
  <div class="panel-footer">
  <button class="btn back-btn" onclick='location.href="homsen.php"'>Back</button>
  <script>
			function back()
			{
				location.href='homsen.php';
			}
  </script>
    <button name='paydone' class="btn next-btn">Done</button>
  </div>
  </form>
</div>



<?php
			
			include 'in.php';
			
			if(isset($_POST['payment']))
			{
			
				if(isset($_POST['paydone']))
				{
					$method=$_POST['payment'];
					$ordno=$_SESSION['ordno'];
					
					$q2="INSERT INTO payment (ord_no,method) VALUES ($ordno,'$method')";
					mysqli_query($conn,$q2);
			
				}
			}
			else
			{
				echo "Please choose the payment option"; 
			}
?>
<body>
</html>