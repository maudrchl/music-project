<?php

    $message = '';

    if(!empty($_POST))
    {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];

        $_SESSION['user'] = [
            'email' => $user->email,
            'name' => $user->name,
        ];

        if (empty($_POST['email']))
        {
            $message = 'Empty email';
        }
        else if (empty($_POST['password']))
        {
            $message = 'Empty password';
        } 
        else if (empty($_POST['name']))
        {
            $message = 'Empty username';
        } 
        else {
            $message = 'User registered';
            header('Location: social');

            $prepare = $pdo->prepare('
            INSERT INTO
                users (email, password, name)
            VALUES
                (:email, :password, :name)
        ');
        $prepare->bindValue('email', $email);
        $prepare->bindValue('password', $password);
        $prepare->bindValue('name', $name);
        $prepare->execute();
        }
    }
?>

<body>
    <div class="yellow_border"></div>
    <div class="container">
        <div class="inscription_main">
            <h2 class="inscription_title">Sign Up</h2>
        </div>
        <div class="form_inscription">
            <form class="jaimelesaucisson" action="#" method="post">
                <div class="form_inscription">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="netpad@experience.com">   
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="•••••••••">
                </div>
                <div class="last_input">
                    <label for="name">Username</label>
                    <input type="name" name="name" id="name" placeholder="Pad">
                </div>
                <div>
                    <input type="submit" class="inscription"></input>
                </div>
                <p class="message"><?= $message ?></p>
            </form>
            <p class="text_404">Already an account ?</p>
            <p class="text_404"><a href="login" class="link_404">LOG IN</a></p>
        </div>
    </div>
</body>
</html>