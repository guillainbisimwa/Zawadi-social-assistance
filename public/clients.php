<?php


    // configuration
    require("../includes/config.php");
      $table = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

      if (empty($_POST["nom_client"]))
      {
          //login vide
          echo '<div  class="alert alert-danger cl"><button type="button" aria-hidden="true" class="close cll" data-notify="dismiss">×</button>
                <span><b> Erreur - </b> Veillez entre le nom du client s.v.p</span></div>
                <script  type=text/javascript>$(".cll").click(function(){
                  $(".cl").css("display","none");
                })</script>';
          exit;

      }
      else if (empty($_POST["mail"]))
      {
        echo '<div  class="alert alert-danger cl"><button type="button" aria-hidden="true" class="close cll" data-notify="dismiss">×</button>
              <span><b> Erreur - </b> Veillez entre le mail du client s.v.p</span></div>
              <script  type=text/javascript>$(".cll").click(function(){
                $(".cl").css("display","none");
              })</script>';
        exit;
      }
      srand(microtime()*10000);
      $usnr= rand(10000,99999);
      // query database for user
      $rows = query("SELECT * FROM client_tab WHERE  mail = ? or num_transaction = ?", $_POST["mail"], $usnr);
      if (count($rows) == 0)
      {


        if(query("INSERT INTO client_tab (nom_client, mail, num_transaction) VALUES (?, ?, ?)", $_POST["nom_client"], $_POST["mail"],$usnr )=== false)
        {

          echo '<div  class="alert alert-danger cl"><button type="button" aria-hidden="true" class="close cll" data-notify="dismiss">×</button>
                  <span><b> Erreur - </b> une erreur inatendu</span></div>
                  <script  type=text/javascript>$(".cll").click(function(){
                    $(".cl").css("display","none");
                  })</script>';
        }
        else {
          $table = query("SELECT * FROM client_tab ");
          //render("clients_form.php", ["title" => "Enregistrer un client","table" => $table]);
                  echo "<script  type=text/javascript>
                  guy.showNotificationSucces('top','right','<b> ".$_POST["nom_client"]." - </b> ajouté avec success');
                  </script>";
                  exit;
        }



      }
      else   {echo '<div  class="alert alert-danger cl"><button type="button" aria-hidden="true" class="close cll" data-notify="dismiss">×</button>
              <span><b> Erreur - </b> Ce client existe dans la base des donnees</span></div>
              <script  type=text/javascript>$(".cll").click(function(){
                $(".cl").css("display","none");
              })</script>';
        exit;}
      echo '<div  class="alert alert-danger cl"><button type="button" aria-hidden="true" class="close cll" data-notify="dismiss">×</button>
            <span><b> Erreur - </b> Veillez entre le nom et le mail du client s.v.p</span></div>
            <script  type=text/javascript>$(".cll").click(function(){
              $(".cl").css("display","none");
            })</script>';
      exit;
    }
    else
    {
        $table = query("SELECT * FROM client_tab ");
    render("clients_form.php", ["title" => "Enregistrer un client","table" => $table]);
	}



?>
