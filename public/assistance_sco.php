<?php


    // configuration
    require("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

    }
    else
    {

      render("assistance_sco_form.php", ["title" => "Assisstance Scolaire"]);
	}



?>
