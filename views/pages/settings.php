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
    <div class="settings setting1">
        <div class="settings_connexion">
            <h2 class="settings_title">Connexion</h2>
        </div>
        <div class="settings_intro">Edit your informations : </div>
        <!-- email -->
        <form class="form_settings" action="#" method="post">
            <input type="text" placeholder="Email..." name="email">
            <button class="add_buttonII" type="submit">Modifier</button>
        </form>
        <!-- email -->
        <form class="form_settings" action="#" method="post">
            <input type="text" placeholder="Mot de passe..." name="mot de passe">
            <button class="add_buttonII" type="submit">Modifier</button>
        </form>
        <!-- email -->
        <form class="form_settings" action="#" method="post">
            <input type="text" placeholder="Pseudonyme..." name="pseudonyme">
            <button class="add_buttonII" type="submit">Modifier</button>
        </form>
        <!-- email -->
        <form class="form_settings form_settingsII" action="#" method="post">
            <input type="text" placeholder="Description..." name="description">
            <button class="add_buttonII" type="submit">Modifier</button>
        </form>




    </div>
    <div class="settings setting2">
    <div class="settings_connexion">
            <h2 class="settings_title">Connexion</h2>
        </div>
        <div class="settings_intro">Edit your informations : </div>
        <!-- email -->
        <form class="form_settings" action="#" method="post">
            <input type="text" placeholder="Email..." name="email">
            <button class="add_buttonII" type="submit">Modifier</button>
        </form>
        <!-- email -->
        <form class="form_settings" action="#" method="post">
            <input type="text" placeholder="Mot de passe..." name="mot de passe">
            <button class="add_buttonII" type="submit">Modifier</button>
        </form>
        <!-- email -->
        <form class="form_settings" action="#" method="post">
            <input type="text" placeholder="Pseudonyme..." name="pseudonyme">
            <button class="add_buttonII" type="submit">Modifier</button>
        </form>
        <!-- email -->
        <form class="form_settings form_settingsII" action="#" method="post">
            <input type="text" placeholder="Description..." name="description">
            <button class="add_buttonII" type="submit">Modifier</button>
        </form>

    </div>
    <div class="settings setting3">
        <h3>General</h3>
    </div>
</div>
</body>
<script src="js/Settings.js"></script>
<script src="js/main.js"></script>
</html>