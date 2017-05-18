<!DOCTYPE html>
<?php
	
	$B= $_GET['others'];
	$A= $_GET['ticket'];
	$place = $_GET['place'];
	$toplace = $_GET['toplace'];
	$discount = $_GET['discount'];
	
?>

<html>

<head>
  <meta charset="UTF-8">
  <title>Payment Form</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<div class="container">
  <div id="Checkout" class="inline">
      <h1>Pay Invoice</h1>
      <div class="card-row">
          <span class="visa"></span>
          <span class="mastercard"></span>
          <span class="amex"></span>
          <span class="discover"></span>
      </div>
      <form action = "../package/transaction.php?discount=<?php echo $discount; ?>&ticket1=<?php echo $A; ?>&others=<?php echo $B; ?>&place=<?php echo $place; ?>&toplace=<?php echo $toplace ?>" method = "POST">
          <div class="form-group">
              <label for="PaymentAmount">Payment amount</label>
              <div class="amount-placeholder">
                  <span>Rs.</span>
                  <span><?php echo $A+$B;?></span><br>
				  <span>Discount Rs.</span>
				  <span><?php echo $discount;?></span><br>
				  <span>Total Rs.</span>
                  <span><?php echo $A+$B-$discount;?></span><br>
				  
              </div>
          </div>

          <div class="form-group" >
              <label or="NameOnCard">Name on card</label>
              <input id="NameOnCard" class="form-control" type="EMAIL" maxlength="255" name = "name"></input>
          </div>
          <div class="form-group">
              <label for="CreditCardNumber">Card number</label>
              <input id="CreditCardNumber" class="null card-image form-control" type="text" name = "card_number"></input>
          </div>
          <div class="expiry-date-group form-group">
              <label for="ExpiryDate">Expiry date</label>
              <input id="ExpiryDate" class="form-control" type="text" placeholder="MM / YY" maxlength="10" name= "expiry"></input>
          </div>
          <div class="security-code-group form-group">
              <label for="SecurityCode">Security code</label>
              <div class="input-container" >
                  <input id="SecurityCode" class="form-control" type="text" name = "security"></input>
                  <i id="cvc" class="fa fa-question-circle"></i>
              </div>
              <div class="cvc-preview-container two-card hide">
                  <div class="amex-cvc-preview"></div>
                  <div class="visa-mc-dis-cvc-preview"></div>
              </div>
          </div>
        
          <button id="PayButton" type="submit">
              <span class="align-middle">Pay <?php echo $A+$B-$discount;?> </span>
          </button>
      </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

    <script src="js/index.js"></script>

	
	
</body>
</html>

