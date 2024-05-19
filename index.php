<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   
    <?php
    require_once('./config.php');

    if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
    }

  
    $sql = "SELECT * FROM new_movie1";
    $result = $mysqli->query($sql);

    if (!$result) {
    die("Error: " . $mysqli->error);
    }

    while ($row = $result->fetch_assoc()) {
   
    echo " Name: " . $row["Name"] ." Genre".$row["Genre"]."<img src= '" .$row["Image"]."'><br>";
    }

  
    $mysqli->close();
    ?>

</body>

</html>