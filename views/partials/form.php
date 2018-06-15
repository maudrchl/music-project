<?php
    session_start();

    $query = $pdo->query("SELECT * FROM users WHERE id = '$id'");
    $user = $query->fetch();
    $id = $_SESSION["id"];

    if(isset($_POST['submit_email']))
    {
        if(!empty($_POST['email'])){
            $prepare = $pdo->prepare('UPDATE users SET email= ? WHERE id= '.$user->id.'');
            $prepare->execute(array($_POST['email']));
            header("location: settings");
        } else {
            ?>
            <span class="error">Missing email</span>
            <?php
        }
    }

    if(isset($_POST['submit_password']))
    {
        if(!empty($_POST['password'])){
            $prepare = $pdo->prepare('UPDATE users SET password = ? WHERE id= '.$user->id.'');
            $prepare->execute(array($password = password_hash($_POST['password'], PASSWORD_DEFAULT)));
            header("location: settings");
        } else {
            ?>
            <span class="error">Missing password</span>
            <?php
        }
    }

    if(isset($_POST['submit_name']))
    {
        if(!empty($_POST['name'])){
            $prepare = $pdo->prepare('UPDATE users SET name= ? WHERE id= '.$user->id.'');
            $prepare->execute(array($_POST['name']));
            header("location: settings");
        } else {
            ?>
            <span class="error">Missing name</span>
            <?php
        }
    }

    if(isset($_POST['submit_description']))
    {
        if(!empty($_POST['description'])){
            $prepare = $pdo->prepare('UPDATE users SET description = ? WHERE id= '.$user->id.'');
            $prepare->execute(array($_POST['description']));
            header("location: settings");
        } else {
            ?>
            <span class="error">Missing description</span>
            <?php
        }
    }

    if(isset($_POST['newpost']))
    {
        if(!empty($_POST['newtext'])){
            echo $user_id = $user->id;
            echo $body = $_POST['newtext'];
            echo $stamp = date('F j, Y, g:i a', time());
            $prepare = $pdo->prepare("INSERT INTO posts (user_id, body, stamp) VALUES (?, ?, ?')");
            $prepare->execute(array($user_id, $body, $stamp));
            header("location: social");
        } else {
            ?>
            <span class="error">Missing text</span>
            <?php
        }
    }
