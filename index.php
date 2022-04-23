<?php 
require_once('includes/config.php'); 
require_once('includes/time-functions.php');
$pagenum = 1;
require_once('includes/views-functions.php');
include('includes/get-query/index-page.php');
include('includes/on-off.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/get-query/index-page.php'); ?>
<meta charset="utf-8">
<title><?php echo htmlentities($main->title);?> - Official Home Page</title>
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

<link rel="stylesheet" media="screen" href="<?php echo htmlentities($main->domain);?>assets/css/css-alex-lanka/style.css">

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
#particles-js{
  background-image: url('<?php echo htmlentities($main->domain);?>assets/img/bg-image/<?php echo htmlentities($resulthead->back_img);?>');
}
.work {
  background: url(<?php echo htmlentities($main->domain);?>assets/img/bg-image/<?php echo htmlentities($resultwork->back_img);?>);
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

<div id="particles-js">
<div class="hero-content-re">
<h1><?php echo nl2br($resulthead->title);?></h1>
</div>
</div>

<?php if($resultboxes->if_hide == 1)
{?>
<div class="feature-area">
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="single-feature" data-aos="fade-up" data-aos-duration="1500">
<div class="sf-icon">
<img src="assets/img/icon/<?php echo htmlentities($resultboxes->icon1);?>" alt="">
</div>
<div class="sf-text">
<h3><?php echo htmlentities($resultboxes->title);?></h3>
<p><?php echo htmlentities($resultboxes->description);?></p>
<a href="<?php echo htmlentities($resultboxes->link);?>">Learn More <i class="flaticon-right-arrow"></i> </a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="single-feature" data-aos="fade-up" data-aos-duration="2500">
<div class="sf-icon">
<img src="assets/img/icon/<?php echo htmlentities($resultboxes->icon2);?>" alt="">
</div>
<div class="sf-text">
<h3><?php echo htmlentities($resultboxes->title2);?></h3>
<p><?php echo htmlentities($resultboxes->description2);?></p>
<a href="<?php echo htmlentities($resultboxes->link2);?>">Learn More <i class="flaticon-right-arrow"></i> </a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="single-feature" data-aos="fade-up" data-aos-duration="3000">
<div class="sf-icon">
<img src="assets/img/icon/<?php echo htmlentities($resultboxes->icon3);?>" alt="">
</div>
<div class="sf-text">
<h3><?php echo htmlentities($resultboxes->title3);?></h3>
<p><?php echo htmlentities($resultboxes->description3);?></p>
<a href="<?php echo htmlentities($resultboxes->link3);?>">Learn More <i class="flaticon-right-arrow"></i> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php } else {?>
	<!--disabled-->
<?php } ?>

<div class="container">
<div class="row">
<br>
<br>
<center><h4><?php echo nl2br($resulthead->introduction);?></h4></center>
</div>
</div>
	

<?php if($result_about->if_hide == 1)
{?>
<div class="team">
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="team-img">
<img src="<?php echo htmlentities($main->domain);?>assets/img/team/<?php echo htmlentities($result_about->back_img);?>" alt="">
</div>
</div>
<div class="col-md-6">
<div class="team-text">
<h3><?php echo htmlentities($result_about->title);?></h3>
<h2><?php echo htmlentities($result_about->subtitle);?></h2>
<p><?php echo ($result_about->introduction);?></p>
<a href="<?php echo htmlentities($main->domain);?>about-us" class="btn-1">Learn More</a>
</div>
</div>
</div>
</div>
</div>
<?php } else {?>
	<!--disabled-->
<?php } ?>

<div class="service">
<div class="container">
<div class="service-top">
<h3><?php echo htmlentities($result_services_page_head->title);?></h3>
<h2>This is <?php echo htmlentities($result_services_page_head->title);?></h2>
</div>
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
<div class="col-md-4" data-aos="fade-up" data-aos-duration="1500">
<div class="single-service">
<div class="ss-icon">
<img src="<?php echo htmlentities($main->domain);?>assets/img/icon/<?php echo($result_our_services->icon);?>">
</div>
<div class="ss-content">
<a href="<?php echo htmlentities($main->domain);?>service">
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

<div class="service">
<div class="container">
<div class="service-top">
<h3><?php echo htmlentities($result_our_work_page_head->title);?></h3>
<h2>This is <?php echo htmlentities($result_our_work_page_head->title);?></h2>
<p></p>
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
<?php $sql = "SELECT * from our_projects order by time DESC LIMIT 10";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>
<?php $no_project=''; ?>
<div class="col-md-4 single-portfolio" data-groups='["<?php echo htmlentities($result->category);?>"]'>
<div class="aspect__inner asi-2">
<a data-fancybox="gallery" href="<?php echo htmlentities($main->domain);?>assets/img/portfolio/<?php echo htmlentities($result->thumbnail);?>">
<img src="<?php echo htmlentities($main->domain);?>assets/img/portfolio/<?php echo htmlentities($result->thumbnail);?>" alt="" />
</a>
</div>
</div><?php $cnt=$cnt+1; }} else { $no_project='No Post found';}?>
<?php echo $no_project;?>

