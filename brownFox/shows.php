<!doctype html>
 <html>
  <head>
    <link rel="icon" href="favicon.png">
	<title>Shows With Tom Hagerman</title>
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
$array = unserialize(file_get_contents('showsEcGCD2JbBWBwaa3t30CGOq523lKm3YcZ5VsL8T2Gumc2sqtf4H3YlBtCjJVYZjcwOfgXEqVwUuwfvn6prnWBlEGlHJTUeuwu9DjEFU9lzx6Mdb9Tn8AtkNv8LKsu3hiL7OdB9Q7qVX09iL893Vfe8D5pLegz6rZqCIfktY7cNMOE22izNa4VNQXath4awAiZCRxv35vGEyLLSiLtKORjEln9yRs6w97g2arTUzmI7Ul.txt'));
$i=$array->getSize()-1;
while($i>=0) {
if($array[$i]) {
?>
<p><strong style="font-weight: bold;font-size: 125%; margin:.25em;line-height:125%;"><?=html_entity_decode($array[$i])?></strong><br/><?=html_entity_decode($array[$i-1])?><br/><button onclick="location.href='<?=html_entity_decode($array[$i-2])?>'">Purchase Tickets Here! </button></p><br/>
<?php
}
$i-=3;
}
?>
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
