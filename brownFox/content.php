<!doctype html>
 <html>
  <head>
<link rel="icon" href="favicon.png">
    <title>Media By Tom Hagerford</title>
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
      <span class="entypo-s"></span><a style="display:inline-flex;" href="index.html">Tom Hagerman</a>
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
<!-- Add header here-->
    <div class="media-wrapper">
	<?php 
		$array = unserialize(file_get_contents('contentGvIqbi1hPMMDOjsd2OR7fyJHonTh8WtRhvTJsSzuVgdAuDvkOB2a2QwuUPiYFOQosOPPpw4lsAXZrUP1mNNxbRUiI2TZIvjaD1b6bNwdY3fNWniCWwuWryAAB0E8UiqKxwrb65xNQMg10pHMwVyHhKdavuzgpAH5JFdvPyE6BPOsTsNXazyjlhKGVvX3Rfq2ieVvFW3Jg32BM10CfQJP8lswIU689J3e6v8R45aEAy.txt'));
		$i=$array->getSize()-1;
		while($i>=0) {
		if($array[$i]) {
	?>
	<div class="video-wrapper">
        	<iframe width="420" height="315" src="<?=html_entity_decode($array[$i])?>" frameborder="0" allowfullscreen></iframe>
	</div>
<br/>
	<?php
		}
			$i--;
		}
	?>
    </div>
    <footer>
      <p class="copyright">&copy; 2016 Tom Hagerman</p>
    </footer>
    <!-- Add javascript here -->
    <script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/slideshow.js"></script>
  </body>
 </html>
