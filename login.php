<?php include_once("includes/header.php"); ?>
<?php include_once("configs/db_connection.php"); ?>
<?php

if (isset($_POST['btn_login'])) {

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $error_name = "Email field is required";
    }

    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = md5($_POST['password']);
    } else {
        $error_nam = "password field is required";
    }

    $status = 1;

    if (
      
        isset($email) &&
        isset($password) &&
        isset($status)
    ) {
        $sql = "INSERT into tbl_users
                (email,password,status)
                VALUES('$email','$password',$status)";
        $connection->query($sql);
    }
}
?>

<main>
    <div class="container">
        <div class="login-form">
            <h1>Login Form</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <button type="submit" name="btn_login" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</main>

<?php include_once("includes/footer.php"); ?>