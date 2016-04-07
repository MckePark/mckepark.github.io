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
  <div class="pure-u-1 pure-u-md-1-8 pure-u-lg-1-5">
  </div>
  <div class="pure-u-1 pure-u-md-6-8 pure-u-lg-3-5">  
<?php

$host = "ec2-54-235-93-178.compute-1.amazonaws.com";
$dbname="d466i9u3q6eeak";
$user = "vkbkjawbiiomxk";
$pass = "Gwao6Z_ODfvYnOcrCbvE_jsCfp";

$dbconn = pg_connect("host=$host dbname=$dbname user=$user password=$pass")
  or die('Could not connect: ' . pg_last_error());

$temp = pg_query("INSERT INTO shoes (id, name, price, paypal_link, img, review) VALUES
(1, 'Classic Boat Shoes', '1000.00', '-----BEGIN PKCS7-----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-----END PKCS7-----', 'img/boat/1.jpg', 'These shoes don’t disappoint. I wear them every day. I’m pretty hard on shoes, but they stand up, and are so comfortable and always look great.'),
(2, 'Sporty Boat Shoes', '2000.00', '-----BEGIN PKCS7-----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-----END PKCS7-----', 'img/boat/2.jpg', 'Easy to break in and great out of the box. Definitely recommend. Easily the best casual deck show made!'),
(3, 'Modern Boat Shoes', '4000.00', '-----BEGIN PKCS7-----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-----END PKCS7-----', 'img/boat/3.jpg', 'The best, the original. Comfort is superior and the style (in my opinion) is excellent. I wear my Sperry’s everyday and they look pretty much the same as they did when I got them.');");


$query = "SELECT id, name, price, paypal_link, img, review FROM shoes";
$result = pg_query($query)
  or die('Query failed: ' . pg_last_error());

while ($row = pg_fetch_row($result))
{
  $id     = $row[0];
  $name     = $row[1];
  $price    = $row[2];
  $paypal_link= $row[3];
  $img    = $row[4];
  $review   = $row[5];

    echo <<<"HEREDOC"

  <div class="item pure-u-md-2-8 pure-u-lg-1-5">
    $name<br>
    $price<br>
    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="encrypted" value="$paypal_link">
      <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
  </div>
  <div class="pure-u-md-3-8 pure-u-lg-2-5">
    <img class="shop-img" id="img$id" src="$img">
  </div>
  <div class="pure-u-md-3-8 pure-u-lg-2-5" class="review">
    Customer Reviews: $review
  </div>

HEREDOC;
}
?>
</div>

<div class="pure-u-1 pure-u-md-1-8 pure-u-lg-1-5">
</div>


  <div class="footer l-box is-center pure-u-1 pure-u-md-1 pure-u-lg-1">
    Designed by Kyu and Luisa
</div>
</body>
</html>
