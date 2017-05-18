<!DOCTYPE html>
<html>

<head>
<title>Cruaizon</title>
<link rel="icon" type="image/gif/png" href="raj1.png"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="login/style.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/redmond/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
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

<div class="relative bgded" style="background-image:url('images/demo/backgrounds/01.png');">

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
              <li><a href="#">Suggest</a></li>
              <li><a href="#footer">Contact</a>
              </li>
              <li><a href="#footer">About Us</a></li>
            </ul>
          </li>
          <li id = "login-form"><button id ="OpenDialog" style = "decoration:none; background:rgba(0,0,0,0);border:none; font-size:15px; cursor:pointer">LOGIN</button></li>
          <li><a href="login/login.php">Join Us</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  
  
  
  <div class="wrapper">
  
  
  <div id = "modal">
  <div id = "modal-bg">
  
		<div class = "form">
		
			<div class="form-1" style="height:500px; width:700px">
				<div class = "form-2">
				<button id="close" style = "height:40px;width:40px; decoration: none; border-radius:40px; font-size: 15px; text-align:center; background: rgba(50,150,50,.90); margin-left:620px; margin-top:0; color: white; text-align:center">x</button>
					<fieldset>
					<form action = "try.php" method = "POST">
						<input type = "radio" name = "login-category" value="admin" style ="width: 50px">Admin
						<input type = "radio" name = "login-category" value="user" style ="width: 50px">User
						<input type = "email" placeholder = "Emailid" name = "user" required />
						<input type = "password" placeholder = "Password" name = "pass" required />
						<input type = "submit" value = "Login" style = "background: rgba(0,150,0,.5); cursor:pointer; color:black"/>
						
					</form>
					<p style="font-size:12px;">Don't have an account?<button id ="sign-up"><a href ="login/login.php" style= "text-align:right">Sign Up</a></button></p>
					</fieldset>
					
				</div>
			</div>
		</div>
</div>		
	</div>
	  
	  
  
  
  
    <div id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="introtxt">
		<div id="heading">
			<h2 class="heading">Holiday &amp; Travel</h2>
			
		</div>
        <p style = "margin-bottom:20px; font-size:30px; font-family:sans-serif">You deserve a wanderlust.</p>
		
		<input type="search" results=5 autosave = "search" id="search" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Find a place to get lost."/>
      </div>
      <!-- ################################################################################################ -->
      <div class="clear"></div>
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>

