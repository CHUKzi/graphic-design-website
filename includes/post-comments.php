<?php
//blogs_page_head table 
$sql = "SELECT * from blogs where id = '$blog'";
$query = $dbh -> prepare($sql);
$query->execute();
$result_blogs=$query->fetch(PDO::FETCH_OBJ);

$get_id=$blog;
$member='guest';
$avatar='guest.jpg';
$delete='0';
$result_tap = '0';

  $errors = array();

  $name = '';
  $email = '';
  $comment = '';
  $msg = '';
  
  if (isset($_POST['submit'])) {
    $result_tap = '1';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    // checking required fields
    $req_fields = array('name', 'email', 'comment');
    foreach ($req_fields as $field) {
      if (empty(trim($_POST[$field]))) {
        $errors[] = $field . ' is required';
      }
    }
    // checking max length
    $max_len_fields = array('name' => 70, 'email' => 60, 'comment' => 5000);

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
      $post_id=$get_id;
      $member_type=$member;
      $img=$avatar;
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $comment = mysqli_real_escape_string($conn, $_POST['comment']);
      $is_delete=$delete;

      $query = "INSERT INTO comments ( ";
      $query .= "post_id , member_type , img, name, email , comment , is_delete";
      $query .= ") VALUES (";
      $query .= "'{$post_id}', '{$member_type}', '{$img}', '{$name}', '{$email}', '{$comment}', '{$is_delete}'";
      $query .= ")";

      $result = mysqli_query($conn, $query);

      if ($result) {
        // query successful... redirecting to users page
        // header('Location: index.php?User_registered=true');
        $msg = 'Your comment has been successfully posted';
        $name = '';
        $email = '';
        $comment = '';

        $sql = "UPDATE notification SET comments = comments+1 WHERE id = '1'";
        $conn->query($sql);

      } else {
        $errors[] = 'Failed to add the new record.';

        echo "<script>alert('Invalid Details');</script>";
      }
    }
  }
?>