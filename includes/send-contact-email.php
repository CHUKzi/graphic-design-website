<?php 
  $errors = array();

  $name = '';
  $email = '';
  $phone_number = '';
  $subject = '';
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
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $message2 = nl2br(strip_tags($message));
    $get_visitor_ip = $_SERVER['REMOTE_ADDR'];
	$dateValue = date("Y-m-d");
	$formattedValue = date("F d, Y - l", strtotime($dateValue));
	$send_to_me = $main->send_me;

	// PHP code to obtain country, city,  
	// continent, etc using IP Address 
	  
	$ip = $get_visitor_ip; 
	  
	// Use JSON encoded string and converts 
	// it into a PHP variable 
	$ipdat = @json_decode(file_get_contents( 
	    "http://www.geoplugin.net/json.gp?ip=" . $ip)); 
	   
	$country = $ipdat->geoplugin_countryName; 
	$city = $ipdat->geoplugin_city;

    // checking required fields
    $req_fields = array('name', 'email', 'phone_number', 'subject', 'message');
    foreach ($req_fields as $field) {
      if (empty(trim($_POST[$field]))) {
        $errors[] = $field . ' is required';
      }
    }
    // checking max length
    $max_len_fields = array('name' => 50, 'email' =>50, 'phone_number' => 13, 'subject' => 75, 'message' => 1000);

    foreach ($max_len_fields as $field => $max_len) {
      if (strlen(trim($_POST[$field])) > $max_len) {
        $errors[] = $field . ' must be less than ' . $max_len . ' characters';
      }
    }
    // checking email address
    if (!is_email($_POST['email'])) {
      $errors[] = 'Email address is invalid.';
    }
      if (empty($errors)) {
      // no errors found... adding new record
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
      $subject = mysqli_real_escape_string($conn, $_POST['subject']);
      $message = mysqli_real_escape_string($conn, $_POST['message']);

      $query = "INSERT INTO contact ( ";
      $query .= "name, email, phone_number, subject, message";
      $query .= ") VALUES (";
      $query .= "'{$name}', '{$email}', '{$phone_number}', '{$subject}', '{$message2}'";
      $query .= ")";

      $result = mysqli_query($conn, $query);

      if ($result) {

		$to	 		  = $send_to_me;
		$mail_subject = 'Message from Website';

		$email_body   = '
			<body style="font-family: Arial, Helvetica, sans-serif;
			  margin: 0;">

			<div style="padding: 80px;
			  text-align: center;
			  background: #FF7052;
			  color: white;">
			  <h1>Message from the Website</h1>
			</div>';

		$email_body .= "<table>
			  <tr>
			    <td><b>Name</b></td>
			    <td>:</td>
			    <td>{$name}</td>
			  </tr>
			  <tr>
			    <td><b>E-mail</b></td>
			    <td>:</td>
			    <td>{$email}</td>
			  </tr>
			  <tr>
			    <td><b>Phone Number</b></td>
			    <td>:</td>
			    <td>{$phone_number}</td>
			  </tr>
			  <tr>
			    <td><b>Subject</b></td>
			    <td>:</td>
			    <td>{$subject}</td>
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

		$header       = "From: {$email}\r\nContent-Type: text/html;";

		$send_mail_result = mail($to, $mail_subject, $email_body, $header);

    		if ( $send_mail_result ) {

    	    $msg = 'Your Message is Sent Successfully..., We will contact you within 24 hours ';
    	    $name = '';
    			$email = '';
    			$phone_number = '';
    			$subject = '';
    			$message = '';

        $sql = "UPDATE notification SET emails = emails+1 WHERE id = '1'";
        $conn->query($sql);

    		} else {

    			$errors[] = 'Failed to add the new record.';
    		}
      } 
    }
  }
 ?>