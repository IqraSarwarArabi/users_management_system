<?php     
    require_once('../../private/initialize.php');
    $page_title = 'Log in';
    include(SHARED_PATH . '/header.php'); 
    if(is_logged_in())
        redirect_to(url_for('index.php'));
    $errors = $_SESSION['errors'] ?? [];
    $stored_username = $_SESSION['login_username'] ?? '';
    unset($_SESSION['errors']);
    unset($_SESSION['username']);
?>

    <main>
        <div class="profile">
            <h1>Welcome, Login Here!</h1>
            <form action="<?php echo url_for('/actions/login.php'); ?>" method="post">
                <div class="signup">
                    <?php echo display_errors($errors); ?>
                    <div>
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" 
                        value="<?php echo h($stored_username); ?>" required>
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button class="btn" type="submit">Login</button>
                    <a class="back-link" href="<?php echo url_for('index.php'); ?>"> Back to Home</a>
                </div>
            </form>
            <p>If you don't have an account, <a href=<?php echo url_for('/pages/signup.php') ?> >Sign Up</a> here.</p>
        </div>
    </main>
    <?php include(SHARED_PATH . '/footer.php'); ?>