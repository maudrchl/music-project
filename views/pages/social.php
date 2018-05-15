<?php
    session_start();
    include 'views/partials/header.php';
    include 'views/partials/navigation.php';
?>


<div class="container">
    <div class="items">
        <?php
            include 'navigation.php';
        ?>
    </div>
    <h1>Your timeline</h1>
    <span class="name_login"><?= substr($_SESSION['user']['name'], 0, 45).'.' ?></span>
    <a href="logout"><img class="off" src="assets/img/power.svg" width=20></a>
    <div class="items songs song1"></div>
    <div class="items songs song2"></div>
    <div class="items songs song3"></div>
    <div class="items songs song4"></div>
</div>
</body>
<script src="js/main.js"></script>
</html>