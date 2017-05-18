
      
      <?php
	  session_start();
	  $number=	$_SESSION['transaction_number'];
	$price =	$_GET['price'] ;
	$name =		$_SESSION['FULLNAME'] ;
	$email = $_SESSION['email'];
	$fromplace=     $_GET['place'];
	$toplace = $_GET['toplace'];
	$hotel = $_GET['hotel'];
	$rand = rand();
	  
	  
	  include 'phpmailer/PHPMailer-master/class.smtp.php';
	  require 'phpmailer/PHPMailer-master/PHPMailerAutoload.php';
	  require('FPDF-master/fpdf.php');
//include 'class.phpmailer.php';
	  require("phpmailer/PHPMailer-master/class.phpmailer.php");
	  

	  
	  

    $Mail = new PHPMailer();
  $Mail->IsSMTP(); // Use SMTP
  $Mail->Host        = "mail.iiitnr.edu.in"; // Sets SMTP server
  $Mail->SMTPDebug   = 1; // 2 to enable SMTP debug information
  $Mail->SMTPAuth    = TRUE; // enable SMTP authentication
  $Mail->SMTPSecure  = 'ssl'; //Secure conection
  $Mail->Port        = 465; // set the SMTP port
  $Mail->Username    = 'raj15100@iiitnr.edu.in'; // SMTP account username
  $Mail->Password    = 'srujan@97'; // SMTP account password
  $Mail->Priority    = 3; // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
  $Mail->CharSet     = 'UTF-8';
  $Mail->Encoding    = '8bit';
  $Mail->Subject     = 'Transaction ID: \''.$number.'\'';
  $Mail->ContentType = 'text/html; charset=utf-8\r\n';
  $Mail->From        = 'rajsrujan77@gmail.com';
  $Mail->SetFrom("raj15100@iiitnr.edu.in");
  $Mail->FromName    = 'Happy Travelling!!';
  $Mail->WordWrap    = 900; // RFC 2822 Compliant for Max 998 characters per line

  $Mail->AddAddress( "$email" ); // To:
  $Mail->isHTML( TRUE );
  $Mail->Body    = "Congratulations! Your Booking has been successfully placed.       \nTransaction ID: $number, \n\n      name:  $name,  \n\n     From:  $toplace,  \n\n     Going to: $fromplace,  Paid: $price,  Hotel:  Moonlight, Delhi , Room:  $rand,    \nHappy Travelling.\n\n       Regards,\nCruaizon";
 //$Mail->AltBody = 'kjhjuhkhkj';
  //$Mail->Send();
  

    if(!$Mail->Send())
    {
       echo "Message could not be sent. <p>";
       echo "Mailer Error: " . $Mail->ErrorInfo;
       exit;
    }

    echo "Message has been sent";
	header("Location:../package/history.php?price=$price&place=$fromplace&toplace=$toplace");
	$Mail->SmtpClose();


?>
 