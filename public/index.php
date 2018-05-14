<?php


    // configuration
    require("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

    }
    else
    {
      $count_parent = query("SELECT count(*) as nbr FROM `parent_tab` WHERE 1");
      $count_eleve = query("SELECT count(*) as nbr FROM `eleve_tab` WHERE 1");
      $count_eleve_f = query("SELECT count(*) as nbr FROM `eleve_tab` WHERE `genre` = 'F' ");
      $count_eleve_g = query("SELECT count(*) as nbr FROM `eleve_tab` WHERE `genre` = 'G' ");

      render("index_form.php", ["title" => "Page d'acceuil", "count_eleve"=>$count_eleve ,
      "count_eleve_g"=>$count_eleve_g ,"count_eleve_f"=>$count_eleve_f , "count_parent"=>$count_parent]);
	}



?>
