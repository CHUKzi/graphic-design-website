<?php
$page_id = $pagenum;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable
add_view($conn, $visitor_ip, $page_id);
?>
<?php $total_page_views = total_views($conn, 1); ?>
<div class="footer-top-area m-0">
<div class="footer-details">
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="f-logo">
<img src="<?php echo htmlentities($main->domain);?>assets/img/<?php echo htmlentities($main->logo_f);?>" alt="">
</div>
<?php $about_us = ''; $about_us = ($main->domain.'about-us');?>
<p><?php echo mb_strimwidth("$main->about_us", 0, 290, "<a href={$about_us}> show more..</a>"); ?></p>
</div>
<div class="col-md-2">
<div class="f-link-tittle">
<h5>Menu</h5>
</div>
<div class="f-link">
<ul>
	<li><a href="<?php echo htmlentities($main->domain);?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
	<li><a href="<?php echo htmlentities($main->domain);?>about-us"><i class="flaticon-right-arrow"></i> About Us</a></li>
	<li><a href="<?php echo htmlentities($main->domain);?>service"><i class="flaticon-right-arrow"></i> Services</a></li>
	<li><a href="<?php echo htmlentities($main->domain);?>our-works"><i class="flaticon-right-arrow"></i> Our Works</a></li>
	<li><a href="<?php echo htmlentities($main->domain);?>blogs"><i class="flaticon-right-arrow"></i> Blog</a></li>
	<li><a href="<?php echo htmlentities($main->domain);?>contact"><i class="flaticon-right-arrow"></i> Contact Us</a> </li>
	<li><a href="<?php echo htmlentities($main->domain);?>feedback"><i class="flaticon-right-arrow"></i> Feedback</a> </li>
</ul>
</div>
</div>
<div class="col-md-3">
<div class="f-link-tittle">
<h5>Contact Info</h5>
</div>
<div class="f-link">
<ul>
<table>
<tr>
  <td><li><b>Email</b></li></td>
  <td><li>:</li></td>
  <td><li><?php echo htmlentities($main->email);?></li></td>
</tr>
<tr>
  <td><li></li></td>
  <td><li>:</li></td>
  <td><li><?php echo htmlentities($main->email_2);?></li></td>
</tr>
<tr>
  <td><li><b>Mobile</b></li></td>
  <td><li>:</li></td>
  <td><li><?php echo htmlentities($main->number1);?></li></td>
</tr>
<tr>
  <td><li></li></td>
  <td><li>:</li></td>
  <td><li><?php echo htmlentities($main->number2);?></li></td>
</tr>
<tr>
  <td><li><b>Address</b></li></td>
  <td><li>:</li></td>
  <td><li><?php echo htmlentities($main->address);?></li></td>
</tr>
<tr>
  <td><li><b>Country</b></li></td>
  <td><li>:</li></td>
  <td><li>Sri Lanka</li></td>
</tr>
</table>
</ul>
</div>
</div>
<div class="col-md-3">
<div class="f-link-tittle">
<h5>Total Views : <?php echo $total_page_views; ?></h5>
</div>
<div class="social-link">
<ul>
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
<footer>
<p><?php echo htmlentities($main->copywright);?><a href="<?php echo htmlentities($main->domain);?>"><u><?php echo htmlentities($main->title);?></u></a></p>
</footer>