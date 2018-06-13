<?php
    session_start();
    include "views/partials/header.php";
    include "views/partials/footer.php";
    include "config.php";

    if (isset($_GET['q'])) {
        switch($_GET['q']) {
            case 'login':
                include "views/pages/login.php";
                break;
            case 'social':
                include "views/pages/social.php";
                break;
            case 'pad':
                if($_SESSION["key"]  === "azerty"){
                    include "views/pages/pad.php";
                } else {
                    include "views/pages/pad_qwerty.php";
                }
                break;
            case 'profile':
                include "views/pages/profile.php";
                break;
            case 'settings':
                include "views/pages/settings.php";
                break;
            case 'logout':
                session_destroy();
                header('Location: login');exit();
                break;
            case 'inscription':
                include "views/pages/inscription.php";
                break;
            default:
                include "views/pages/404.php";
                break;
        }
    }
    else include "views/pages/login.php";

?>