<?php
$myip = $_SERVER['REMOTE_ADDR'];
$dbip = $result_check_ip->list;
$admin_ip = '';

if($result_web_on_or_off->is_active == 0){

} elseif ($myip == $dbip) {
	$admin_ip = '<i class="fa fa-user-secret" style="color:red"></i><li>Hellow admin !!</li>';
} else {
    header("Location: under-construction.php");

}
?>