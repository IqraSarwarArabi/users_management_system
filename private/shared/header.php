<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_for('/styles/index.css'); ?>">
    <script src="<?php echo url_for('/script/jquery.js') ?>"></script>
    <title>UMS <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
</head>
<body>
    <header>
        <h1>Users Management System</h1>
        <nav>
            <?php 
                if(is_logged_in()) {
                    echo '<a href="' . url_for('/pages/new_user.php') . '">Add New User</a>';
                    echo '<a href="' . url_for('/actions/logout.php') . '">Logout</a>';
                } else {
                    echo '<a href="' . url_for('/pages/login.php') . '">Login</a>';
                    echo '<a href="' . url_for('/pages/signup.php') . '">Signup</a>';
                }
            ?>
        </nav>
    </header>
    <div class="message">
        <?php echo display_session_message(); ?>
    </div>