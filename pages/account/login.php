<?php
$database = new DBConn();

$user = new Login($database);

// Check login
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($user->login($email, $password)) {
        // Successful login
        header("location: ". ROOT."/home");
        $_SESSION["user"];
    } else {
        // Unsuccessful login
        echo 'Invalid email or password';
    }
}
?>

<!-- Login form -->
<form method="post">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" name="login">Login</button>

    <div>
        <p class="mb-0">Don't have an account? <a href="register" class="">Sign Up</a>
        </p>
    </div>
</form>
