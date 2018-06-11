<?php
    $user_id = $_SESSION["id"];
?>

<div class="profile_bar">
    <a href="logout"><img class="off" src="assets/img/power.svg" width=20></a>
        <div class="profile_infos">
            <img class="pic_profile" src="https://api.adorable.io/avatars/240/<?= $users->id?>" width="100" height="100" alt="">
            <div class="username">@ <?= $users->name?></div>
            <div class="bio"><?= $users->description?></div>
            <div class="profile_stats">
                <div class="follwing bar_infos">200 following</div>
                <div class="follower bar_infos">301 followers</div>
                <div class="number_favorite bar_infos">11 favorites</div>
            </div>
        <img src="assets/img/logo.png" width="30" class="logo">
        <div class="config_pad">Your pad</div>
            <img src="assets/img/like.png" width="30" class="logo">
        <div class="see_favorites">Your favorite</div>
    </div>
</div>

