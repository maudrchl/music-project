<?php
    include "views/partials/header.php";
    include "config.php";

    if (isset($_GET['q'])) {
        switch($_GET['q']) {
            case '':
                include "views/pages/login.php";
                break;
            case 'social':
                include "views/pages/social.php";
                break;
            case 'pad':
                include "views/pages/pad.php";
                break;
            case 'profile':
                include "views/pages/profile.php";
                break;
            case 'settings':
                include "views/pages/settings.php";
                break;
            case 'logout':
                include "views/pages/logout.php";
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