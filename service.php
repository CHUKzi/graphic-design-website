<?php 
require_once('includes/config.php'); 
require_once('includes/time-functions.php');
$pagenum = 3;
require_once('includes/views-functions.php');
include('includes/get-query/index-page.php');
include('includes/on-off.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo htmlentities($main->title);?> Services</title>
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
  z-index: 999; }

.inner-hero {
  background: url(<?php echo htmlentities($main->domain);?>assets/img/bg-image/<?php echo htmlentities($result_services_page_head->back_img);?>);
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

<div class="inner-hero">
<div class="container">
<div class="inner-hero-content">
<div class="page-tittle">
<h2><?php echo htmlentities($result_services_page_head->title);?></h2>
</div>
<nav aria-label="breadcrumb">
<ol class="breadcrumb bread2">
<li class="breadcrumb-item"><a href="<?php echo htmlentities($main->domain);?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
<li class="breadcrumb-item active" aria-current="page"><?php echo htmlentities($result_services_page_head->title);?></li>
</ol>
</nav>
</div>
</div>
</div>


<div class="service mar-top-minus">
<div class="container">
<div class="row">

<?php $sql = "SELECT * from our_services ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result_our_services)
{               ?>
<?php $no_services=''; ?>
<div class="col-md-4" data-aos="fade-up" data-aos-duration="1500" id="service_area">
<div class="single-service">
<div class="ss-icon">
<img src="<?php echo htmlentities($main->domain);?>assets/img/icon/<?php echo($result_our_services->icon);?>">
</div>
<div class="ss-content">
<a href="#">
<h2><?php echo htmlentities($result_our_services->title);?></h2>
</a>
<?php echo($result_our_services->description);?>
<a href="<?php echo($result_our_services->link);?>" target="_blank"> <span>Read More</span> <i class="flaticon-right-arrow"></i></a>
</div>
</div>
</div>
<?php $cnt=$cnt+1; }} else { $no_services='No result found';}?>
</div>
</div>
</div>


<?php if($cnt_blogs > 3)
{?>
<div class="blog">
<div class="container">
<div class="blog-top">
<h3>Our Recent Posts</h3>
<h2>Get Update Everyday</h2>
</div>
<div class="blog-slider owl-carousel owl-theme">
<?php $sql = "SELECT * from  blogs order by time DESC LIMIT 10";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result_blogs)
{               ?>
<?php $no_blogs=''; ?>
<div class="item">
<div class="single-blog">
<div class="sb-img">
<?php
$string = str_replace(' ', '-', $result_blogs->title);
$string = preg_replace("/[\s-]+/", " ", $string);
// Convert whitespaces and underscore to dash
$string = preg_replace("/[\s_]/", "-", $string);
?>
<a href="<?php echo htmlentities($main->domain);?>blog-details/?id=<?php echo htmlentities($result_blogs->id);?>&name=<?php echo $string ; ?>"> <img src="<?php echo htmlentities($main->domain);?>assets/img/blog/thumbnail/<?php echo htmlentities($result_blogs->thumbnail);?>" alt=""></a>
</div>
<div class="sb-text">
<ul>
<li>Tags: <?php echo htmlentities($result_blogs->tags);?></li>
</ul>
<a href="#">
<h3><?php echo mb_strimwidth($result_blogs->title , 0, 52, "...");?></h3>
</a>
<?php
  //date_default_timezone_set('asia/colombo'); 
  $curenttime=$result_blogs->time;
  $time_ago =strtotime($curenttime);
?>
<p>Posted: <?php echo timeAgo($time_ago);?></p>

<a href="<?php echo htmlentities($main->domain);?>blog-details/?id=<?php echo htmlentities($result_blogs->id);?>&name=<?php echo $string ; ?>">Learn More</a>
</div>
</div>
</div>
  <?php $cnt=$cnt+1; }} else { $no_blogs='No Blog Post found';}?>
  <?php echo htmlentities($no_blogs);?>
</div>
</div>
</div>
<?php } else {?>
  <!--disabled-->
<?php } ?>
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