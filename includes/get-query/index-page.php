<?php
//webstets table
	$sql = "SELECT * from notification where id = 1";
	$query = $dbh -> prepare($sql);
	$query->execute();
	$result_web_on_or_off=$query->fetch(PDO::FETCH_OBJ);

	$sql = "SELECT * from detective where id = 1";
	$query = $dbh -> prepare($sql);
	$query->execute();
	$result_check_ip=$query->fetch(PDO::FETCH_OBJ);
//main table
    $sql = "SELECT * from main where id = 1";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $main=$query->fetch(PDO::FETCH_OBJ);
   //home_page_head table
	$sql = "SELECT * from home_page_head where id = 1";
	$query = $dbh -> prepare($sql);
	$query->execute();
	$resulthead=$query->fetch(PDO::FETCH_OBJ);
//home_page_box table
	$sql = "SELECT * from home_page_box where id = 1";
	$query = $dbh -> prepare($sql);
	$query->execute();
	$resultboxes=$query->fetch(PDO::FETCH_OBJ);
//work_progress table
	$sql = "SELECT * from work_progress where id = 1";
	$query = $dbh -> prepare($sql);
	$query->execute();
	$resultwork=$query->fetch(PDO::FETCH_OBJ);
//story table
	$sql = "SELECT * from our_story where id = 1";
	$query = $dbh -> prepare($sql);
	$query->execute();
	$result_story=$query->fetch(PDO::FETCH_OBJ);
//about_us_page table	
	$sql = "SELECT * from about_us_page_head where id = 1";
	$query = $dbh -> prepare($sql);
	$query->execute();
	$result_about_us=$query->fetch(PDO::FETCH_OBJ);
//about_us table	
	$sql = "SELECT * from about_us where id = 1";
	$query = $dbh -> prepare($sql);
	$query->execute();
	$result_about=$query->fetch(PDO::FETCH_OBJ);
//services_page_head table	
	$sql = "SELECT * from services_page_head where id = 1";
	$query = $dbh -> prepare($sql);
	$query->execute();
	$result_services_page_head=$query->fetch(PDO::FETCH_OBJ);
//blogs_page_head table	
	$sql = "SELECT * from blogs_head where id = 1";
	$query = $dbh -> prepare($sql);
	$query->execute();
	$result_blogs_page_head=$query->fetch(PDO::FETCH_OBJ);
//blogs_page_head table	
	$sql = "SELECT * from our_work_page_head where id = 1";
	$query = $dbh -> prepare($sql);
	$query->execute();
	$result_our_work_page_head=$query->fetch(PDO::FETCH_OBJ);
//blogs_page_head table	
	$sql ="SELECT * from cl_feedback where is_delete = '0'";
	$query = $dbh -> prepare($sql);
	$query->execute();
	$results=$query->fetchAll(PDO::FETCH_OBJ);
	$cnt_feedback=$query->rowCount();
//blogs_page_head table	
	$sql ="SELECT * from blogs";
	$query = $dbh -> prepare($sql);
	$query->execute();
	$results=$query->fetchAll(PDO::FETCH_OBJ);
	$cnt_blogs=$query->rowCount();

	$cnt=1;	

?>
