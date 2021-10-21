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
    include 'db.sql.php';

    $name = $_GET['fname'];

    $sql = "INSERT INTO training (name) VALUES ('$name')";

    // mysqli_query($conn,$sql);

    //checking if successful
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    ?>
</body>
</html>