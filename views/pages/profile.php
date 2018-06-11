<?php
    session_start();
    include 'views/partials/header.php';
    include 'views/partials/navigation.php';
    include 'views/partials/profile-bar.php';

    $query = $pdo->query('SELECT * FROM followers');
    $followers = $query->fetchAll();

    $query = $pdo->query('SELECT * FROM posts');
    $posts = $query->fetchAll();
?>
<div class="items_profilepage">
    <div class="items">
        <?php
            include 'navigation.php';
        ?>
    </div>
    <h1 class="profile_title">Your profile</h1>
    <div class="items_profile">
        <a href="logout"><img class="off" src="assets/img/power.svg" width=20></a>
        <?php foreach($posts as $_post): ?>
        <?php foreach($followers as $_follower): ?>
        <?php if($_post->user_id ===  $_follower->user_id){?>
            <div class="items_profile">
                <h2 class="post"><?= $_post->body ?></h2>
                <h2 class="post"><?= $_post->stamp ?></h2>
                <h2 class="post"><?= $_post->user_id ?></h2>
            </div>
        <?php } ?>
        <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</body>
<script src="js/main.js"></script>
</html>