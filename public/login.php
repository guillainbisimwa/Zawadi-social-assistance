<?php
    // configuration
    require("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      if (empty($_POST["login"]))
      {
          //login vide
          echo "<script  type=text/javascript>
          guy.showNotificationerror('top','right','Veillez entre le login s.v.p');
          </script>";
          exit;

      }
      else if (empty($_POST["password"]))
      {
        echo "<script  type=text/javascript>
        guy.showNotificationerror('top','right','Veillez entre le mots de passe s.v.p');
        </script>";
        exit;
      }
      // query database for user
      $rows = query("SELECT * FROM user WHERE login = ? and password = ?", $_POST["login"], $_POST["password"]);

      // if we found user, check password
      if (count($rows) == 1)
      {
          // first (and only) row
          $row = $rows[0];
              // remember that user's now logged in by storing user's ID in session
              $_SESSION["id_u"] = $row["id_u"];
              $_SESSION["login"] = $row["login"];

              // redirect to index
              $location = "../public/index.php";
              echo '<script>';
              echo 'window.location.replace(" '.$location.' ");';
              echo '</script>';

      }
      echo "<script  type=text/javascript>
      guy.showNotificationerror('top','right','Login ou mots de passe invalide');
      </script>";
      exit;

    }
    else
    {
      render("login_form.php", ["title" => "Interface de connexion"]);
  	}
?>
