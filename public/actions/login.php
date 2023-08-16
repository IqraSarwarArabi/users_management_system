<?php
require_once('../../private/initialize.php');
$errors = [];
$username = '';
$password = '';

if(is_post_request()) {

  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  if(is_blank($username)) {
    $errors[] = "Username cannot be blank.";
  }
  if(is_blank($password)) {
    $errors[] = "Password cannot be blank.";
  }

  if(empty($errors)) {
    $login_failure_msg = "Log in was unsuccessful.";

    $admin = find_admin_by_username($username);
    if($admin) {
      if(password_verify($password, $admin['password'])) {
        log_in_admin($admin);
        redirect_to(url_for('/index.php'));
      } else {
        $errors[] = $login_failure_msg;
      }
    } else {
      $errors[] = $login_failure_msg;
    }
  } 
  $_SESSION['username'] = $username;
  $_SESSION['errors'] = $errors;
  redirect_to(url_for('/pages/login.php')); 
}

?>
