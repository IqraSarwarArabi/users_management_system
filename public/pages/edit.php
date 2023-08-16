<?php     
    require_once('../../private/initialize.php');
    $page_title = 'Edit User';
    include(SHARED_PATH . '/header.php'); 
    if(!is_logged_in())
        redirect_to(url_for('index.php'));
    $user = find_user_by_id($_GET['id']);
    $errors = $_SESSION['errors'] ?? [];
    unset($_SESSION['errors']);
?>

<main>
    <div class="profile">
        <h1>Edit User</h1>
        <form action="<?php echo url_for('/actions/edit.php'); ?>" method="post">
            <div class="signup">
                <?php echo display_errors($errors); ?>
                <input type="hidden" name="id" value="<?php echo h($user['id']); ?>">
                <div>
                    <label for="username">Name</label>
                    <input type="text" id="username" name="username" 
                    value="<?php echo h($user['name']); ?>" required>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" 
                    value="<?php echo h($user['email']); ?>" required>
                </div>
                <div>
                    <label for="company">Company</label>
                    <input type="text" id="company" name="company" 
                    value="<?php echo h($user['company']); ?>" required>
                </div>
                <button class="btn" id="add-user" type="submit">Edit User</button>
            </div>
        </form>
    </div>
</main>
    
<?php include(SHARED_PATH . '/footer.php'); ?>