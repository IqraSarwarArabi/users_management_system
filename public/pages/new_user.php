<?php     
    require_once('../../private/initialize.php');
    $page_title = 'Signup';
    include(SHARED_PATH . '/header.php'); 
    if(!is_logged_in())
        redirect_to(url_for('login.php'));
    $errors = $_SESSION['errors'] ?? [];
    $input_values = $_SESSION['input_values'] ?? [];
    unset($_SESSION['errors']);
    unset($_SESSION['input_values']); 
?>
    <main>
        <div class="profile">
            <h1>Add a New User</h1>
            <form action="<?php echo url_for('/actions/new_user.php'); ?>" method="post">
                <div class="signup">
                    <?php echo display_errors($errors); ?>
                    <div>
                        <label for="username">Name</label>
                        <input type="text" id="username" name="username" 
                        value="<?php echo h($input_values['username'] ?? ''); ?>" required>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" 
                        value="<?php echo h($input_values['email'] ?? ''); ?>" required>
                    </div>
                    <div>
                        <label for="company">Company</label>
                        <input type="text" id="company" name="company" 
                        value="<?php echo h($input_values['company'] ?? ''); ?>" required>
                    </div>
                    <button class="btn" id="add-user" type="submit">Add User</button>
                    <a class="back-link" href="<?php echo url_for('index.php'); ?>"> Back to Home</a>
                </div>
            </form>
        </div>
    </main>
    
    <script>
        $("#add-user").on("click", () => {
            const name = $("#username").val(); 
            const email =  $("#email").val(); 
            const company =  $("#company").val(); 
            console.log(email,name,company);
            fetch("../../backend/apis/insert-user.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                body: `name=${name}&email=${email}&company=${company}`,
            })
            .then(response => response.text())
            .then(data => {
                console.log(data); 
            })
            .catch(error => {
                console.error("Error:", error);
            });
        });
    </script>
<?php include(SHARED_PATH . '/footer.php'); ?>