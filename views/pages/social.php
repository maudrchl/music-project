<?php
    $id = $_SESSION['id'];
    
    date_default_timezone_set('Europe/Paris');
    $message = '';

    include 'views/partials/header.php';
    include 'views/partials/navigation.php';
    include 'views/partials/form.php';


    $query = $pdo->query("SELECT * FROM posts WHERE id = $id");
    $users = $query->fetchAll();

    $query = $pdo->query("SELECT * FROM posts ORDER BY stamp DESC");
    $posts = $query->fetchAll();

?>


<div class="items_socialpage">
    <h1 class="social_title">Your timeline</h1>
    <a href="logout"><img class="off" src="assets/img/power.svg" width=20></a>
    <div class="add_post">
        <form class="form_add" action="#" method="post">
            <input type="text" placeholder="Write your message here..." class="add_msg" name="newtext">
            <input type="submit" class="add_button" value="SEND" name="newpost"></button>
        </form>
    </div>
    <?php foreach($posts as $_post): ?>
        <div class="items_social">
            <img class="pic_home" src="https://api.adorable.io/avatars/240/<?= $_post->user_id?>" width="100" height="100" alt="">
            <div class="social_content">
                <h4 class="post username_social"><?= $_post->user_name ?></h4>
                <div class="post_social">
                    <p class="post"><?= $_post->body ?></p> 
                </div>
                <h4 class="post date_social">
                <?php
                    $originalDate = $_post->stamp;
                    echo $newDate = date("F j, Y, g:i a", strtotime($originalDate));
                ?>
                </h4>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
<script src="js/main.js"></script>
</html>