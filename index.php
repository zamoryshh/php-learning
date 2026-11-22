
<!DOCTYPE html>
<html lang="en">
<head>
<body>
    <form method = post action = "">
        <input type = "text" name = "login">
        <input type = "password" name = "pass">
        <button type = "submit">login</button>
<?php
$adminData = [
    "admin1" => "pass1",
    "admin2" => "pass2",
    "admin3" => "pass3",
    "admin4" => "pass4",
    "admin5" => "pass5",
 
];

if (isset ($_POST["login"]) && isset ($_POST["pass"])) {
$login = $_POST["login"];
$password = $_POST["pass"];
if (isset($adminData[$login]) && $password == $adminData[$login]) {   
        echo "hello, admin!";
    } else {
        echo "hello, user!";
}
}
?>
</body>
</html>