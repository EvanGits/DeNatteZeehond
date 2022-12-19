<?php
$database = new DBConn();

$user = new Login($database);
// Check registration
if(isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if($user->register($name, $email, $phone, $password)) {
        // Successful registration
        header("location: ". ROOT."/home");
    } else {
        // Unsuccessful registration
        echo 'Error registering';
    }
}
?>

<form method="post">
    <input type="name" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="tel" name="phone" placeholder="Number">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="password2" placeholder="Retype Password">
    <button type="submit" name="register">Register</button>
</form>
