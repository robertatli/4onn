<?php
// Sjá bls. 466,  PHP Solution 17-1: Creating a User Registration Form
if (isset($_POST['register'])) {


         $username = $_POST['name'];
         $password = $_POST['password'];
         $email = $_POST['email'];
         $retyped = $_POST['conf_pwd'];

         require_once 'connection.php';

             $sql = "INSERT INTO Users(userEmail,userName,userPassword)VALUES(:email,:username,:password)";
             $stmt = $conn->prepare($sql);
             $stmt->execute(array(':email'=>$email, ':username'=>$username, ':password'=>$password));

        require_once 'register_user_pdo.php';
            
}?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Register user</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

<?php include 'includes/menu.php' ?>

<div class="site">
<h1>Register user</h1>
<?php
if (isset($success)) {
    echo "<p>$success</p>";
} elseif (isset($errors) && !empty($errors)) {
    echo '<ul>';
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo '</ul>';
}
?>

<form method="post" action="">
    <p>
        <label for='username'>name:</label>
        <input type="text" name="name" id="name" required>
    </p>

    <p>
        <label for='email'>email:</label>
        <input type="text" name="email" id="email" required>
    </p>

    <p>
        <label for='password'>Password:</label>
        <input type="password" name="password" id="password" required>
    </p>
    
    <p>
        <label for="conf_pwd">Confirm password:</label>
        <input type="password" name="conf_pwd" id="conf_pwd" required>
    </p>

    <p>
        <input name="register" type="submit" id="register" value="Register">
    </p>
</form>
</div>
</body>
</html>
