<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://kit.fontawesome.com/dfdebfedf5.css" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>To Do List</title>
</head>

<body>
    <div class="container">

        <h1>To Do List - <?php echo ($_SESSION['username']); ?></h1>
        <h3><a href="logout.php">Log Out</a>
        </h3>
        <input type="text" id="inputField">
        <button id="addToDo">Add</button>
        <div id="notice">Input Cannot Be Empty</div>
        <div class="toDos" id="toDosContainer"></div>
    </div>
    <script src="main.js"></script>
</body>

</html>