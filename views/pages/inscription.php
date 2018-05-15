<?php

    include 'config.php';
    include 'header.php';

    $message = '';

    if(!empty($_POST))
    {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];

        $prepare = $pdo->prepare('
            INSERT INTO
                users (email, password, name)
            VALUES
                (:email, :password, :name)
        ');
        $prepare->bindValue('email', $email);
        $prepare->bindValue('password', $password);
        $prepare->execute();

        $message = 'User registered';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>

    <?php
        include 'header.php';
    ?>

    <p><?= $message ?></p>

    <form action="#" method="post">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">Email
        </div>
        <div>
            <input type="password" name="password" id="password">Password
            <label for="password">Password</label>
        </div>
        <div>
            <input type="text" name="name" id="name">Name
            <label for="name">Password</label>
        </div>
        <div>
            <input type="submit">
        </div>
    </form>

</body>
</html>