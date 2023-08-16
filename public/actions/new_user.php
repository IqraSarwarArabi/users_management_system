<?php 
require_once('../../private/initialize.php');

if(is_post_request()) {
  $user['username'] = $_POST['username'] ?? '';
  $user['email'] = $_POST['email'] ?? '';
  $user['company'] = $_POST['company'] ?? '';
  
  $result = insert_user($user);
  if($result === true) {
    $new_id = mysqli_insert_id($db);
    $_SESSION['message'] = 'User created.';
    redirect_to(url_for('/pages/view_profile.php?id='.$new_id));
  } else {
    $errors = $result;
    $_SESSION['errors'] = $errors; 
    $_SESSION['input_values'] = $user; 
    redirect_to(url_for('/pages/new_user.php'));
  }
}
?>