<!DOCTYPE html>
<html>
<head>
  <title>MckePark</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Shoe Store: MckePark">
<meta name="author" content="Mckenna and Park">

<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/stylesheets/main.css" />
<link rel="stylesheet" href="example.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
</head>

<body>
  <nav class="navbar navbar-default navbar-static-top navbar-inverse">
  <div class="container">
    <ul class="nav navbar-nav">
      <li>
        <a href="/index.html"><span class="glyphicon glyphicon-home"></span> Home</a>
      </li>
      <li class="active">
        <a href="/shop.php"><span class="glyphicon glyphicon-user"></span> Shop</a>
      </li>
      <li>
        <a href="/about-us.html"><span class="glyphicon glyphicon-user"></span> About Us</a>
      </li>
      <li>
        <a href="/contact.php"><span class="glyphicon glyphicon-user"></span> Contact</a>
      </li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="navbar-right">
        <a href="/index.html"><span class="glyphicon glyphicon-book"></span> MckePark</a>
      </li>
    </ul>
  </div>
</nav>
<script src="shop.js" type="text/javascript"></script>

<div class="pure-g content">
<?php

$host = "ec2-54-235-93-178.compute-1.amazonaws.com";
$dbname="d466i9u3q6eeak";
$user = "vkbkjawbiiomxk";
$pass = "Gwao6Z_ODfvYnOcrCbvE_jsCfp";

$dbconn = pg_connect("host=$host dbname=$dbname user=$user password=$pass")
  or die('Could not connect: ' . pg_last_error());

$query = "SELECT id, name, price, paypal_link, img, review FROM shoes";
$result = pg_query($query)
  or die('Query failed: ' . pg_last_error());

while ($row = pg_fetch_row($result))
{
  $id         = $row[0];
  $name       = $row[1];
  $price      = $row[2];
  $paypal_link= $row[3];
  $img        = $row[4];
  $review     = $row[5];

    echo <<<"HEREDOC"

  <div class="item pure-u-md-1 pure-u-lg-1" style="width:300px; float:center; margin: 0 auto;">
    <img class="shop-img" id="img$id" src="$img"><br>
    $name<br>
    $price<br>
    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="encrypted" value="$paypal_link">
      <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
    <br>
    <div class="review" id="review$id" sytle="color:#444">
    Customer Reviews: $review
    </div>
    <br>
  </div>

HEREDOC;
}
?>
</div>

<div class="footer l-box is-center pure-u-1 pure-u-md-1 pure-u-lg-1">
  Designed by Kyu and Luisa
</div>
</div>
</body>
</html>
