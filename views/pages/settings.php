<?php
     include 'views/partials/navigation.php';
?>

<div class="setting">
    <div class="items">
        <?php
            include 'views/partials/navigation.php';
        ?>
    </div>
    <h1>Settings</h1>
    <span class="name_login"><?= substr($_SESSION['user']['name'], 0, 45).'.' ?></span>
    <a href="logout"><img class="off" src="assets/img/power.svg" width=20></a>
    <div class="items settings setting1">
    <!-- <img class="arrow_settings" src="assets/img/next.svg" width=20>     -->
        <h3>General</h3>
    </div>
    <div class="settings">
        <h3>Security</h3>
    </div>
    <div class="settings">
        <h3>Language</h3>
    </div>
    <div class="settings">
        <h3>Notifications</h3>
    </div>
    <div class="settings">
        <h3>Contact</h3>
    </div>
</div>
</body>
<script src="js/main.js"></script>
</html>