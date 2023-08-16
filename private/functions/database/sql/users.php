<?php

  function find_all_users() {
    global $db;

    $sql = "SELECT * FROM users ";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }

  function find_user_by_id($id) {
    global $db;

    $sql = "SELECT * FROM users ";
    $sql .= "WHERE id='" . db_escape($db, $id) . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $admin = mysqli_fetch_assoc($result); 
    mysqli_free_result($result);
    return $admin; 
  }

  function validate_user($user, $options=[]) {

    if(is_blank($user['email'])) {
      $errors[] = "Email cannot be blank.";
    } elseif (!has_length($user['email'], array('max' => 255))) {
      $errors[] = "Last name must be less than 255 characters.";
    } elseif (!has_valid_email_format($user['email'])) {
      $errors[] = "Email must be a valid format.";
    } elseif (!has_unique_email($user['email'], $user['id'])) {
      $errors[] = "Email must be unique.";
    }

    if(is_blank($user['username'])) {
      $errors[] = "Name cannot be blank.";
    } elseif (!has_length($user['username'], array('min' => 4, 'max' => 255))) {
      $errors[] = "name must be between 4 and 255 characters.";
    }

    if(is_blank($user['company'])) {
      $errors[] = "Company cannot be blank.";
    } elseif (!has_length($user['company'], array('min' => 4, 'max' => 255))) {
      $errors[] = "Company must be between 4 and 255 characters.";
    }

    return $errors;
  }

  function insert_user($user) {
    global $db;

    $errors = validate_user($user);
    if (!empty($errors)) {
      return $errors;
    }

    $sql = "INSERT INTO users ";
    $sql .= "(name, email, company) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $user['username']) . "',";
    $sql .= "'" . db_escape($db, $user['email']) . "',";
    $sql .= "'" . db_escape($db, $user["company"]) . "'";
    $sql .= ")";
    echo $sql;
    $result = mysqli_query($db, $sql);

    if($result) {
      return true;
    } else {
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

  function update_user($user) {
    global $db;

    $errors = validate_user($user);
    if (!empty($errors)) {
      return $errors;
    }

    $sql = "UPDATE users SET ";
    $sql .= "name='" . db_escape($db, $user['username']) . "', ";
    $sql .= "email='" . db_escape($db, $user['email']) . "', ";
    $sql .= "company='" . db_escape($db, $user['company']) . "' ";
    $sql .= "WHERE id='" . db_escape($db, $user['id']) . "' ";
    $sql .= "LIMIT 1";
    echo $sql;

    $result = mysqli_query($db, $sql);

    if($result) {
      return true;
    } else {
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

  function delete_user($user) {
    global $db;

    $sql = "DELETE FROM users ";
    $sql .= "WHERE id='" . db_escape($db, $user['id']) . "' ";
    $sql .= "LIMIT 1;";
    $result = mysqli_query($db, $sql);
    if($result) {
      return true;
    } else {
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }
  
?>
