<?php
    session_start();
    $message = '';

    if(!empty($_POST))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

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
        else if (empty($_POST['email']))
        {
            $message = 'Empty email';
        }
        else if (empty($_POST['password']))
        {
            $message = 'Empty password';
        }
        else
        {
            if(password_verify($password, $user->password))
            {
                session_start();

                $query = $pdo->query("SELECT * FROM users WHERE email = '$email'");
                $user_id = $query->fetch();

                $_SESSION["user"] = $email;
                $_SESSION["id"] = $user_id->id;

                header("Location: social");
            }
            else
            {
                $message = 'Wrong password';
            }
        }
    } 
?>
<body>
    <div class="loading">
        <ul class="loader">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>
    <div class="container">
        <img class="img_pad" src="assets/img/pad.png">
        
        <div class="form">
            <h2 class="login_title">NetPad Experience</h2>
            <img src="assets/img/logo.png" width="30" class="logo">
            <p>Quo cognito Constantius ultra mortalem modum exarsit ac nequo casu idem Gallus de futuris incertus agitare quaedam conducentia saluti suae per itinera conaretur, remoti sunt omnes de industria milites agentes in civitatibus perviis.</p>
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
<script src="js/Loader.js"></script>
<script src="js/main.js"></script>
</html>