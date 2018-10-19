<?php
require('phpmailer/class.phpmailer.php');

if(isset($_REQUEST['command']))
{
$command=$_REQUEST['command'];
}
if($command=='specialoffer')
{
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "bh-in-22.webhostbox.net";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "info@alinmatourism.com";
$mail->Password = "Alinma@123";
$mail->SetFrom("info@alinmatourism.com");
$mail->Subject = "Special Offer Car Booking";
$mail->Body = '<table width="100%" border="1" align="center" cellpadding="20" cellspacing="0"  bgcolor="#CCCCCC">
	<tr>
		<td valign="top">
			<table width="650" border="0" align="center" cellpadding="10" cellspacing="0" bgcolor="#FFFFFF">
				<tr>
					<td>
						<!-- START OF Header Table -->
						<table width="633" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
							<tr>
								<td width="401" align="left" valign="top" style="font-family: Helvetica, sans-serif; font-size: 11px; color: #7a7a7a; line-height: 16px;">
									<p>Car Type '.$_POST['car_type'].',</p>
									<p>Name '.$_POST['pname'].',</p>
									<p>Email '.$_POST['email'].',</p>
									<p>Contact Number '.$_POST['phone'].',</p>
								</td>
								
							</tr>
						</table>
						<!-- END OF FOOTER TABLE --> 
					</td>
				</tr>
			</table>
  &nbsp;</td>
	</tr>
	</table>';
$mail->AddAddress("info@alinmatourism.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
}

if(isset($_REQUEST['command']))
{
$command=$_REQUEST['command'];
}
if($command=='bookacar')
{
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "bh-in-22.webhostbox.net";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "info@alinmatourism.com";
$mail->Password = "Alinma@123";
$mail->SetFrom("info@alinmatourism.com");
$mail->Subject = "Car Booking";
$mail->Body = '<table width="100%" border="1" align="center" cellpadding="20" cellspacing="0"  bgcolor="#CCCCCC">
	<tr>
		<td valign="top">
			<table width="650" border="0" align="center" cellpadding="10" cellspacing="0" bgcolor="#FFFFFF">
				<tr>
					<td>
						<!-- START OF Header Table -->
						<table width="633" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
							<tr>
								<td width="401" align="left" valign="top" style="font-family: Helvetica, sans-serif; font-size: 11px; color: #7a7a7a; line-height: 16px;">
									<p>Pickup Date '.$_POST['pickupdate'].',</p>
									<p>Pickup Time '.$_POST['pickuptime'].',</p>
									<p>Pickup Date '.$_POST['dropdate'].',</p>
									<p>Pickup Date '.$_POST['droptime'].',</p>
									<p>Address '.$_POST['address'].',</p>
									<p>State '.$_POST['state'].',</p>
									<p>Car Type '.$_POST['car_type'].',</p>
									<p>Name '.$_POST['pname'].',</p>
									<p>Email '.$_POST['email'].',</p>
									<p>Contact Number '.$_POST['phone'].',</p>
								</td>
								
							</tr>
						</table>
						<!-- END OF FOOTER TABLE --> 
					</td>
				</tr>
			</table>
  &nbsp;</td>
	</tr>
	</table>';
$mail->AddAddress("info@alinmatourism.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
}


if(isset($_REQUEST['command']))
{
$command=$_REQUEST['command'];
}

if($command=='getaquote')
{
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "bh-in-22.webhostbox.net";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "info@alinmatourism.com";
$mail->Password = "Alinma@123";
$mail->SetFrom("info@alinmatourism.com");
$mail->Subject = "Get a Quote";
$mail->Body = '<table width="100%" border="1" align="center" cellpadding="20" cellspacing="0"  bgcolor="#CCCCCC">
	<tr>
		<td valign="top">
			<table width="650" border="0" align="center" cellpadding="10" cellspacing="0" bgcolor="#FFFFFF">
				<tr>
					<td>
						<!-- START OF Header Table -->
						<table width="633" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
							<tr>
								<td width="401" align="left" valign="top" style="font-family: Helvetica, sans-serif; font-size: 11px; color: #7a7a7a; line-height: 16px;">
									<p>Pickup Date '.$_POST['pickupdate'].',</p>
									<p>Pickup Time '.$_POST['pickuptime'].',</p>
									<p>Pickup Date '.$_POST['dropdate'].',</p>
									<p>Pickup Date '.$_POST['droptime'].',</p>
									<p>Address '.$_POST['address'].',</p>
									<p>State '.$_POST['state'].',</p>
									<p>Car Type '.$_POST['car_type'].',</p>
									<p>Name '.$_POST['pname'].',</p>
									<p>Email '.$_POST['email'].',</p>
									<p>Contact Number '.$_POST['phone'].',</p>
								</td>
								
							</tr>
						</table>
						<!-- END OF FOOTER TABLE --> 
					</td>
				</tr>
			</table>
  &nbsp;</td>
	</tr>
	</table>';
$mail->AddAddress("info@alinmatourism.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
}


if(isset($_REQUEST['command']))
{
$command=$_REQUEST['command'];
}

if($command=='contactform')
{
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "bh-in-22.webhostbox.net";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "info@alinmatourism.com";
$mail->Password = "Alinma@123";
$mail->SetFrom("info@alinmatourism.com");
$mail->Subject = "Get a Quote";
$mail->Body = '<table width="100%" border="1" align="center" cellpadding="20" cellspacing="0"  bgcolor="#CCCCCC">
	<tr>
		<td valign="top">
			<table width="650" border="0" align="center" cellpadding="10" cellspacing="0" bgcolor="#FFFFFF">
				<tr>
					<td>
						<!-- START OF Header Table -->
						<table width="633" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
							<tr>
								<td width="401" align="left" valign="top" style="font-family: Helvetica, sans-serif; font-size: 11px; color: #7a7a7a; line-height: 16px;">
									<p>Name '.$_POST['pname'].',</p>
									<p>Email '.$_POST['email'].',</p>
									<p>Contact Number '.$_POST['phone'].',</p>
									<p>Subscribe '.$_POST['subscribe'].',</p>
									<p>Comments '.$_POST['message'].',</p>
								</td>
								
							</tr>
						</table>
						<!-- END OF FOOTER TABLE --> 
					</td>
				</tr>
			</table>
  &nbsp;</td>
	</tr>
	</table>';
$mail->AddAddress("info@alinmatourism.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
}

?>