<?php


    // configuration
    require("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

    }
    else
    {

      render("tontine_form.php", ["title" => "Tontine"]);
	}



?>
