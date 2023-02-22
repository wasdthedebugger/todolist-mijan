<?php

//check if the form is submitted and if yes check database

if(isset($_POST['login'])){

    //connect to database
    $conn = mysqli_connect("localhost", "root", "", "mij");

    //check connection
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    //get username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    //check if username and password are correct
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    //if username and password are correct, redirect to home page
    if(mysqli_num_rows($result) > 0){
        session_start();
        $_SESSION['username'] = $username;
        header("Location: index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        .container{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    input {
        width: 300px;
        height: 40px;
        margin: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding: 0 10px;
    }

    button {
        width: 300px;
        height: 40px;
        margin: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding: 0 10px;
        background-color: #ccc;
        cursor: pointer;
    }

    </style>
    <link rel="stylesheet" href="https://kit.fontawesome.com/dfdebfedf5.css" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login Form</h1>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="login">Login</button>
        </form>
    </div>
    <script src="main.js"></script>
</body>
</html>