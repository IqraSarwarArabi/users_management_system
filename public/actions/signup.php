<?php 
require_once('../../private/initialize.php');

if(is_post_request()) {
  $admin['username'] = $_POST['username'] ?? '';
  $admin['email'] = $_POST['email'] ?? '';
  $admin['password'] = $_POST['password'] ?? '';
  $admin['confirm_password'] = $_POST['confirm_password'] ?? '';
  
  $result = insert_admin($admin);
  if($result === true) {
    $new_id = mysqli_insert_id($db);
    $_SESSION['message'] = 'Admin created.';
    redirect_to(url_for('/pages/login.php'));
  } else {
    $errors = $result;
    $_SESSION['admin'] = $admin; 
    $_SESSION['errors'] = $result; 
    redirect_to(url_for('/pages/signup.php'));
  }

}
?>