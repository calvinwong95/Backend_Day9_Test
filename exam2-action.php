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
    include 'exam2-db.sql.php';


    $sql = "CREATE DATABASE 'companyA' VALUES 
    (id int PRIMARY KEY AUTO_INCREMENT, 
    name varchar(255),
    dob date,
    age int,
    username varchar(255),
    password varchar(255),
    salary float,
    bonus float,
    leave_days int,
    leave_days_proof varchar(255),
    mc varchar(255),
    mc_proof varchar(255),
    claims float,
    claims_proof varchar(255)";


    //checking if successful
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    ?>
</body>
</html>