<div class="col-1 Ssizer-element"></div>
</div>
</div>
<a href="<?php echo htmlentities($main->domain);?>our-works" class="btn-1"><i class="fa fa-eye" aria-hidden="true"></i> view more</a>
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


<?php if($resultwork->if_hide == 1)
{?>
<div class="work" data-aos="fade-up" data-aos-duration="3000" id="main_boxes_3">
<div class="container">
<div class="row align-items-center">
<div class="col-md-6">
<div class="work-progress">
<h3><?php echo htmlentities($resultwork->title);?></h3>
<h2><?php echo htmlentities($resultwork->subtitle);?></h2>
<p><?php echo ($resultwork->introduction);?></p>
<a href="<?php echo htmlentities($main->domain);?>our-works" class="btn-2">Lear More</a>
</div>
</div>
<div class="col-md-5 offset-md-1">
<div class="single-work">
<h2>01</h2>
<h3><?php echo htmlentities($resultboxes->title);?></h3>
<p><?php echo htmlentities($resultboxes->description);?></p>
</div>
<div class="single-work">
<h2>02</h2>
<h3><?php echo htmlentities($resultboxes->title2);?></h3>
<p><?php echo htmlentities($resultboxes->description);?></p>
</div>
<div class="single-work">
<h2>03</h2>
<h3><?php echo htmlentities($resultboxes->title3);?></h3>
<p><?php echo htmlentities($resultboxes->description);?></p>
</div>
</div>
</div>
</div>
</div>
<?php } else {?>
	<!--disabled-->
<?php } ?>

<?php if($result_story->if_hide == 1)
{?>
<div class="history" id="history_area">
<div class="container">
<div class="row align-items-center">
<div class="col-md-5">
<div class="history-tittle">
<h3><?php echo htmlentities($result_story->title);?></h3>
<h2><?php echo htmlentities($result_story->subtitle);?></h2>
</div>
<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Story</a>
</li>
<li class="nav-item">
<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">History</a>
</li>
<li class="nav-item">
<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Today</a>
</li>
</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<div class="history-content">
<h3>Our Story</h3>
<p><?php echo ($result_story->story);?></p>
<a href="<?php echo htmlentities($main->domain);?>about-us" class="btn-1">Learn More</a>
</div>
</div>
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<div class="history-content">
<h3>Our History</h3>
<p><?php echo ($result_story->history);?></p>
<a href="<?php echo htmlentities($main->domain);?>about-us" class="btn-1">Learn More</a>
</div>
</div>
<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
<div class="history-content">
<h3>Today</h3>
<p><?php echo ($result_story->today);?></p>
<a href="<?php echo htmlentities($main->domain);?>about-us" class="btn-1">Learn More</a>
</div>
</div>
</div>
</div>
<div class="col-md-6 offset-md-1">
<div class="history-img">
<img src="<?php echo htmlentities($main->domain);?>assets/img/about/<?php echo htmlentities($result_story->right_img);?>" alt="">
</div>
</div>
</div>
</div>
</div>
<?php } else {?>
	<!--disabled-->
<?php } ?>


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
<script src="<?php echo htmlentities($main->domain);?>assets/js-alex-lanka/particles.js"></script>
<script src="<?php echo htmlentities($main->domain);?>assets/js-alex-lanka/app.js"></script>

<?php echo ($main->script_f);?>
</body>
</html>