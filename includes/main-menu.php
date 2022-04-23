<header class="header-area">
<div class="header-top">
<div class="container">
<div class="row">
<div class="col-md-6">
<ul>
<li><i class="flaticon-message-closed-envelope"></i><?php echo htmlentities($main->email);?></li>
<li><i class="flaticon-location"></i><?php echo htmlentities($main->address);?></li>
<?php echo($admin_ip);?>
</ul>
</div>
<div class="col-md-6">

<?php
	// wish design by CHUKz!
	date_default_timezone_set('asia/colombo');

	$Hour = date('G');

	if ( $Hour >= 00 && $Hour <= 11 ) {
	    echo '<p class="text-right">Good Morning, Welcome to '. $main->title .'</p>';
	} else if ( $Hour >= 12 && $Hour <= 16 ) {
	    echo '<p class="text-right">Good Afternoon, Welcome to '. $main->title .'</p>';
	} else if ( $Hour >= 17 || $Hour <= 23 ) {
	    echo '<p class="text-right">Good Evening, Welcome to '. $main->title .'</p>';
	}
?>
</div>
</div>
</div>
</div>
<div class="header-navigation">
<div class="container">
<div class="row">
<div class="col-4 col-md-3">
<div class="logo-wrapper">
<a href="<?php echo htmlentities($main->domain);?>">
<img src="<?php echo htmlentities($main->domain);?>assets/img/<?php echo htmlentities($main->logo);?>" alt="">
</a>
</div>
</div>
<div class="col-8 col-md-7">
<div class="menu-wrapper">
<nav class="main-nav">

<input id="main-menu-state" type="checkbox" />
<label class="main-menu-btn" for="main-menu-state">
<span class="main-menu-btn-icon"></span>
</label>

<ul id="main-menu" class="sm sm-mint">
	<li><a href="<?php echo htmlentities($main->domain);?>"><i class="fa fa-home" aria-hidden="true"></i>  Home</a></li>
	<li><a href="<?php echo htmlentities($main->domain);?>about-us">About Us</a></li>
	<li><a href="<?php echo htmlentities($main->domain);?>service">Services</a></li>
	<li><a href="<?php echo htmlentities($main->domain);?>our-works">Our Works</a></li>
	<li><a href="<?php echo htmlentities($main->domain);?>blogs">Blog</a></li>
	<li><a href="<?php echo htmlentities($main->domain);?>contact">Contact Us</a> </li>
</ul>
</nav>
</div>
</div>
<div class="col-md-2">
<div class="contact-top-info">
<div class="contact-number">
<div class="icon">
<a href="tel:<?php echo htmlentities($main->number1);?>"> <i class="flaticon-telephone"></i></a>
</div>
<div class="text">
<span>Contact Us:</span>
<p><?php echo htmlentities($main->number1);?></p>
</div>
</div>
<div class="contact-social-media">
<ul class="social">
<li><a href="<?php echo htmlentities($main->fb_page);?>" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
<li><a href="<?php echo htmlentities($main->twitter);?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
<li><a href="<?php echo htmlentities($main->instagram);?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
<li><a href="<?php echo htmlentities($main->yt_channel);?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</header>