<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <!--<p style = "margin-left:350px; font-size:30px;" > Let's Explore India!!</p>-->
	<ul id="home" class="nospace group elements">
	  <li class="one_third first">
        <figure class="elementwrapper"><a class="imgoverlay" href="kashmir.php"><img src="images/demo/480x285.png" alt=""></a>
          <figcaption>Kashmir</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure class="elementwrapper"><a class="imgoverlay" href="#login-footer"><img src="images/demo/480x285-1.png" alt=""></a>
          <figcaption>Sikkim</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure class="elementwrapper"><a class="imgoverlay" href="#login-footer"><img src="images/demo/480x285-2.png" alt=""></a>
          <figcaption>Ooty</figcaption>
        </figure>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <section id="holtypes" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h2 class="heading underline center">Find the right type of holiday</h2>
    <ul class="nospace group">
      <li class="one_third first">
        <article><a class="btn" href="#login-footer"><i class="tr tr-golf22"></i></a>
          <h4 class="heading">Luxury</h4>
          <p>Visit the most luxurious places around the world.</p>
        </article>
      </li>
      <li class="one_third">
        <article><a class="btn" href="#login-footer"><i class="tr tr-watercraft"></i></a>
          <h4 class="heading">Domestic Love</h4>
          <p>Explore the incredible India.</p>
        </article>
      </li>
      <li class="one_third">
        <article><a class="btn" href="#login-footer"><i class="tr tr-person205"></i></a>
          <h4 class="heading">Beach</h4>
          <p>Heaven seems a little closer at the beach. </p>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <h2 class="heading">Best deals</h2>
    <p class="btmspace-50">Get the best out of us. <a href="#login-footer">View All Deals &raquo;</a></p>
    <ul id="lastminute" class="nospace group elements">
      <li class="one_third first">
        <article class="elementwrapper">
          <figure><a class="imgoverlay" href="#login-footer"><img src="images/demo/320x220.png" alt=""></a>
            <figcaption class="group">
              <div class="fl_left">Delhi.</div>
              <a href="#login-footer" class="fl_right"><i class="fa fa-eye"></i></a></figcaption>
          </figure>
          <div class="elementinfo">
            <ul class="starrating">
              <li><i class="coloured fa fa-star"><em>1</em></i></li>
              <li><i class="coloured fa fa-star"><em>2</em></i></li>
              <li><i class="coloured fa fa-star"><em>3</em></i></li>
              <li><i class="fa fa-star-half-o"><em>4</em></i></li>
              <li><i class="fa fa-star-o"><em>5</em></i></li>
            </ul>
            <h4 class="heading">Explore the capital of india.</h4>
            <ul class="meta">
              <li><i class="red fa fa-map-marker"></i> Delhi, Inda</li>
              <li>Rs.<strong>2000</strong> <span class="font-xs">(per night)</span></li>
              <li><a href="#login-footer">View Details &raquo;</a></li>
            </ul>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="elementwrapper">
          <figure><a class="imgoverlay" href="#login-footer"><img src="images/demo/320x220.png" alt=""></a>
            <figcaption class="group">
              <div class="fl_left">Visakhapatnam</div>
              <a href="#login-footer" class="fl_right"><i class="fa fa-eye"></i></a></figcaption>
          </figure>
          <div class="elementinfo">
            <ul class="starrating">
              <li><i class="coloured fa fa-star"><em>1</em></i></li>
              <li><i class="coloured fa fa-star"><em>2</em></i></li>
              <li><i class="coloured fa fa-star"><em>3</em></i></li>
              <li><i class="coloured fa fa-star"><em>4</em></i></li>
              <li><i class="fa fa-star-half-o"><em>5</em></i></li>
            </ul>
            <h4 class="heading">Get amazed in the City of Destiny.</h4>
            <ul class="meta">
              <li><i class="red fa fa-map-marker"></i> Andhra Pradesh, India</li>
              <li>Rs.<strong>2000</strong> <span class="font-xs">(per night)</span></li>
              <li><a href="#login-footer">View Details &raquo;</a></li>
            </ul>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="elementwrapper">
          <figure><a class="imgoverlay" href="#login-footer"><img src="images/demo/320x220.png" alt=""></a>
            <figcaption class="group">
              <div class="fl_left">Udaipur</div>
              <a href="#login-footer" class="fl_right"><i class="fa fa-eye"></i></a></figcaption>
          </figure>
          <div class="elementinfo">
            <ul class="starrating">
              <li><i class="coloured fa fa-star"><em>1</em></i></li>
              <li><i class="coloured fa fa-star"><em>2</em></i></li>
              <li><i class="coloured fa fa-star"><em>3</em></i></li>
              <li><i class="coloured fa fa-star"><em>4</em></i></li>
              <li><i class="coloured fa fa-star"><em>5</em></i></li>
            </ul>
            <h4 class="heading">A city where even air is tinted with Royalty!</h4>
            <ul class="meta">
              <li><i class="red fa fa-map-marker"></i> Rajasthan, India</li>
              <li>Rs.<strong>4000</strong> <span class="font-xs">(per night)</span></li>
              <li><a href="#login-footer">View Details &raquo;</a></li>
            </ul>
          </div>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
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
            <li><a href="#login-footer">info@cruaizon.com</a></li>
            <li><a href="#login-footer">sales@cruaizon.com</a></li>
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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper coloured">
  <div id="newsletter" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading"><i class="fa fa-newspaper-o"></i>Join Us.</h6>
    </div>
	<div id="login-footer">
    <form class = "three_quarter" action = "try.php" method = "POST">
      <div class="clear">
	  
	  
	  
	  <!--############################################################-->
							 
								<input class="one_third first" type="email" name="user" placeholder="Emailid" required />
								<input class="one_third" type="password" name="pass" placeholder="Password" required />
								<input class="one_third" type="submit" title="Sign Up" style="cursor:pointer"  value = "Login" />
							
								
		<!--############################################################-->						
								
      </div>
    </form>
	</div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="title">Vitae nunc sagittis</h6>
      <p>Duis non dolor sit amet lorem rhoncus commodo ornare tellus vel quam.</p>
      <p>Sapien porttitor auctor integer pharetra ligula sit elementum in lobortis dolor ullamcorper.</p>
    </div>
    <div class="one_quarter">
      <h6 class="title">Faucibus a lacus</h6>
      <article>
        <h2 class="nospace font-x1"><a href="#login-footer">Tincidunt phasellus</a></h2>
        <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
        <p>Nullam eu velit vestibulum egestas nisi lacinia fringilla lectus mauris enim magna placerat venenatis.</p>
      </article>
    </div>
    <div class="one_quarter">
      <h6 class="title">Molestie elit id</h6>
      <ul class="nospace linklist">
        <li><a href="#login-footer">Placerat arcu suspendisse</a></li>
        <li><a href="#login-footer">Vestibulum ultrices id dui</a></li>
        <li><a href="#login-footer">Tempus commodo maximus</a></li>
        <li><a href="#login-footer">Suspendisse potenti vivamus</a></li>
        <li><a href="#login-footer">Gravida malesuada praesent</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Ultrices odio cras</h6>
      <ul class="nospace linklist">
        <li><a href="#login-footer">aenean eget tempor orci</a></li>
        <li><a href="#login-footer">curabitur sit amet massa</a></li>
        <li><a href="#login-footer">sollicitudin elementum</a></li>
        <li><a href="#login-footer">nunc sit amet laoreet libero</a></li>
        <li><a href="#login-footer">donec erat enim consectetur</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#login-footer">Cruaizon</a></p>
    
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
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