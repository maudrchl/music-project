<?php
    session_start();

    include 'views/partials/header.php';
    include 'views/partials/navigation.php';

    $query = $pdo->query('SELECT * FROM users');
    $users = $query->fetchAll();

    $query = $pdo->query('SELECT * FROM followers');
    $followers = $query->fetchAll();

    $user_id = $_SESSION["id"];
    $query = $pdo->query("SELECT * FROM posts WHERE user_id != '$user_id'");
    $posts = $query->fetchAll();

    echo '<pre>';
    print_r($posts);
    echo '<pre>';

    function get_username($pdo, $id) {
        $query = $pdo->query("SELECT * FROM users WHERE id = $id");
        $username = $query->fetch();
        return $username->name;
    }
    
?>

<div class="items_socialpage">
<?php echo $_SESSION["user"]; ?>
    <h1 class="social_title">Your timeline</h1>
    <h1 class="social_title">Nop</h1>
    <a href="logout"><img class="off" src="assets/img/power.svg" width=20></a>

    <?php foreach($posts as $_post): ?>
        <div class="items_social">
            <img class="pic_home" src="https://api.adorable.io/avatars/240/<?= $_post->user_id?>" width="100" height="100" alt="">
            <div class="social_content">
                <h2 class="post">user name : <?= get_username($pdo, $_post->user_id) ?></h2>
                <h2 class="post">user id : <?= $_post->user_id ?></h2>
                <h2 class="post">message : <?= $_post->body ?></h2>
                <h2 class="post">date : <?= $_post->stamp ?></h2>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
<script src="js/main.js"></script>
</html>