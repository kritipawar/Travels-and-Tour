<!DOCTYPE html>
<?php
	session_start();
	
	$A = $_SESSION['FULLNAME'];
?>


<html>
<head>
<title>Cruaizon</title>
<link rel="icon" type="image/gif/png" href="raj1.png"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="../login/style.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/redmond/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>



<script>

$("#search").on('keyup', function (e) {
    if (e.keyCode == 13) {
        $('#search').get(0).type = 'submit';
    }
});


</script>
	
<script type="text/javascript">
        $(document).ready(function () {
            $("#OpenDialog").click(function () {
                $("#modal").css("display", "block");
            });
        });
		$(document).ready(function () {
            $("#close").click(function () {
                $("#modal").css("display", "none");
            });
        });
    </script>

<!-- Top Background Image Wrapper -->

<div class="relative bgded" style="background-image:url('../images/demo/backgrounds/03.png'); height:700px;">

  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_left">
        <ul class="nospace inline pushright">
          <li><i class="fa fa-phone"></i> +91-8500906080</li>
          <li><i class="fa fa-envelope-o"></i> info@cruaizon.com</li>
        </ul>
      </div>
      <div class="fl_right">
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.php">Cruaizon</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a class="drop" href="#">Services</a>
            <ul>
             <li id = "login-form"><button id ="OpenDialog" style = "decoration:none; background:rgba(0,0,0,0);border:none; font-size:15px; cursor:pointer">CHANGE PASSWORD</button></li>
			 <li id = "login-form"><a href = '#update'>Update Customer</a></button></li>
              
            </ul>
          </li>
          <li> Welcome Admin <?php echo $A ?>.</li>
		  <li><a href='../login/logout.php'><button style="decoration:none; background: rgba(20,20,20,.5); height:35px; border: 1px solid aqua; cursor:pointer;">Log Out</button></a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <div class="wrapper">
  <div id = "modal">
  <div id = "modal-bg">
  
		<div class = "form">
		
			<div class="form-1">
				<div class = "form-2">
				<button id="close" style = "height:40px;width:40px; decoration: none; border-radius:40px; font-size: 15px; text-align:center; background: rgba(50,150,50,.90); margin-left:620px; margin-top:0; color: white; text-align:center">x</button>
					<fieldset>
					<form action = "change.php" method = "POST">
						
						<input type = "password" placeholder = "old password" name = "pass" required />
						<input type = "password" placeholder = "new password" name = "pass1" required />
						<input type = "password" placeholder = "Confirm password" name = "pass2" required />
						
						<input type = "submit" value = "change" style = "background: rgba(0,150,0,.5); cursor:pointer; color:black"/>
						
					</form>
					</fieldset>
				</div>
			</div>
		</div>
</div>		
	</div>
	  </div>
	

  </div>
  <!-- ################################################################################################ -->
  <div id = "update">

	<form action = "admin.php" method = "POST">
						<input type = "radio" name = "admin-category" value="view-customers" style ="width: 50px; margin-top:10px">View all customers
						<input type = "radio" name = "admin-category" value="view-customer-history" style ="width: 50px">Customer History
						<input type = "radio" name = "admin-category" value="update-customer-details" style ="width: 50px">Update Customer
						
						<input type = "Text" name = "customer-mail" placeholder = "Enter customer mail"/>
						<input type = "submit" name = "submit-admin"  style = "margin-top:20px; bachground-color:grey"value = "Submit"/>
						

						
					</form>

  </div>

<div class="wrapper row5">
  <div id="contactinfo" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace group">
      <li class="one_quarter first">
        <div class="infobox"><i class="fa fa-phone"></i>
          <ul class="nospace">
            <li>+91-8500906080</li>
            <li>+91-9826935002</li>
          </ul>
        </div>
      </li>
      <li class="one_quarter">
        <div class="infobox"><i class="fa fa-envelope-o"></i>
          <ul class="nospace">
            <li><a href="#">info@cruaizon.com</a></li>
            <li><a href="#">sales@cruaizon.com</a></li>
          </ul>
        </div>
      </li>
      <li class="one_quarter">
        <div class="infobox"><i class="fa fa-clock-o"></i>
          <ul class="nospace">
            <li>24/7</li>
            <li>365 days.</li>
          </ul>
        </div>
      </li>
      <li class="one_quarter">
        <div class="infobox"><i class="fa fa-support"></i>
          <ul class="nospace">
            <li><a href="#header">Home</a></li>
          </ul>
        </div>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>


<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Cruaizon</a></p>
    
    <!-- ################################################################################################ -->
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
<!-- Homepage specific - can be used in all pages -->
<div id="preloader"><div></div></div>
<script>$(window).load(function(){$("#preloader div").delay(500).fadeOut();$("#preloader").delay(800).fadeOut("slow");});</script>
<!-- / Homepage specific -->
</body>
</html>