<!DOCTYPE html>
<html lang="en">
<title>CONTACT GO2DOMAINSALES</title>
<?php
include('frontend/head.php');
?>
<body>

<?php
include('frontend/header.php');
?>

<section class="section-a bg-img1 txt-center p-lr-15 p-tb-48" style="background-color:powderblue;">
		<h2 class="ltext-105 cl0 txt-center">
			CONTACT US TODAY
		</h2>
</section>

<section class="section-b bg0 p-t-10 p-b-10" style="background-image: url('./images/slide-06.jpg'); opacity:0.6; background-size:cover">
	<p style="color:orange;" font-weight: bolder; >Questions regarding our services or maybe a question regarding employment opportunities - reach out today! </p>
</section>

	<!-- Content page -->

<center>
	<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
<div class="container-contact">
	<form action="mailto:roland@adsitepro.com" method="POST" enctype="multipart/form-data" name="ContactForm">
  	  <label for="name">Full Name:</label>
	  <input type="text" id="name" name="fullname" placeholder="Your full name..."/>

	  <label for="email">Email:</label>
	  <input type="email" id="email" name="email" placeholder="Your email..."/>
	  <label for="country">Country:</label>
	  <select id="country" class="country" name="country">
		<option value="usa">USA</option>
		<option value="australia">Australia</option>
		<option value="canada">Canada</option>
		<option value="asia">Asia</option>
		<option value="europe">Europe</option>
		<option value="africa">Africa</option>
		<option value="s.america">South America</option>
	  </select>

	  <label for="subject">Subject:</label>
	  <textarea id="subject" name="subject" placeholder="Write something..." style="height:100px"></textarea>

	  <input type="submit" value="Submit"/>

	</form>
  </div>
</center>

<?php
}
else                /* send the submitted data */
{
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
if (($name=="")||($email=="")||($message==""))
	{
	echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	}
else{
	$from="From: $name<$email>\r\nReturn-path: $email";
	$subject="Message sent using your contact form";
	mail("admin@go2domainsales.com", $subject, $message, $from);
	echo "Email sent!";
	}
}
?>

<section class="section-b bg0 p-t-10 p-b-10" style="background-image: url('./images/slide-06.jpg'); opacity:0.6; background-size:cover">
	<p style="color:orange;" font-weight: bolder; >Questions regarding our services or maybe a question regarding employment opportunities - reach out today! </p>
</section>

<?php
include('frontend/footer.php');
?>

</body>
</html>
