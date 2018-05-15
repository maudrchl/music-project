<?php

    $message = '';

    if(!empty($_POST))
    {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $prepare = $pdo->prepare('
            SELECT
                *
            FROM
                users
            WHERE
                email = :email
            LIMIT
                1
        ');
        $prepare->bindValue('email', $email);
        $prepare->execute();
        $user = $prepare->fetch();

        if(!$user)
        {
            $message = 'Email not found';
        }
        else
        {
            if(password_verify($password, $user->password))
            {
                $_SESSION['user'] = [
                    'email' => $user->email,
                    'name' => $user->name,
                ];
                $message = 'You are logged in';
                header('Location: social');
            }
            else
            {
                $message = 'Wrong password';
            }
        }
    }
?>
<body>
    <div class="container">
        <img class="img_pad" src="assets/img/pad.png">
        <div class="form">
            <h2 class="login_title">Login</h2>
            <img src="assets/img/logo.png" width="30" class="logo">
            <form action="#" method="post">
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="netpad@experience.com">   
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="•••••••••">
                </div>
                <div>
                    <input type="submit" class="submit" value="log in">
                </div>
                <div>
                    <a class="signup" href="inscription">Sign up</a>
                </div>
            </form>
            <p class="message"><?= $message ?></p>
        </div>
    </div>


</body>
</html>