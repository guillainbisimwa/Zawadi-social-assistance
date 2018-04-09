<?php

    /**
     * config.php
     *
     * Guillain BISIMWA
     * March 2018, goma, RDC
     *
     * Configures pages.
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("constants.php");
    require("functions.php");

    // enable sessions
    session_start();

    // require authentication for most pages

?>
