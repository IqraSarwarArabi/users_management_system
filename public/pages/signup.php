<?php     
    require_once('../../private/initialize.php');
    $page_title = 'Signup';
    include(SHARED_PATH . '/header.php'); 
    if(is_logged_in())
        redirect_to(url_for('index.php'));
    $errors = $_SESSION['errors'] ?? [];
    $admin = $_SESSION['admin'] ?? [];
    unset($_SESSION['admin']); 
    unset($_SESSION['errors']);
?>
<main>
    <div class="profile">
        <h1>Sign Up</h1>
        <form action="<?php echo url_for('/actions/signup.php'); ?>" method="post">
            <div class="signup">
                <?php echo display_errors($errors); ?>
                <div>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" 
                    value="<?php echo h($admin['username'] ?? ''); ?>" required>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" 
                    value="<?php echo h($admin['email'] ?? ''); ?>" required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div>
                    <label for="password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
                <button class="btn" id="signup-btn" type="submit">Sign Up</button>
                <a class="back-link" href="<?php echo url_for('index.php'); ?>"> Back to Home</a>
            </div>
        </form>
        <p>If you already have an account, <a href=<?php echo url_for('/pages/login.php') ?> >Login</a> here.</p>
    </div>
</main>

<?php include(SHARED_PATH . '/footer.php'); ?>