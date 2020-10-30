<!DOCTYPE HTML>
<html>
<head>

</head>
<body>

<?php
// define variables
$FnameErr = $emailErr = $LnameErr = $bdayErr = $passwordErr= "";
$Fname = $Lname = $email = $bday = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Fname"])) {
        $FnameErr = "First Name is required";
    } else {
        $Fname = test_input($_POST["Fname"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["Lname"])) {
        $LnameErr = "Last Name is required";
    } else {
        $Lname = test_input($_POST["Lname"]);
    }

    if (empty($_POST["bday"])) {
        $bdayErr = "Birthday is required";
    } else {
        $bday = test_input($_POST["bday"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Registration Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    First Name: <input type="text" name="Fname" required />
    <span class="error">* <?php echo $FnameErr;?></span>
    <br><br>
    Last Name: <input type="text" name="Lname" required />
    <span class="error">* <?php echo $LnameErr;?></span>
    <br><br>
    Birthday: <input type="text" name="bday" required />
    <span class="error">* <?php echo $bdayErr;?></span>
    <br><br>
    Email: <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Password: <input type="password" name="password" pattern=".{8,}" required  />
    <span class="error">* <?php echo $passwordErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $Fname;
echo "<br>";
echo $Lname;
echo "<br>";
echo $bday;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
?>

</body>
</html>