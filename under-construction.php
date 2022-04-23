<?php 
require_once('includes/config.php');
$pagenum = 11;
require_once('includes/views-functions.php');
include('includes/get-query/index-page.php');

$myip = $_SERVER['REMOTE_ADDR'];
$dbip = $result_check_ip->list;
$admin_ip = '';

if($result_web_on_or_off->is_active == 1){

} else {
    header("Location: index.php");

}
if($myip == $dbip){
	header("Location: index.php");
} else {
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/get-query/index-page.php'); ?>
<meta charset="utf-8">
<title><?php echo htmlentities($main->title);?> - Under Construction</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,400;1,700;1,900&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/jquery-ui.css">

<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

<link rel="stylesheet" href="assets/css/font-awosome.css">

<link rel="stylesheet" href="assets/flat-font/flaticon.css">

<link rel="stylesheet" href="assets/css/ticker.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/css/sm-core-css.css">
<link rel="stylesheet" href="assets/css/sm-mint.css">
<link rel="stylesheet" href="assets/css/sm-style.css">

<link rel="stylesheet" href="assets/css/aos.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="shortcut icon" type="image/png" href="assets/img/fav-icon.png">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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


<div class="commingsoon">
<div class="container">
<div class="c-logo">
<img src="<?php echo htmlentities($main->domain);?>assets/img/<?php echo htmlentities($main->logo_f);?>" alt="">
</div>
<div class="c-content">
<h1>This website is currently under construction <i style='font-size:74px' class='fas'>&#xf0ad;</i></h1>

<div class="social">
<h2>Follow Us:</h2>
<ul>
<li><a href="<?php echo htmlentities($main->fb_page);?>" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
<li><a href="<?php echo htmlentities($main->twitter);?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
<li><a href="<?php echo htmlentities($main->instagram);?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
<li><a href="<?php echo htmlentities($main->yt_channel);?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
</ul>
<br><br><h2 style="font-size: 20px;">IP : <?php $myip = $_SERVER['REMOTE_ADDR']; echo $myip; ?></h2>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.4.1.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/aos.js"></script>

<script src="assets/js/jquery-ui.js"></script>

<script src="assets/js/jquery.smartmenus.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.fancybox.min.js"></script>
<script src='assets/js/jquery.magnific-popup.min.js'></script>
<script src='assets/js/shuffle.js'></script>
<script src='assets/js/jquery.counterup.min.js'></script>
<script src='assets/js/waypoints.min.js'></script>

<script src="assets/js/theme.js"></script>

<?php
$page_id = $pagenum;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);
?>
<?php $total_page_views = total_views($conn, 1); ?>
</body>
</html>