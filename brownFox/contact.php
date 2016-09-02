<?php
setlocale(LC_CTYPE, "en_US.UTF-8");
if($_POST['formSubmit'] == "Submit")
{
	if ($_POST['contactName']) $name=htmlentities($_POST['contactName']); //Need to sanitize input here
	else $name = htmlentities("(No name given)"); //Also cmd escape this
	if ($_POST['contactEmail']) $email=htmlentities($_POST['contactEmail']); //Need to sanitize input here
        else $email = "";
	if ($_POST['subject']) $subject=htmlentities($_POST['subject']); //Need to sanitize input here
        else $subject = htmlentities("(No subject given)"); //Also cmd escape this
	if ($_POST['message']) $message=htmlentities($_POST['message']); //Need to sanitize input here
        else $message = htmlentities("(No message given)"); //Also cmd escape this
	exec("echo \"From: " . escapeshellarg($name) . ", " . escapeshellarg($email) . "\\nMessage:\\n" . escapeshellarg($message) . "\" | mail -s \"Contact Request from " . escapeshellarg($name) . ": Subject: " . escapeshellarg($subject) . "\" connor.bray.ricks@gmail.com");
	header("Location: thankyou.html");
        exit;
}
?>
<!doctype html>
 <html>
 	<head>
<link rel="icon" href="favicon.png">
	<meta charset="UTF-8">
 		<title>Contact Tom Hagerman</title>
 		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<link rel="stylesheet" href="css/reset.css">
 		<link rel="stylesheet" href="css/main.css">
 		<link rel="stylesheet" href="css/layout.css">
 		<link rel="stylesheet" href="css/navigation.css">
 		<link rel="stylesheet" href="css/components.css">
 	</head>

<body>
<div class="container">
  <div class="row">
    <nav role="navigation">
      <span class="entypo-menu" id="toggle-menu"></span>
    <div class="logo">
      <span class="entypo-s"></span><a style="display:inline-flex;" id="HOMELINK" href="index.html">Tom Hagerman</a>
    </div>
      <ul>
        <li><a href="bio.php">About</a></li>
        <li ><a href="store.php">Store</a>
        </li>
        <li><a href="shows.php">Shows</a></li>
        <li><a href="content.php">Media</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="index.html">Home</a></li>
      </ul>
    </nav>
  </div>
<br/>
  <div class="media-wrapper">


<form action="contact.php" method="post">
<p> Name: *</p>
<input type="text" name="contactName" maxlength="50" placeholder="Name" required/> 
<p> Email for Reply: </p>
<input type="email" name="contactEmail" maxlength="50" placeholder="Email" />
<p> Subject:* </p>
<input type="text" name="subject" maxlength="50" placeholder="Subject" required/>
<p> Message:* </p>
<textarea type="text" name="message" cols="42" rows="6" placeholder="Your Message" required></textarea><br/>
<input type="submit" name="formSubmit"/><br/>
</form>

 </div>
<br/>
<footer class="media-wrapper">
      <p class="copyright">&copy; 2016 Tom Hagerman</p>
    </footer>
    <!-- Add javascript here -->
    <script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/slideshow.js"></script>
  </body>
 </html>
