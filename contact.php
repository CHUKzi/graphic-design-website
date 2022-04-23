<?php 
require_once('includes/config.php');
require_once('includes/functions.php');
$pagenum = 8;
require_once('includes/views-functions.php');
require_once('includes/get-user-details.php');
include('includes/get-query/index-page.php');
require_once('includes/send-contact-email.php');
include('includes/on-off.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title><?php echo htmlentities($main->title);?> - Contact</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,400;1,700;1,900&amp;display=swap" rel="stylesheet">


<link rel="stylesheet" href="<?php echo htmlentities($main->domain);?>assets/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo htmlentities($main->domain);?>assets/css/jquery-ui.css">

<link rel="stylesheet" href="<?php echo htmlentities($main->domain);?>assets/css/jquery.fancybox.min.css">

<link rel="stylesheet" href="<?php echo htmlentities($main->domain);?>assets/css/font-awosome.css">

<link rel="stylesheet" href="<?php echo htmlentities($main->domain);?>assets/flat-font/flaticon.css">

<link rel="stylesheet" href="<?php echo htmlentities($main->domain);?>assets/css/ticker.min.css">

<link rel="stylesheet" href="<?php echo htmlentities($main->domain);?>assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo htmlentities($main->domain);?>assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="<?php echo htmlentities($main->domain);?>assets/css/sm-core-css.css">
<link rel="stylesheet" href="<?php echo htmlentities($main->domain);?>assets/css/sm-mint.css">
<link rel="stylesheet" href="<?php echo htmlentities($main->domain);?>assets/css/sm-style.css">

<link rel="stylesheet" href="<?php echo htmlentities($main->domain);?>assets/css/aos.css">
<link rel="stylesheet" href="<?php echo htmlentities($main->domain);?>assets/css/animate.min.css">
<link rel="stylesheet" href="<?php echo htmlentities($main->domain);?>assets/css/magnific-popup.css">

<link rel="stylesheet" href="<?php echo htmlentities($main->domain);?>assets/css/style.css">

<link rel="shortcut icon" type="image/png" href="<?php echo htmlentities($main->domain);?>assets/img/<?php echo htmlentities($main->icon);?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php echo ($main->script);?>

<style>
div#preloader {
  background: #ffffff url("<?php echo htmlentities($main->domain);?>assets/img/<?php echo htmlentities($main->looder);?>") no-repeat scroll center center;
  height: 100%;
  left: 0;
  overflow: visible;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 999; 
}
</style>
</head>
<body>

<div id="preloader"></div>

<!--==============main-menu==============-->
<?php 
include('includes/contact-us-icon.php');
include('includes/main-menu.php');
?>

<div class="contact-box">
<div class="container">
<div class="cb-top">
<h2>Drop Us A Message Now</h2>
<p><?php echo htmlentities($main->contact_info);?></p>
</div>
<?php if($result_tap == 1)
{?>
<div class="note"><center><p><?php if (!empty($errors)) {echo '<div style="color:red; background-color: #FFD2D2;">';echo '<b>There were error(s) on your message.</b><br>';echo '</div>';foreach ($errors as $error) {echo '<div class="warning">';echo '- ' . $error . '<br>';echo '</div>';}}echo '<br>';?><?php echo '<div style="background-color: #98FB96; font-weight: bold;">';echo "$msg";echo '</div><br/>';?></p></center>
</div>
<?php } else {?>
<?php } ?>

<div class="row">
<div class="col-md-10 offset-md-1">
<div class="contact-information">
<form method="post" data-toggle="validator" action="<?php echo htmlentities($main->domain);?>contact">
<div class="row">
<div class="form-group cfdb1 col-md-6">
<input type="text" class="form-control cp1" name="name" placeholder="Your Name*" <?php echo 'value="' . $name . '"'; ?>>
</div>
<div class="form-group cfdb1 col-md-6">
<input type="text" class="form-control cp1" name="email" placeholder="Your Email Address*" <?php echo 'value="' . $email . '"'; ?>>
</div>
<div class="form-group cfdb1 col-md-6">
<input type="number" class="form-control cp1" name="phone_number" placeholder="Your Phone Number*" <?php echo 'value="' . $phone_number . '"'; ?>>
</div>
<div class="form-group cfdb1 col-md-6">
<input type="text" class="form-control cp1" name="subject" placeholder="Your Message Brief*" <?php echo 'value="' . $subject . '"'; ?>>
</div>
<div class="form-group cfdb1 col-md-12">
<textarea rows="8" class="form-control cp1" name="message" placeholder="Your Message Details*"><?php echo "$message"; ?></textarea>
</div>
<button class="btn-1" type="submit" name="submit">Submit Now</button>
<div class="col-md-12 text-center">
							        
<div class="cf-msg" style="display: none;"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>


<div class="contact-info">
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="single-info">
<div class="sf-icon">
<i class="fas fa-mobile-alt"></i>
</div>
<div class="si-text">
<h2>Phone Number</h2>

<p><?php echo htmlentities($main->number1);?></p>
<p><?php echo htmlentities($main->number2);?></p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="single-info">
<div class="sf-icon">
<i class="flaticon-message-closed-envelope"></i>
</div>
<div class="si-text">
<h2>Email Us Now</h2>
<p><?php echo htmlentities($main->email);?></p>
<p><?php echo htmlentities($main->email_2);?></p>
<p></p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="single-info">
<div class="sf-icon">
<i class="flaticon-location"></i>
</div>
<div class="si-text">
<h2>Our Address</h2>
<?php
	$string = str_replace(',', '<br/>', $main->address);
?>
<p><?php echo ($string);?></p>
</div>
</div>
</div>
</div>
</div>
</div>

<!--=============footer==============-->
<?php include('includes/footer.php'); ?>


<script data-cfasync="false" src="<?php echo htmlentities($main->domain);?>assets/js/cloudflare-static/email-decode.min.js"></script><script src="<?php echo htmlentities($main->domain);?>assets/js/jquery-3.4.1.min.js"></script>

<script src="<?php echo htmlentities($main->domain);?>assets/js/bootstrap.min.js"></script>

<script src="<?php echo htmlentities($main->domain);?>assets/js/aos.js"></script>

<script src="<?php echo htmlentities($main->domain);?>assets/js/jquery-ui.js"></script>

<script src="<?php echo htmlentities($main->domain);?>assets/js/jquery.smartmenus.js"></script>

<script src="<?php echo htmlentities($main->domain);?>assets/js/owl.carousel.min.js"></script>

<script src="<?php echo htmlentities($main->domain);?>assets/js/jquery.fancybox.min.js"></script>
<script src='<?php echo htmlentities($main->domain);?>assets/js/jquery.magnific-popup.min.js'></script>
<script src='<?php echo htmlentities($main->domain);?>assets/js/shuffle.js'></script>
<script src='<?php echo htmlentities($main->domain);?>assets/js/jquery.counterup.min.js'></script>
<script src='<?php echo htmlentities($main->domain);?>assets/js/waypoints.min.js'></script>

<script src="<?php echo htmlentities($main->domain);?>assets/js/theme.js"></script>
<?php echo ($main->script_f);?>
</body>

</html>