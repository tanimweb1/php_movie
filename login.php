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
    session_start();
    if (isset($_REQUEST['username'])) {
        $user = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['pass'];
        $check = "SELECT * FROM `login` WHERE username = '$user' AND pass ='$pass'";
        $query = mysqli_query($mysqli, $check);
        $rows =mysqli_num_rows($query);

        if ($rows == 1) {
            $_SESSION['username'] = $user;
            header("Location: index.php");
            exit();
    ?>
         
        <?php
        } else echo ' <div>
                <p style="text-align: center; color:red">Log in Failed</p>
            </div>';
    } else {
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