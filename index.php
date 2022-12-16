<?php

declare(strict_types=1);

// basis verwijzing
const ROOT = "/DeNatteZeehond";

// classes
require_once("classes/DBConn.php");
require_once("classes/Pages.php");

// session_start wordt zo opgeroepen over de gehele website
session_start();

?>
<!-- html / pagina oproepen -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- bootstrap en eventueel eigen css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- icon -->
        <?php $page = Pages::getHeader(); ?>
        <?php if ($page == "home" || $page == "") : ?>
            <link rel="icon" href="images/">
        <?php else : ?>
            <link rel="icon" href="../images/">
        <?php endif; ?>
        
        <title>DeNatteZeehond</title>
    </head>

    <body>
        <!-- pages worden zo opgeroepen -->
        <?php
        $page = Pages::getHeader();
        require_once("required/header.php");

        if ($page == "Login" ) {
            require_once("pages/in-outlog/" . $page . ".php");
        } else {
            $page = empty($page) ? "Home" : $page;

            require_once("pages/" . $page . ".php");
        }

        require_once("required/footer.php");
        ?>
    </body>

</html>