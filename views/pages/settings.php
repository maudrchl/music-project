<?php
    include 'views/partials/navigation.php';
    include 'views/partials/form.php';
    $_SESSION["key"] = $_POST["key"];
?>

<div class="setting">
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
            <input class="add_msg" type="text" placeholder="<?=  $user->email ?>" name="email">
            <button class="add_button" type="submit" name="submit_email">Edit</button>
        </form>
        <!-- mdp -->
        <form class="form_settings" action="#" method="post">
            <input class="add_msg" type="password" placeholder="•••••••••" name="password">
            <button class="add_button" type="submit" name="submit_password">Edit</button>
        </form>
        <!-- email -->
        <form class="form_settings" action="#" method="post">
            <input class="add_msg" type="text" placeholder="<?= $user->name ?>" name="name">
            <button class="add_button" type="submit_name">Edit</button>
        </form>
        <!-- email -->
        <form class="form_settings form_settingsI" action="#" method="post">
            <input class="add_msg" type="text" placeholder="<?= $user->description ?>" name="description">
            <input class="add_button" type="submit" name="submit_description" value="Edit">Edit</button>
        </form>
    </div>
    <div class="settings setting2">
    <div class="settings_connexion">
            <h2 class="settings_title">Keyboard</h2>
        </div>
        <div class="settings_intro">Choose your Pad Colors. </div>
        <form class="form_settings" action="#" method="post" class="colors_choice">
            <input type="color" name="colorPad" value="#ff9720" class="color_choice" autocomplete=off>
        </form>
        <form class="form_settings" action="#" method="post" class="colors_choice">
            <input type="color" name="colorPad" value="#44ecff" class="color_choice">
        </form>
        <form class="form_settings" action="#" method="post" class="colors_choice">
            <input type="color" name="colorPad" value="#ff63da" class="color_choice">
        </form>
        <input type="submit" class="submit_key" value="Submit"></input>
        </div>
        </div>
        <div class="settings setting2">
        <div class="settings_connexion">
            <h2 class="settings_title">Keyboard</h2>
        </div>
        <div class="settings_intro">Choose your keyboard. </div>
        <!-- description -->
        <form class="form_settings2" action="#" method="post">
        <div class="choice">
            <input class="settings_input" type="radio" name="key" value="azerty" id="azerty">
            <label class="settings_label" for="azerty">AZERTY</label>
        </div>
        <div class="choice">
            <input class="settings_input" type="radio" name="key" value="qwerty" id="qwerty">
            <label class="settings_label" for="qwerty" id="qwerty">QUERTY</label>
        </div>
            <input type="submit" class="submit_key" value="Submit"></input>
        </form>
        </div>
        </div>
    </div>
    <div class="settings setting3">
    <div class="settings_connexion">
        <h2 class="settings_title">Security</h2>
    </div>
    <div class="settings_intro">Public or Private account :</div>
    <!-- pseudo -->
        <form class="form_settingsII" action="#" method="post">   
            <input class="settings_input" type="radio" placeholder="Profile private" name="pseudo">
            <label class="settings_label" for="radio">Profile Private</label>
            <input class="settings_input" type="radio" placeholder="Profile public" name="pseudo">
            <label class="settings_label" for="radio">Profile Public</label>
        </form>
    <div class="settings setting3">
    <div class="settings_connexion">
            <h2 class="settings_title">Newsletter</h2>
        </div>
        <div class="settings_intro">Do you want to receive our weekly newsletter ? </div>
        <!-- newletter -->
        <form class="form_settingsII" action="#" method="post">
            <div class="choice">
                <input class="settings_input" type="radio" name="pseudo" id="yes">
                <label class="settings_label" for="yes">Yes I want !</label>
            </div>
            <div class="choice">
            <input class="settings_input" type="radio" name="pseudo" id="no">
                <label class="settings_label" for="no">No thanks</label>
            </div>
        </form>
    </div>
</div>
</body>
<script src="js/Settings.js"></script>
<script src="js/main.js"></script>
</html>