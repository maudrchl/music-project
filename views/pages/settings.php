<?php
     include 'views/partials/navigation.php';
     $_SESSION["key"] = $_POST["key"];
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
            <input class="add_msg" type="text" placeholder="Email..." name="email">
            <button class="add_button" type="submit">Edit</button>
        </form>
        <!-- mdp -->
        <form class="form_settings" action="#" method="post">
            <input class="add_msg" type="text" placeholder="Password" name="mot de passe">
            <button class="add_button" type="submit">Edit</button>
        </form>
        <!-- email -->
        <form class="form_settings" action="#" method="post">
            <input class="add_msg" type="text" placeholder="Pseudo" name="pseudo">
            <button class="add_button" type="submit">Edit</button>
        </form>
        <!-- email -->
        <form class="form_settings form_settingsI" action="#" method="post">
            <input class="add_msg" type="text" placeholder="Description..." name="description">
            <input class="add_button" type="submit" name="submit_description">Edit</button>
        </form>




    </div>
    <div class="settings setting2">
    <div class="settings_connexion">
        <h2 class="settings_title">Security</h2>
    </div>
    <div class="settings_intro">Public or Private account :</div>
    <!-- pseudo -->
        <form class="form_settingsII" action="#" method="post">   
            <label class="settings_label" for="radio">Profile Private</label>
            <input class="settings_input" type="radio" placeholder="Profile private" name="pseudo">
            <label class="settings_label" for="radio">Profile Public</label>
            <input class="settings_input" type="radio" placeholder="Profile public" name="pseudo">
        </form>
        <div class="settings_intro">Pad Colors</div>
        <!-- description -->
        <form class="form_settings" action="#" method="post">
            <input type="color" name="colorPad">
        </form>
    </div>
    <div class="settings setting3">
    <div class="settings_connexion">
            <h2 class="settings_title">Newsletter</h2>
        </div>
        <div class="settings_intro">Do you want to receive our weekly newsletter ? </div>
        <!-- newletter -->
        <form class="form_settingsII" action="#" method="post">
            <label class="settings_label" for="#">Yes I want !</label>
            <input class="settings_input" type="radio" name="pseudo">
            <label class="settings_label" for="#">No thanks</label>
            <input class="settings_input" type="radio" placeholder="Profile private" name="pseudo">
        </form>
    </div>
    <div class="settings setting3">
    <div class="settings_connexion">
            <h2 class="settings_title">Keyboard</h2>
        </div>
        <div class="settings_intro">Choose your keyboard. </div>
        <!-- newletter -->
        <form class="form_settings2" action="#" method="post">
            <label class="settings_label" for="#">AZERTY</label>
            <input class="settings_input" type="radio" name="key" value="azerty">
            <label class="settings_label" for="#">QUERTY</label>
            <input class="settings_input" type="radio" name="key" value="qwerty">
            <input type="submit"></input>
        </form>
    </div>
    </div>
</div>
</body>
<script src="js/Settings.js"></script>
<script src="js/main.js"></script>
</html>