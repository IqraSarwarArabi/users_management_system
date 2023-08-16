<?php     
    require_once('../../private/initialize.php');
    include(SHARED_PATH . '/header.php'); 
    $id = $_GET["id"];
    $user = find_user_by_id($id);
?>
<main class="profile">
    <h1><?php echo $user['name']; ?>'s Detailed Profile</h1>
    <section>
        <div>
            <p>Name :</p>
            <p>Email :</p>
            <p>Company :</p>
        </div>
        <div>
            <p><?php echo $user['name']; ?></p>
            <p><?php echo $user['email']; ?></p>
            <p><?php echo $user['company']; ?></p>
        </div>
    </section>
    <?php
    if (is_logged_in()) {
        echo 
        '<div class="btns-div">
            <button class="btn" id="editButton">Edit User</button>
            <button class="btn" id="deleteButton">Delete User</button>
            <a class="back-link" href="' . url_for('index.php') . '">Back to Home</a>
        </div>';
    }
    else
    {
        echo '<a class="back-link" href="' . url_for('index.php') . '">Back to Home</a>';
    }
    ?>
</main>

<script>
    var userId = <?php echo $id; ?>;
    $(document).ready(function() {
        $('#deleteButton').click(function() {
            var deleteUrl = '../pages/delete.php?id=' + userId;
            window.location.href = deleteUrl;
        });
        $('#editButton').click(function() {
            var editUrl = '../pages/edit.php?id=' + userId;
            window.location.href = editUrl;
        });
    });
</script>

<?php include(SHARED_PATH . '/footer.php'); ?>
