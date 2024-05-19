<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require('./config.php');
    if (isset($_REQUEST['username'])){
        $user = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['pass'];
        $insert = "INSERT INTO `login`(`username`, `pass`, `email`) VALUES ('$user','$pass','$email')";
        $query = mysqli_query($mysqli, $insert);

        if($query){
            ?>
            <div>
                <p style="text-align: center; color:red">Successfully Registered</p>
            </div>

            <?php
        }
        else echo ' <div>
                <p style="text-align: center; color:red">Registration </p>
            </div>';
    }
    else{
    ?>

    <form action="" method="post">
        <input type="text" name="username" placeholder="name">
        <input type="text" name="pass" placeholder="password">
        <input type="email" name="email" placeholder="your@mail.com">
        <button type="submit">Submit</button>
    </form>
<?php
    };
?>

</body>

</html>