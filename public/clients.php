<?php

    // configuration
    require("../includes/config.php");
    $table = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      echo '<script src="js/demo.js"></script>';


      if (empty($_POST["nom_parent"]))
      {
        echo "Veillez entrer le nom_parent  s.v.p <br>";
        exit;
      }
      else if (empty($_POST["Age"]))
      {
        echo "Veillez entrer le age  s.v.p <br>";

        exit;
      }
      else if (empty($_POST["genre"]))
      {
        echo "Veillez entrer le genre  s.v.p <br>";

        exit;
      }
      else if (empty($_POST["etat_civil"]))
      {
        echo "Veillez entrer le etat civil  s.v.p <br>";

        exit;
      }
      else if (empty($_POST["Telephone"]))
      {
        echo "Veillez entrer le telephone  s.v.p <br>";

        exit;
      }
      else if (empty($_POST["Fonction"]))
      {
        echo "Veillez entrer le fonction  s.v.p <br>";

        exit;
      }
      else if (empty($_POST["Adresse"]))
      {
        echo "Veillez entrer le adress  s.v.p <br>";

        exit;
      }
      else if (empty($_POST["niv_rev"]))
      {
        echo "Veillez entrer le Niveau revnue  s.v.p <br>";

        exit;
      }
      else if (empty($_POST["taille_menage"]))
      {
        echo "Veillez entrer le taille_menage  s.v.p <br>";

        exit;
      }
      else if (empty($_POST["t_m_g"]))
      {
        echo "Veillez entrer le t_m_g  s.v.p <br>";

        exit;
      }
      else if (empty($_POST["t_m_f"]))
      {
        echo "Veillez entrer le t_m_f  s.v.p <br>";

        exit;
      }
      else if (empty($_POST["enf_sco"]))
      {
        echo "Veillez entrer le enf_sco  s.v.p <br>";

        exit;
      }
      else if (empty($_POST["enf_sco_g"]))
      {
        echo "Veillez entrer le enf_sco_g  s.v.p <br>";

        exit;
      }
      else if (empty($_POST["enf_sco_f"]))
      {
        echo "Veillez entrer le enf_sco_f  s.v.p <br>";

        exit;
      }
      else if (empty($_POST["enf_zsa"]))
      {
        echo "Veillez entrer le enf_zsa  s.v.p <br>";

        exit;
      }
      else if (empty($_POST["enf_zsa_g"]))
      {
        echo "Veillez entrer le enf_zsa_g  s.v.p <br>";

        exit;
      }
      else if (empty($_POST["enf_zsa_f"]))
      {
        echo "Veillez entrer le enf_zsa_f  s.v.p <br>";

        exit;
      }

//       nom_parent =
// Age =
// genre =
// etat_civil =
// Telephone =
// Fonction =
// Adresse =
// niv_rev =
// taille_menage =
// t_m_g =
// t_m_f =
// enf_sco =
// enf_sco_g =
// enf_sco_f =
// enf_zsa =
// enf_zsa_g =
// enf_zsa_f =

      //echo "INSERT INTO parent_tab (nom_parent,Age,genre,etat_civil,Telephone,Fonction,Adresse,niv_rev,taille_menage,t_m_g,t_m_f,
        //enf_sco,enf_sco_g,enf_sco_f,enf_zsa,enf_zsa_g,enf_zsa_f) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

      // query database for user
      $rows = query("SELECT * FROM parent_tab WHERE  nom_parent = ? or Telephone = ?", $_POST["nom_parent"], $_POST["Telephone"]);
      if (count($rows) == 0)
      {
        if(query("INSERT INTO parent_tab (nom_parent,Age,genre,etat_civil,Telephone,Fonction,Adresse,niv_rev,taille_menage,t_m_g,t_m_f,
          enf_sco,enf_sco_g,enf_sco_f,enf_zsa,enf_zsa_g,enf_zsa_f) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
          ",$_POST["nom_parent"],$_POST["Age"],$_POST["genre"],$_POST["etat_civil"],$_POST["Telephone"],$_POST["Fonction"],$_POST["Adresse"],
          $_POST["niv_rev"],$_POST["taille_menage"],$_POST["t_m_g"],$_POST["t_m_f"],$_POST["enf_sco"],
          $_POST["enf_sco_g"],$_POST["enf_sco_f"],$_POST["enf_zsa"],$_POST["enf_zsa_g"],$_POST["enf_zsa_f"]
           )=== false)
        {
            echo "Erreur <br>";

            exit;
        }
        else {
          //$table = query("SELECT * FROM parent_tab ");
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
        $table = query("SELECT * FROM parent_tab ");
    render("clients_form.php", ["title" => "Enregistrer un client","table" => $table]);
	}



?>
