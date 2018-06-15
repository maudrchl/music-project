<?php
    session_start();
    if(isset($_SESSION['id'])) {
        echo $_SESSION['id'];
    }

    $id = $_SESSION['id'];

    include 'views/partials/header.php';
    include 'views/partials/navigation.php';
    include 'views/partials/profile-bar.php';

    $query = $pdo->query('SELECT * FROM followers');
    $followers = $query->fetchAll();

    $query = $pdo->query("SELECT * FROM posts WHERE user_id = ".$id."");
    $posts = $query->fetchAll();

    function get_username($pdo, $id) {
        $query = $pdo->query("SELECT * FROM users WHERE id = $id");
        $username = $query->fetch();
        return $username->name;
    }
?>

    <div class="items_profilepage">
        <?php echo $_SESSION["user"]; ?>
        <h1 class="social_title">Your profile</h1>
        <a href="logout">
            <img class="off" src="assets/img/power.svg" width=20>
        </a>

        <?php foreach($posts as $_post): ?>
        <div class="items_profile">
            <img class="pic_home" src="https://api.adorable.io/avatars/240/<?= $id ?>" width="100" height="100" alt="">
            <div class="social_content">
                <h2 class="post username_social">
                    <?= get_username($pdo, $id) ?>
                </h2>
                <h2 class="post">
                    <?= $_post->body ?>
                </h2>
                <h2 class="post date_profile">
                    <?php
                    $originalDate = $_post->stamp;
                    echo $newDate = date("F j, Y, g:i a", strtotime($originalDate));
                ?>
                </h2>
            </div>
        </div>
        <?php endforeach; ?>
    </div>


    </body>
    <script src="js/main.js"></script>

    </html>