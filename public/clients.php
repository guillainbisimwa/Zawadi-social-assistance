<?php


    // configuration
    require("../includes/config.php");
    $table = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

      if (empty($_POST["nom_parent"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entrer le nom_parent  s.v.p');
        </script>";
        exit;
      }
      else if (empty($_POST["Age"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entrer le Age  s.v.p');
        </script>";
        exit;
      }
      else if (empty($_POST["genre"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entrer le genre  s.v.p');
        </script>";
        exit;
      }
      else if (empty($_POST["etat_civil"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entrer le etat_civil  s.v.p');
        </script>";
        exit;
      }
      else if (empty($_POST["Telephone"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entrer le Telephone  s.v.p');
        </script>";
        exit;
      }
      else if (empty($_POST["Fonction"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entrer le Fonction  s.v.p');
        </script>";
        exit;
      }
      else if (empty($_POST["Adresse"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entrer le Adresse  s.v.p');
        </script>";
        exit;
      }
      else if (empty($_POST["niv_rev"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entrer le niv_rev  s.v.p');
        </script>";
        exit;
      }
      else if (empty($_POST["taille_menage"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entrer le taille_menage  s.v.p');
        </script>";
        exit;
      }
      else if (empty($_POST["t_m_g"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entrer le t_m_g  s.v.p');
        </script>";
        exit;
      }
      else if (empty($_POST["t_m_f"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entrer le t_m_f  s.v.p');
        </script>";
        exit;
      }
      else if (empty($_POST["enf_sco"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entrer le enf_sco  s.v.p');
        </script>";
        exit;
      }
      else if (empty($_POST["enf_sco_g"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entrer le enf_sco_g  s.v.p');
        </script>";
        exit;
      }
      else if (empty($_POST["enf_sco_f"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entrer le enf_sco_f  s.v.p');
        </script>";
        exit;
      }
      else if (empty($_POST["enf_zsa"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entrer le enf_zsa  s.v.p');
        </script>";
        exit;
      }
      else if (empty($_POST["enf_zsa_g"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entrer le enf_zsa_g  s.v.p');
        </script>";
        exit;
      }
      else if (empty($_POST["enf_zsa_f"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entrer le enf_zsa_f  s.v.p');
        </script>";
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
            echo "<script  type=text/javascript>
            guy.showNotificationerror('top','right','une erreur inatendue');
            </script>";
            exit;
        }
        else {
          $table = query("SELECT * FROM parent_tab ");
            echo "<script  type=text/javascript>
            guy.showNotificationSucces('top','right','<b> ".$_POST["nom_parent"]." - </b> ajouté avec success');
            </script>";
            exit;
        }

      }
      else {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','<b> Erreur - </b> Ce client existe dans la base des données');
        </script>";
        exit;
      }
    }
    else
    {
        $table = query("SELECT * FROM parent_tab ");
    render("clients_form.php", ["title" => "Enregistrer un client","table" => $table]);
	}



?>
