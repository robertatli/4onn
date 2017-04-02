 <?php



         // taka úr post array yfir í breytur
         // væri gott að filtera input (geyma)
             $username = trim($_POST['name']);
             $password = trim($_POST['password']);
             $email = trim($_POST['email']);
             $password = password_hash($password, PASSWORD_DEFAULT);
         // d<tabase tenging nota include.
         require_once 'connection.php';
             $conn = dbConnect('write', 'pdo');

             $sql = 'INSERT INTO users(userEmail,userName,userPassword)VALUES(:email,:name,:password)';
             $stmt = $conn->prepare($sql);
         // bind parameters and insert the details into the database
             $stmt->bindParam(':username', $username);
             $stmt->bindParam(':pwd', $password);
             $stmt->bindParam(':email', $email);
             $stmt->execute();
         if ($stmt->rowCount() == 1) {
            $success = "$username has been registered. You may now log in.";
         } elseif ($stmt->errorCode() == 23000) {
            $errors[] = "$username is already in use. Please choose another username.";
         } else {
            $errorInfo = $stmt->errorInfo();
         if (isset($errorInfo[2])) {
            $errors[] = $errorInfo[2];
         }
     } 
