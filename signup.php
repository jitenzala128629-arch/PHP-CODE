<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sign Up Form</h1>
    <form method="post" enctype="multipart/form-data">
        username: <input type="text" name="username" ><br><br>
        password: <input type="password" name="password"><br><br>
        confirm password: <input type="password" name="confirm_password"><br><br>
        email: <input type="email" name="email"><br><br>
        phone number: <input type="text" name="phone_number"><br><br>
        profile picture: <input type="file" name="image"><br><br>
        <input type="submit" value="Sign Up">
    </form>
       
</body>
</html>

<?php
        include 'db.php';

        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $image_name = $_FILES['image']['name'];

            if($password === $confirm_password) {
                $sql = "INSERT INTO users (username, password, email, phone_number, profile_picture) VALUES ('$username', '$password', '$email', '$phone_number', '$image_name')";
                if(mysqli_query($conn, $sql)) {
                    echo "Sign up successful!";
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            } else {
                echo "Passwords do not match!";
            }
        }
?>