<?PHP
echo $_POST['toemail'];
$to = "bhavnasthakkar@gmail.com";
$subject = "Message from J.F. Shea.com Visitor";

$message = "The following information was sent by a J.F. Shea.com visitor from the Contact Us form. You have received this email since you are set up as the default contact in eManager for the requested company.";
$message .= "==========================";
$message .= "CUSTOMER";
$message .= "==========================";
$message .= "Name: ".$_POST['name'];

$message .= "==========================";
$message .= "CONTACT INFORMATION";
$message .= "==========================";
$message .= "Email: " .$_POST['email'];
$message .= "Phone: " .$_POST['phone'];

$message .= "==========================";
$message .= "DIRECTED TO";
$message .= "==========================";
$message .= "Company/Office: " .$_POST['companies'];

$message .= "==========================";
$message .= "COMMENTS / QUESTION";
$message .= "==========================";
$message .= $_POST['comments'];

//$from = $_POST['email'];
$to = "bhavnasthakkar@gmail.com";

$headers = "From:" . $from;

mail($to,$subject,$message,$headers);
?>


<table cellpadding="2" cellspacing="0" width=55% style="margin-left:-40%;" border=0 id="main_content">
	<tr>
		<td>
			Thank you for your interest in J.F. Shea Co. Your comments have been sent directly to management at <?PHPecho $_POST['companies']?>. You will receive a response as soon as possible.
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td valign=top>
			<b>Here is the information that we received</b>
			<p>
			Name: <b><?PHP echo $_POST['name']?></b><br />
			Company/Office: <b><?PHP if ($_POST['companies'] == 1) {
									echo "BlueStar Resort &amp; Golf";	
									} elseif ($_POST['companies'] == 2) {
									echo "Corporate";	
									} elseif ($_POST['companies'] == 3) {
									echo "J.F. Shea Construction";	
									} elseif ($_POST['companies'] == 4) {
									echo "REED Manufacturing";	
									} elseif ($_POST['companies'] == 5) {
									echo "Redding";	
									} elseif ($_POST['companies'] == 6) {
									echo "Redding-Aggregate Products";	
									} elseif ($_POST['companies'] == 7) {
									echo "Redding-Anderson-Cottonwood Concrete Products";	
									} elseif ($_POST['companies'] == 8) {
									echo "Redding-Fawndale Rock &amp; Asphalt";	
									} elseif ($_POST['companies'] == 9) {
									echo "Redding-Shasta Redi-Mix";	
									} elseif ($_POST['companies'] == 10) {
									echo "Redding-Shea Sand &amp; Gravel";	
									} elseif ($_POST['companies'] == 11) {
									echo "Redding-Siskiyou Asphalt";	
									} elseif ($_POST['companies'] == 12) {
									echo "Shea Homes";	
									} elseif ($_POST['companies'] == 13) {
									echo "Shea Mortgage";	
									} elseif ($_POST['companies'] == 14) {
									echo "Shea Properties";	
									} elseif ($_POST['companies'] == 15) {
									echo "Trilogy for Active Adults";	
									} elseif ($_POST['companies'] == 16) {
									echo "Venture Capital";	
									}?></b>
			<p>
			Email: <b><?PHP echo $_POST['email']?></b><br />
			Phone: <b><?PHP echo $_POST['phone']?></b><br />
			<p>
			Comments/Question:<br /> 
			<b><?PHP echo $_POST['comments']?></b>
		</td>
	</tr>
</table>
<table style="margin-left:58%;margin-top:-27%;padding-bottom:1%;" cellpadding=5 cellspacing=5>
	<tr>
		<td><img src="images/other/contact_montage.jpg" border=0></td>
	</tr>
</table>
