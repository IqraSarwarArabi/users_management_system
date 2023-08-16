<?php

require_once('../../private/initialize.php');

require_login();

if(!isset($_POST['id'])) {
  redirect_to(url_for('/index.php'));
}
$id = $_POST['id'];

if(is_post_request()) {
  $result = delete_user($id);
  $_SESSION['message'] = 'User deleted.';
  redirect_to(url_for('/index.php'));
}

?>
