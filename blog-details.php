<?php 
require_once('includes/config.php');
require_once('includes/functions.php');
$pagenum = 6; 
require_once('includes/time-functions.php');
require_once('includes/views-functions.php');
include('includes/get-query/index-page.php');
include('includes/on-off.php');

if(isset($_GET['id']) || ($_GET["name"])) 
    {       
        if (empty($_GET['id'])) {
            header( "Location: ../" );
        }

        else
        {
        if (empty($_GET['name'])) {
            header( "Location: ../" );
        }
        else
        {
        $blog=$_GET['id'];
        $get_name=$_GET['name'];
        $name = str_replace('/','',$get_name);
        $name_title = str_replace('-',' ',$name);
        }
        
        }
    }
if (empty($blog)) {
    header( "Location: 404.php" );
} 

if (empty($name)) {
    header( "Location: 404.php" );
} 
    $sql = "SELECT * from blogs where id = '$blog'";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $result=$query->fetch(PDO::FETCH_OBJ);
    $hms=$query->rowCount();
    $cnt=1;

if($hms == 0)
                {
 
header( "Location: 404.php" );

 } else {
 	require_once('includes/post-comments.php');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE blogs SET views = views+1 WHERE id = '$blog'";
    $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<title><?php echo $result_blogs->title;?> | Blogs | <?php echo htmlentities($main->title);?></title>
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
  background: url(<?php echo htmlentities($main->domain);?>assets/img/bg-image/<?php echo htmlentities($result_blogs_page_head->back_img);?>);
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
<h2>Blog "<?php echo mb_strimwidth($result_blogs->title , 0, 52, "...");?>"</h2>
</div>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo htmlentities($main->domain);?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Blog</li>
</ol>
</nav>
</div>
</div>
</div>
<?php if($result_tap == 1)
{?>
<div class="note"><center><p><?php if (!empty($errors)) {echo '<div style="color:red; background-color: #FFD2D2;">';echo '<b>There were error(s) on your comment.</b><br>';echo '</div>';foreach ($errors as $error) {echo '<div class="warning">';echo '- ' . $error . '<br>';echo '</div>';}}echo '<br>';?><?php echo '<div style="background-color: #98FB96; font-weight: bold;">';echo "$msg";echo '</div>';?></p></center>
</div>
<?php } else {?>
<?php } ?>

<div class="blog-page">
<div class="container">
<div class="row">
<div class="col-md-4 order-md-1 order-2">

<div class="blog-sidebar left">
<div class="search-box">
<h3>Search Blog:</h3><br>
<form action="<?php echo htmlentities($main->domain);?>blog/" method="GET">
<div class="input-group">
<span class="fa fa-search"></span>
<input type="text" class="form-control" name="search" value="" placeholder="Enter your keywords....." required>
<div class="input-group-append">
<button class="btn btn-outline-secondary" type="submit"><i class="flaticon-right-arrow"></i></button>
</div>
</div>
</form>
</div>
<?php include('includes/left-blogs.php');?>

<div class="col-md-8 order-md-2 order-1">
<div class="single-bloge-post">
<!--<a href="">-->
<div class="single-p-img">
<img src="<?php echo htmlentities($main->domain);?>assets/img/blog/thumbnail/<?php echo htmlentities($result_blogs->thumbnail);?>" alt="">
</div>
<!--</a>-->
<div class="s-bp-details">
<div class="sbp-img">
<img src="<?php echo htmlentities($main->domain);?>assets/img/<?php echo htmlentities($main->icon);?>" alt="">
</div>
<div class="sbp-text">
<h5><?php echo htmlentities($main->title);?></h5>
<?php
//date_default_timezone_set('asia/colombo'); 
$curenttime=$result_blogs->time;
$time_ago =strtotime($curenttime);
?>
<p>Posted: <?php echo timeAgo($time_ago);?></p>
</div>
<div class="sbp-text">
<ul>
<li><i class="fa fa-eye" aria-hidden="true"></i> Views: <?php echo htmlentities($result_blogs->views);?></li>
</ul>
</div>
<div class="sbp-text">
<ul>
<li><i class="fa fa-tag" aria-hidden="true"></i> Tags: <?php echo htmlentities($result_blogs->tags);?>
</li>
</ul>
</div>
</div>
<div class="blog-content">
<h2><?php echo htmlentities($result_blogs->title);?></h2>
<hr>
<?php echo($result_blogs->description);?>
</div>
<div class="blog-share">
<div class="bs-icon">
<p>Share Now:</p>
<ul class="social">
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
</ul>
</div>
<div class="bs-tag">
<ul>
<li><i class="fa fa-tag" aria-hidden="true"></i> Tags: <?php echo htmlentities($result_blogs->tags);?></li>
</ul>
</div>
</div>

<?php if($result_blogs->if_hide_cmt == 1)
{?>
<div class="comment-box">
<h2>Leave a comment</h2>
<?php
$string = str_replace(' ', '-', $result_blogs->title);
$string = preg_replace("/[\s-]+/", " ", $string);
// Convert whitespaces and underscore to dash
$string = preg_replace("/[\s_]/", "-", $string);
?>
<form id="cf" action="<?php echo htmlentities($main->domain);?>blog-details/?id=<?php echo htmlentities($result_blogs->id);?>&name=<?php echo $string ; ?>" method="POST" data-toggle="validator">
<div class="row">
<div class="form-group cfdb1 col-md-6">
<input type="text" class="form-control cp1" name="name" placeholder="Name" <?php echo 'value="' . $name . '"'; ?>>
</div>
<div class="form-group cfdb1 col-md-6">
<input type="text" class="form-control cp1" name="email" placeholder="Email" <?php echo 'value="' . $email . '"'; ?>>
</div>
<div class="form-group cfdb1 col-md-12">
<textarea rows="8" class="form-control cp1" name="comment" placeholder="Comment"><?php echo "$comment"; ?></textarea>
</div>
</div>
<?php if($result_tap == 1)
{?>
<div class="note"><center><p><?php if (!empty($errors)) {echo '<div style="color:red; background-color: #FFD2D2;">';echo '<b>There were error(s) on your comment.</b><br>';echo '</div>';foreach ($errors as $error) {echo '<div class="warning">';echo '- ' . $error . '<br>';echo '</div>';}}echo '<br>';?><?php echo '<div style="background-color: #98FB96; font-weight: bold;">';echo "$msg";echo '</div><br/>';?></p></center>
</div>
<?php } else {?>
<?php } ?>
<button name="submit" type="submit" class="cont-sent"><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit</button>
</form>


<div class="comment">
<?php 
$sql ="SELECT * from comments where post_id = '$blog'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$bg=$query->rowCount();
?>
<h2>Comments (<?php echo htmlentities($bg);?>)</h2>

<?php $sql = "SELECT * from comments where post_id = '$blog' order by time DESC";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result_cmt)
{               ?>
<?php $no_cmt=''; ?>

<div class="single-comment s-comment-2">
<div class="single-comment-img">
<img src="<?php echo htmlentities($main->domain);?>assets/img/blog/<?php echo htmlentities($result_cmt->img);?>" alt="">
</div>
<div class="single-comment-text">
<h3><?php echo htmlentities(mb_strimwidth($result_cmt->name, 0, 18, "..."));?></h3>
<?php
	//date_default_timezone_set('asia/colombo'); 
	$curenttime=$result_cmt->time;
	$time_ago =strtotime($curenttime);
?>
<small>Posted: <?php echo timeAgo($time_ago);?></small>

<?php if($result_cmt->is_delete == 1)
{?>
<p style="color:red;"><i>This comment has been deleted BY Admin</i></p>
<?php } else {?>

<?php 
$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
$comment2 = (htmlentities($result_cmt->comment));
$comment = str_replace(array("\n","\n"),'<br>', $comment2);
 ?>
<p><?php 
if(preg_match($reg_exUrl, $comment, $url)) {
       echo preg_replace($reg_exUrl,'<a href="'. $url[0] .'" target="_blank">'. $url[0] .'</a>', $comment);
} else {
       echo $comment;
}
?></p>
<?php } ?>
</div>
</div>
<?php $cnt=$cnt+1; }} else {$no_cmt='<center><p>Be the first to comment.</p></center>'; } ?>
<?php echo $no_cmt;?>
<?php } else {?>
<br><br><center><p style="color:red;">Comments is disabled for this Post.</p></center>
<?php } ?>

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
<?php }; ?>