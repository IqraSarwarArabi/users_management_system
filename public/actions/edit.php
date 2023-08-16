<?php 
require_once('../../private/initialize.php');

if(is_post_request()) {
  $user['username'] = $_POST['username'] ?? '';
  $user['email'] = $_POST['email'] ?? '';
  $user['company'] = $_POST['company'] ?? '';
  $user['id'] = $_POST['id'] ?? '';
  
  $result = update_user($user);
  var_dump($result);
  if($result === true) {
    $_SESSION['message'] = 'The user was updated successfully.';
    redirect_to(url_for('/pages/view_profile.php?id='.$user['id']));
  } else {
    $errors = $result;
    $_SESSION['errors'] = $errors; 
    redirect_to(url_for('/pages/edit.php?id='.$user['id']));
  }

}
?>