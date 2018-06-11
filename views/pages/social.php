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

    function get_username($pdo, $id) {
        $query = $pdo->query("SELECT * FROM users WHERE id = $id");
        $username = $query->fetch();
        return $username->name;
    }
    
?>

<div class="items_socialpage">
<?php echo $_SESSION["user"]; ?>
    <h1 class="social_title">Your timeline</h1>
    <a href="logout"><img class="off" src="assets/img/power.svg" width=20></a>
    <div class="add_post">
        <form class="form_add" action="#" method="post">
            <input type="text" placeholder="Write your message here..." class="add_msg">
            <button class="add_button" type="submit">SEND</button>
        </form>
    </div>
    <?php foreach($posts as $_post): ?>
        <div class="items_social">
            <img class="pic_home" src="https://api.adorable.io/avatars/240/<?= $_post->user_id?>" width="100" height="100" alt="">
            <div class="social_content">
                <h4 class="post username_social"><?= get_username($pdo, $_post->user_id) ?></h4>
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