<?php

    // configuration
    require("../includes/config.php");
    $table = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

      if (empty($_POST["elev_nom_eleve"]))
      {
        echo "Veillez entrer le nom s.v.p <br>";
        exit;
      }
      else if (empty($_POST["elev_Age"]))
      {
        echo "Veillez entrer l'age  s.v.p <br>";
        exit;
      }
      else if (empty($_POST["elev_genre"]))
      {
        echo "Veillez entrer le genre s.v.p <br>";
        exit;
      }
      else if (empty($_POST["elev_matricule"]))
      {
        echo "Veillez entrer le matricule  s.v.p <br>";
        exit;
      }
      else if (empty($_POST["elev_degre"]))
      {
        echo "Veillez entrer le degre  s.v.p <br>";
        exit;
      }
      else if (empty($_POST["elev_class"]))
      {
        echo "Veillez entrer la class  s.v.p <br>";
        exit;
      }
      else if (empty($_POST["elev_id_parent"]))
      {
        echo "Veillez entrer le parent  s.v.p <br>";
        exit;
      }
      else if (empty($_POST["elev_id_ecole"]))
      {
        echo "Veillez entrer l'ecole  s.v.p <br>";
        exit;
      }

//elev_id
//elev_nom_eleve
//elev_Age
//elev_genre
//elev_matricule
//elev_degre
//elev_class
//elev_id_parent
//elev_id_ecole
      // query database for user
      $rows = query("SELECT * FROM eleve_tab WHERE  nom_eleve = ? or matricule = ?", $_POST["elev_nom_eleve"], $_POST["elev_matricule"]);
      if (count($rows) == 0)
      {
        if(query("INSERT INTO eleve_tab (nom_eleve,Age,genre,matricule,degre,class,id_parent,id_ecole)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
          ",$_POST["elev_nom_eleve"],$_POST["elev_Age"],$_POST["elev_genre"],$_POST["elev_matricule"],$_POST["elev_degre"],$_POST["elev_class"],$_POST["elev_id_parent"],
          $_POST["elev_id_ecole"])=== false)
        {
            echo "Une Erreur est survenue <br>";
            exit;
        }
        else {
            $table = query("SELECT * FROM eleve_tab ");
            echo "ok";
            exit;
        }

      }
      else {
        exit;
      }
    }
    else
    {
      $table_parent = query("SELECT * FROM parent_tab ");
      $table_eleve = query("SELECT * FROM eleve_tab ");
    render("clients_form.php", ["title" => "Enregistrer un client","table_parent" => $table_parent,"table_eleve" => $table_eleve]);
	}



?>
