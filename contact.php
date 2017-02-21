<?php
header ('Content-Type: text/html; charset=UTF-8');  

$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['textarea'];

$mail_to = 'mknyzel15@students.lcc.lt';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript"  charset="UTF-8">
		alert('Thank You for Your message!');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript" charset="UTF-8">
		alert('Error. Please try again.');
		window.location = 'index.html';
	</script>
<?php
}
?>
