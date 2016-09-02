<!doctype html>
 <html>
        <head>
<link rel="icon" href="favicon.png">
                <title>Store @ Tom Hagerman</title>
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
                <div class="media-wrapper">
    <div class="store-items"><br/>
<p style="text-align:center;">
<?php
$array = unserialize(file_get_contents('storeVCtStSWW6JGEEpJRh5C4CvlLHAS8N1F8JcaSb3VNNtDaf9D4xuBGWk1nGJR674UnWw75VqHSbyucmymDkqBqORVZbq3cmO4PCCli59SeHIUU8JZIxtVV7pGx4NnuCGboPjd4Ebisy2h1XvmfX8b7pY2JRwCvCMnNpe4CsFnjcIs2rSBFHNGB7mLSDX05I454iPZVhDPNf6Q5CbXosGKhJDsc7oz9ODCaejpHVuf3YvJ.txt'));
$i=$array->getSize()-1;
while($i>=0) {
if($array[$i]) {
?>
<a href="<?=html_entity_decode($array[$i])?>">
    <img src="<?=html_entity_decode($array[$i-1])?>" class="store-image" /><br/>
    <span style="text-decoration:none; color:#FFF4E1;" class="store-item-title"><?=html_entity_decode($array[$i-2])?></span><br/>
  </a> <br/>
<?php
}
$i-=3;
}
?>
</p>
<br/>
</div>
  </div>
                <footer class="media-wrapper">
                        <p class="copyright">&copy; 2016 Tom Hagerman</p>
                </footer>
                <!-- Add javascript here -->
                <script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>
                <script src="js/main.js"></script>
                <script src="js/slideshow.js"></script>
        </body>
 </html>
