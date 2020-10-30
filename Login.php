<html>
<head>
    <title>
        Login Form
    </title>
</head>
<body>
<?php
if (isset($_POST['email'])== true && empty($_POST['email'])==false) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
        echo 'That\'s a valid email address! ';
    } else {
        echo 'Not a valid email address! ';

    }
}
if (empty($_POST['password'])){
    echo 'Please enter a Valid password';
}else {
    echo 'Valid Password';
}


?>
<form action="" method="POST">
    <p>Email: <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  value="" required></p>
    <p>Password: <input type="password" name="password" value="" pattern=".{8,}" required ></p>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
