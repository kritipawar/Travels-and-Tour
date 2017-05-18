
      
      <?php
	  session_start();
	$name =		$_SESSION['FULLNAME'] ;
	$email = $_SESSION['email'];
	$trans = $_GET['transid'];
	
	
	  
	  
	  include 'phpmailer/PHPMailer-master/class.smtp.php';
	  require 'phpmailer/PHPMailer-master/PHPMailerAutoload.php';
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
  $Mail->Subject     = 'Transaction ID: \''.$trans.'\' successfully cancelled!';
  $Mail->ContentType = 'text/html; charset=utf-8\r\n';
  $Mail->From        = 'rajsrujan77@gmail.com';
  $Mail->SetFrom("raj15100@iiitnr.edu.in");
  $Mail->FromName    = 'Cancel!!';
  $Mail->WordWrap    = 900; // RFC 2822 Compliant for Max 998 characters per line

  $Mail->AddAddress( 'kriti15100@iiitnr.edu.in' ); // To:
  $Mail->isHTML( TRUE );
  $Mail->Body    = 'Transaction ID: \''.$trans.'\' successfully cancelled!';
 //$Mail->AltBody = 'kjhjuhkhkj';
  //$Mail->Send();
  

    if(!$Mail->Send())
    {
       echo "Message could not be sent. <p>";
       echo "Mailer Error: " . $Mail->ErrorInfo;
       exit;
    }

    echo "Message has been sent";
	header("Location:index-user.php?msg='Successfully Cancelled'");
	$Mail->SmtpClose();


?>
 