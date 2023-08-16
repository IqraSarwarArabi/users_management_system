<?php     
    require_once('../private/initialize.php');
    include(SHARED_PATH . '/header.php'); 
    
    $users_result = find_all_users();
    $users = [];
    while ($row = mysqli_fetch_assoc($users_result)) {
        $users[] = $row; 
    }
?>

<main>
    <div class="wrapper">
        <div class="filter">
            <label for="filter">Filter Users:</label>
            <input type="text" id="filterName" placeholder="Enter user name">
            <input type="text" id="filterCompany" placeholder="Enter company name">
        </div>
        <ul class="user-list" id="userList">
            <?php foreach ($users as $user) { ?>
                <li class="user">
                    <div class="user-info">
                        <p class="user-name"><?php echo $user['name']; ?></p>
                        <p class="user-email"><?php echo $user['email']; ?></p>
                        <p class="company"><?php echo $user['company']; ?></p>
                    </div>
                    <button class="btn" onclick="viewProfile(<?php echo $user['id']; ?>)">View Profile</button>
                </li>
            <?php } ?>
        </ul>
    </div>
</main>

<script>
    function viewProfile(id) {
        window.location.href = "<?php echo url_for('pages/view_profile.php?id='); ?>" + id;
    }
</script>

<?php include(SHARED_PATH . '/footer.php'); ?>
