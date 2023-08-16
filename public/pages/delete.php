<?php     
    require_once('../../private/initialize.php');
    $page_title = 'Log in';
    include(SHARED_PATH . '/header.php'); 
    if(!is_logged_in())
        redirect_to(url_for('index.php'));
    $user = find_user_by_id($_GET['id']);
?>

<main id="content">
    <div class="profile">
        <h2>Deleting User <?php echo $user['name'] ?></h2>
        <p>Are you sure you want to delete this User?</p>
        <form action="<?php echo url_for('/actions/delete.php'); ?>" method="post">
            <input type="hidden" name="id" value="<?php echo h(u($_GET['id'])); ?>">
            <button class="btn" type="submit" name="commit">Delete User</button>
            <a class="back-link" href="<?php echo url_for('index.php'); ?>"> Back to Home</a>
        </form>
    </div>
</main>

<?php include(SHARED_PATH . '/footer.php'); ?>

