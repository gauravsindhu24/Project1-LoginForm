<?php

?>
<html>
<head>
    <title>Question Form</title>
</head>
<body>
<h2>Registration Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <p>*Question Name: <input style="height:200px;font-size:14pt;" type="text" name="name" pattern=".{3,}" required></p>

    <p>*Question Body: <input style="height:200px;font-size:14pt;" type="text" name="body" pattern=".{,500}" required></p>

    <p>*Question Skills: <input style="height:200px;font-size:14pt;" type="text" name="skills" required></p>

    <p><input type="submit" name="submit" value="Submit"></p>


</form>

</body>

</html>