<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shop: MckePark</title>
	<meta name="description" content="Shoe Store: MckePark">
	<meta name="author" content="Mckenna and Park">
	<link rel="stylesheet" href="//yui.yahooapis.com/pure/0.6.0/pure-min.css">

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if lte IE 8]>
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
  
<![endif]-->
<!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="example.css">
    <!--<![endif]-->
<!--[if gt IE 8]><!-->
  
    <link rel="stylesheet" href="//yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    <!--style-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="shop.js" type="text/javascript"></script>

<!--<![endif]-->
</head>

<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">MckePark</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="index.html" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item pure-menu-selected"><a href="shop.html" class="pure-menu-link">Shop</a></li>
            <li class="pure-menu-item"><a href="about-us.html" class="pure-menu-link">About Us</a></li>
            <li class="pure-menu-item"><a href="contact.html" class="pure-menu-link">Contact</a></li>
        </ul>
    </div>
</div>
<div class="pure-g content">
	<div class="pure-u-1 pure-u-md-1-8 pure-u-lg-1-5">
	</div>
	<div class="pure-u-1 pure-u-md-6-8 pure-u-lg-3-5">
		
<?php

$host = "ec2-54-235-93-178.compute-1.amazonaws.com";
$dbname = "d466i9u3q6eeak";
$user = "vkbkjawbiiomxk";
$pass = "Gwao6Z_ODfvYnOcrCbvE_jsCfp";

$dbconn = pg_connect("host=$host dbname=$dbname user=$user password=$pass")
	or die('Could not connect: ' . pg_last_error());

$query = "SELECT id, name, price, paypal_link, img, review FROM shoes";
$result = pg_query($query)
	or die('Query failed: ' . pg_last_error());

while ($row = pg_fetch_row($result))
{
	$id 		= $row[0];
	$name 		= $row[1];
	$price 		= $row[2];
	$paypal_link= $row[3];
	$img 		= $row[4];
	$review 	= $row[5];

  	echo <<<"HEREDOC"
<div class="pure-u-1 pure-u-md-6-8 pure-u-lg-3-5">
	<div class="item pure-u-md-3-8 pure-u-lg-2-5">
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
</div>
<div class="pure-u-md-2-8 pure-u-lg-1-5" id="text$id">
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
</div>
</body>
</html>