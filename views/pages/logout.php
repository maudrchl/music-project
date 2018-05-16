<?php
    include 'config.php';
    include 'views/partials/header.php';

    session_destroy();
    header('Location: login');

?>
<body>
    <h1>Logout</h1>
    <p>You have been logged out</p>
</body>
</html>