<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    include "exam2-db.sql.php";

    

?>
    <form action="action.php" method="get">
    <label> Enter your name here: </label>
    <input type = "text" name="name">
    <label> Enter your date of birth here: </label>
    <input type = "text" name="dob">
    <label> Enter your username here: </label>
    <input type = "text" name="username">
    <label> Enter your password here: </label>
    <input type = "text" name="password">
    <label> Enter your salary here: </label>
    <input type = "text" name="salary">
    <label> Enter your bonus here: </label>
    <input type = "text" name="bonus">
    <label> Enter your proof of leave here: </label>
    <input type = "text" name="leavedaysproof">
    </form>

</body>
</html>