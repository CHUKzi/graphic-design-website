<?php 
require_once('includes/config.php'); 
require_once('includes/time-functions.php');
$pagenum = 7;
require_once('includes/views-functions.php');
include('includes/get-query/index-page.php');
include('includes/on-off.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title><?php echo htmlentities($main->title);?> Works & Projects</title>
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
  background: url(<?php echo htmlentities($main->domain);?>assets/img/bg-image/<?php echo htmlentities($result_our_work_page_head->back_img);?>);
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
<h2><?php echo htmlentities($result_our_work_page_head->title);?></h2>
</div>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo htmlentities($main->domain);?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
<li class="breadcrumb-item active" aria-current="page"><?php echo htmlentities($result_our_work_page_head->title);?></li>
</ol>
</nav>
</div>
</div>
</div>


<div class="portfolio">
<div class="container">
<div class="btn-group btn-group-toggle shuffleFilter psFilter psf-2" data-toggle="buttons">
<label class="btn active">
<input type="radio" name="shuffle-filter" value="all" checked="checked" />All Project
</label>

<?php $sql = "SELECT * from  category_list ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>
<label class="btn">
<input type="radio" name="shuffle-filter" value="<?php echo htmlentities($result->list);?>" /><?php echo htmlentities($result->list);?>
</label><?php $cnt=$cnt+1; }} ?>

</div>
<div class="row my-shuffle-container">
<?php $sql = "SELECT * from our_projects order by time DESC";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>
<?php $no_our_project=''; ?>
<div class="col-md-4 single-portfolio" data-groups='["<?php echo htmlentities($result->category);?>"]'>
<div class="aspect__inner asi-2" id="all_images">
<a data-fancybox="gallery" href="<?php echo htmlentities($main->domain);?>assets/img/portfolio/<?php echo htmlentities($result->thumbnail);?>">
<img src="<?php echo htmlentities($main->domain);?>assets/img/portfolio/<?php echo htmlentities($result->thumbnail);?>" alt="" />
</a>
</div>
</div><?php $cnt=$cnt+1; }} else { $no_our_project='No Post found';}?>
<?php echo $no_our_project;?>
<div class="col-1 Ssizer-element"></div>
</div>
</div>
</div>


<div class="contact-project">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="cp-content">
<h2>If You Have Any Project, Please
Feel Free To Contact Us</h2>
<a href="contact-us.html" class="btn-1"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a>
</div>
</div>
</div>
</div>
</div>

<?php if($cnt_feedback > 4)
{?>
<div class="client-feedback">
<div class="container-fluid c-fulid-max">
<div class="client-top">
<h3>Recent Feedbacks</h3>
<h2>Check Out Our Clients Feedbacks</h2>
</div>
<div class="client owl-carousel owl-theme client-1">
<?php $sql = "SELECT * from cl_feedback order by date DESC LIMIT 20";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result_our_feedback)
{               ?>
<?php $no=''; ?>

<?php if($result_our_feedback->is_delete == 0)
{?>
<div class="item">
<div class="single-client">
<div class="sc-info">
<div class="sc-img">
<img src="<?php echo htmlentities($main->domain);?>assets/img/icon/satisfaction/<?php echo htmlentities($result_our_feedback->satisfaction);?>.png" alt="">
</div>
<div class="sc-text">
<h4><?php echo mb_strimwidth($result_our_feedback->name , 0, 18, "...");?></h4>
<?php
  //date_default_timezone_set('asia/colombo'); 
  $curenttime=$result_our_feedback->date;
  $time_ago =strtotime($curenttime);
?>
<p>Posted:<i> <?php echo timeAgo($time_ago);?></i></p>
</div>
</div>
<i class="fas fa-quote-right"></i>
<p>“<?php echo($result_our_feedback->message);?>”</p>
<div class="sc-review">
<div class="rivews">
<ul>
<?php 
$names = array('<li><a href="#"><i class="fas fa-star"></i></a></li>');
foreach (range(1, $result_our_feedback->satisfaction) as $i) {
    foreach ($names as $name) {
        echo $name;
    }
}
?>
</ul>
</div>
</div>
</div>
</div>
<?php } else {?>
<?php } ?>
<?php $cnt=$cnt+1; }} else { $no='No result found';}?>
<?php echo htmlentities($no);?>
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