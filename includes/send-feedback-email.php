<?php 
  $errors = array();

  $name = '';
  $satisfaction = '';
  $message = '';
  $result_tap = '0';
  $msg = '';
  $formattedValue = '';
  $country = '';
  $city = '';
  $get_visitor_ip = '';

  
  if (isset($_POST['submit'])) {  
  	$result_tap = '1';  
    $name = $_POST['name'];
    $satisfaction = $_POST['satisfaction'];
    $message = $_POST['message'];
    $message2 = nl2br(strip_tags($message));
    $get_visitor_ip = $_SERVER['REMOTE_ADDR'];
	$dateValue = date("Y-m-d");
	$formattedValue = date("F d, Y - l", strtotime($dateValue));
	$send_to_me = $main->send_me;

  	$ip = $get_visitor_ip; 
  	  
  	// Use JSON encoded string and converts 
  	// it into a PHP variable 
  	$ipdat = @json_decode(file_get_contents( 
  	    "http://www.geoplugin.net/json.gp?ip=" . $ip)); 
  	   
  	$country = $ipdat->geoplugin_countryName; 
  	$city = $ipdat->geoplugin_city;


    // checking required fields
    $req_fields = array('name', 'satisfaction', 'message');
    foreach ($req_fields as $field) {
      if (empty(trim($_POST[$field]))) {
        $errors[] = $field . ' is required';
      }
    }
    // checking max length
    $max_len_fields = array('name' => 50, 'satisfaction' => 1, 'message' => 1000);

    foreach ($max_len_fields as $field => $max_len) {
      if (strlen(trim($_POST[$field])) > $max_len) {
        $errors[] = $field . ' must be less than ' . $max_len . ' characters';
      }
    }

    $limit5='6';
    if($satisfaction < $limit5){
      $nextcheck ='1';
    } 
    else {
    $errors[] = 'satisfaction Must be between 1 - 5';
    $nextcheck = '0';
    }
    //////////////////nextcheck///////////////////////
    if($nextcheck == 1){
    $limit0='0';
    if($satisfaction > $limit0){
    } 
    else {
    $errors[] = 'satisfaction Must be greater than 1 ';
    }

    }

    // checking email address
    //if (!is_email($_POST['email'])) {
      //$errors[] = 'Email address is invalid.';
    //}
    if (empty($errors)) {
    // no errors found... adding new record
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $satisfaction = mysqli_real_escape_string($conn, $_POST['satisfaction']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $query = "INSERT INTO cl_feedback ( ";
    $query .= "name, satisfaction, message, is_hide, is_delete";
    $query .= ") VALUES (";
    $query .= "'{$name}', '{$satisfaction}', '{$message2}', '0', '0'";
    $query .= ")";

    $result = mysqli_query($conn, $query);

    if ($result) {

		$to	 		  = $send_to_me;
	    $email = 'www.royanharsha6@gmail.com';
		$mail_subject = 'feedback Message from Website';

		$email_body   = '
				<body style="font-family: Arial, Helvetica, sans-serif;
				  margin: 0;">

				<div style="padding: 80px;
				  text-align: center;
				  background: #FF7052;
				  color: white;">
				  <h1>feedback Message from Website</h1>
				</div>';

		$email_body .= "<table>
				  <tr>
				    <td><b>Name</b></td>
				    <td>:</td>
				    <td>{$name}</td>
				  </tr>
				  <tr>
				    <td><b>Satisfaction</b></td>
				    <td>:</td>
				    <td>{$satisfaction}</td>
				  </tr>
				  <tr>
				    <td><b>Date</b></td>
				    <td>:</td>
				    <td>{$formattedValue}</td>
				  </tr>
				  <tr>
				    <td><b>Country</b></td>
				    <td>:</td>
				    <td>{$country}</td>
				  </tr>
				  <tr>
				    <td><b>City</b></td>
				    <td>:</td>
				    <td>{$city}</td>
				  </tr>
				  <tr>
				    <td><b>IP Address</b></td>
				    <td>:</td>
				    <td>{$get_visitor_ip}</td>
				  </tr>
				</table>";

		$email_body   .= '<div style="background-color: #92FFF4;
				  padding: 20px;">';
		$email_body .= "<b>Message:-</b>{$message2}
				    </div>
				    <br>";
		$email_body   .= '<div style="padding: 10px;
				  text-align: center;
				  background: #ddd;">
				  <hr>
				  <p>Copyright © 2020 Alex Lanka</p>
				</div>
				</div>
				</body>';

		$header       = "From: {$to}\r\nContent-Type: text/html;";

		$send_mail_result = mail($email, $mail_subject, $email_body, $header);

		if ( $send_mail_result ) {


	    $msg = 'Thank For Your Feedback';

	    $name = '';
		$satisfaction = '';
		$message = '';

    $sql = "UPDATE notification SET feedback = feedback+1 WHERE id = '1'";
    $conn->query($sql);

		} else {

		$errors[] = 'Failed to add the new record.';
		}
      } 
    }
  }
 ?>