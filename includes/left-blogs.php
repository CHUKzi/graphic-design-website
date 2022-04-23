<div class="bs-post-wrapper">
<h3>New Top 20:</h3>
<?php $sql = "SELECT * from  blogs order by time DESC LIMIT 20";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result_blogs_left)
{               ?>
<?php $no_blogs_left=''; ?>
<div class="single-pb-post">
<div class="s-pbp-img">
<img src="<?php echo htmlentities($main->domain);?>assets/img/blog/thumbnail/<?php echo htmlentities($result_blogs_left->thumbnail);?>" alt="">
</div>
<div class="s-pbp-text">
<?php
//date_default_timezone_set('asia/colombo'); 
$curenttime=$result_blogs_left->time;
$time_ago =strtotime($curenttime);
?>
<p>Posted: <?php echo timeAgo($time_ago);?></p>
<?php
$string = str_replace(' ', '-', $result_blogs_left->title);
$string = preg_replace("/[\s-]+/", " ", $string);
// Convert whitespaces and underscore to dash
$string = preg_replace("/[\s_]/", "-", $string);
?>
<h5><a href="<?php echo htmlentities($main->domain);?>blog-details/?id=<?php echo htmlentities($result_blogs_left->id);?>&name=<?php echo $string ; ?>"><?php echo mb_strimwidth($result_blogs_left->title , 0, 22, "...");?></a></h5>
	<p>BY <?php echo htmlentities($main->title);?></p>
</div>
</div>
<?php $cnt=$cnt+1; }} else { $no_blogs_left='No Blog Post found';}?>

</div>
<div class="blog-catagory">
<h3>Menu:</h3>
<div class="caragory-list">
<ul>
<li><a href="<?php echo htmlentities($main->domain);?>"><i class="flaticon-right-arrow"></i> Home</a></li>
<li><a href="<?php echo htmlentities($main->domain);?>about-us"><i class="flaticon-right-arrow"></i> About Us</a></li>
<li><a href="<?php echo htmlentities($main->domain);?>service"><i class="flaticon-right-arrow"></i> Services</a></li>
<li><a href="<?php echo htmlentities($main->domain);?>our-works"><i class="flaticon-right-arrow"></i> Our Works</a></li>
<li><a href="<?php echo htmlentities($main->domain);?>blogs"><i class="flaticon-right-arrow"></i> Blog</a></li>
<li><a href="<?php echo htmlentities($main->domain);?>contact"><i class="flaticon-right-arrow"></i> Contact Us</a> </li>
<li><a href="<?php echo htmlentities($main->domain);?>feedback"><i class="flaticon-right-arrow"></i> Feedback</a> </li>
</ul>
</div>
</div>
<div class="blog-social-icon">
<h3>Get In Touch:</h3>
<ul class="social">
<li><a href="<?php echo htmlentities($main->fb_page);?>" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
<li><a href="<?php echo htmlentities($main->twitter);?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
<li><a href="<?php echo htmlentities($main->instagram);?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
<li><a href="<?php echo htmlentities($main->yt_channel);?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
</ul>
</div>
</div>
</div>