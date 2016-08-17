<!doctype html>
 <html>
        <head>
<link rel="icon" href="favicon.png">
        <meta charset="UTF-8">
                <title>About Tom Hagerman</title>
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
	<?php
$array = unserialize(file_get_contents('biokbSJUBLiYIjPl47hqZaryFqG3xgRm8u0iLgE5iJZnzLWcRlCXhE5VCrPrGDxP7DsY2YbjozYQO3uydOP79Alf5qpobtFgAqXr0QIH7SOqSLjeJ8sh14npstV4tclUoxvV6KWRELFTwB07mvikD7GicuB5OJzwkGkt0nQT4ius5KN5Gy2NL0lBRpaIHvnfwVX4x6sPd3S0HgT7BdeGYzuM2ksc0pp80YKjzG3S0yDgZZ0S.txt'));
$i=0;
while($i<$array->getSize()) {
?>
<h2>About Tom Hagerman</h2>
<img src="img/image3.jpg"/>
<p><?=html_entity_decode($array[$i])?></p>
<?php
$i++;
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
</body>
</html>
