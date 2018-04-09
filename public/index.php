<?php


    // configuration
    require("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

    }
    else
    {
    render("index_form.php", ["title" => "Page d'acceuil"]);
	}



?>
