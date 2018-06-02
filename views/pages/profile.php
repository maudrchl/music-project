<?php
    include 'views/partials/header.php';
    include 'views/partials/navigation.php';
    include 'views/partials/profile-bar.php';
    
?>

<div class="container">
    <div class="items">
    </div>
    <h1>Your profile</h1>
    <span class="name_login"><?= substr($_SESSION['user']['name'], 0, 45).'.' ?></span>
    <a href="logout"><img class="off" src="assets/img/power.svg" width=20></a>
</div>
</body>
<script src="js/main.js"></script>
</html>