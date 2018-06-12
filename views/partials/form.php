<?php

if(isset($_POST['send']))
    {
        if(empty($_POST['text'])){
            echo $message = "No text";
        } else {
            $body = $_POST['text'];
            echo '<pre>';
            print_r($_POST['text']);
            echo '</pre>';
            $prepare = $pdo->prepare('
                INSERT INTO
                    posts (id, user_id, body, stamp)
                VALUES
                    (:id, :user_id, :body; :stamp)
            ');

            $prepare->bindValue('body', $body);

            $prepare->execute();
            header("Location:social");
        }
    }
    else
    {
        $_POST['text'] = '';        
    }
?>