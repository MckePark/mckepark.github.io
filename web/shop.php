<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shop: MckePark</title>
	<meta name="description" content="Shoe Store: MckePark">
	<meta name="author" content="Mckenna and Park">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

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
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    <!--style-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
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

$host = "localhost";
$name = "root";
$pass = "root";
$dbname = "mckepark";

$dbi = mysqli_connect($host, $name, $pass) 
		or die("I cannot connect to the database. Error :" . mysqli_error());
mysqli_select_db($dbi, $dbname);

$result = mysqli_query($dbi, "SELECT `id`, `name`, `price`, `stock`, `rating`, `paypal_link`, `img`, `description` FROM `shoes`");

while ($myrow = mysqli_fetch_array($result))
{
	$id 		= $myrow[0];
	$itemname 	= $myrow[1];
	$price 		= $myrow[2];
	$stock 		= $myrow[3];
	$rating 	= $myrow[4];
	$paypal_link= $myrow[5];
	$img 		= $myrow[6];
	$review 	= $myrow[7];

  	echo <<<HEREDOC
<div class="pure-u-1 pure-u-md-6-8 pure-u-lg-3-5">
	<div class="item pure-u-md-3-8 pure-u-lg-2-5">
		$itemname<br>
		$price<br>
		Stock: $stock<br>
		Rating: $rating
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