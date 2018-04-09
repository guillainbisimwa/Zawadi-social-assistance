<?php


    // configuration
    require("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

            if (empty($_POST["art"]))
            {
                //login vide
                echo '<div  class="alert alert-danger cl"><button type="button" aria-hidden="true" class="close cll" data-notify="dismiss">×</button>
                      <span><b> Erreur - </b> Veillez selectionner un article s.v.p</span></div>
                      <script  type=text/javascript>$(".cll").click(function(){
                        $(".cl").css("display","none");
                      })</script>';
                exit;

            }
            else if (empty($_POST["tot"]))
            {
              echo '<div  class="alert alert-danger cl"><button type="button" aria-hidden="true" class="close cll" data-notify="dismiss">×</button>
                    <span><b> Erreur - </b> Veillez entre le nombre valide s.v.p</span></div>
                    <script  type=text/javascript>$(".cll").click(function(){
                      $(".cl").css("display","none");
                    })</script>';
              exit;
            }
            else if (empty($_POST["code"]))
            {
              echo '<div  class="alert alert-danger cl"><button type="button" aria-hidden="true" class="close cll" data-notify="dismiss">×</button>
                    <span><b> Erreur - </b> Veillez selectionner un client s.v.p</span></div>
                    <script  type=text/javascript>$(".cll").click(function(){
                      $(".cl").css("display","none");
                    })</script>';
              exit;
            }
            echo "INSERT INTO transaction_tab (somm, code) VALUES (?,?), ".$_POST["tot"] ." ". $_POST["code"] ;

  if(query("INSERT INTO client_tab (nom_client, mail, num_transaction) VALUES (?, ?, ?)", $_POST["nom_client"], $_POST["mail"],$usnr )=== false)


              if(query("INSERT INTO transaction_tab (somm,code) VALUES (?,?)", $_POST["tot"], $_POST["code"] )=== false)
              {

                echo '<div  class="alert alert-danger cl"><button type="button" aria-hidden="true" class="close cll" data-notify="dismiss">×</button>
                        <span><b> Erreur - </b> une erreur inatendu</span></div>
                        <script  type=text/javascript>$(".cll").click(function(){
                          $(".cl").css("display","none");
                        })</script>';
              }
              else {

                //render("clients_form.php", ["title" => "Enregistrer un client","table" => $table]);
                        echo "<script  type=text/javascript>
                        guy.showNotificationSucces('top','right','<b> REUSSITE - </b> vente avec success');
                        </script>";
                        exit;
              }

            echo '<div  class="alert alert-danger cl"><button type="button" aria-hidden="true" class="close cll" data-notify="dismiss">×</button>
                  <span><b> Erreur - </b> Veillez valider tous les champs s.v.p</span></div>
                  <script  type=text/javascript>$(".cll").click(function(){
                    $(".cl").css("display","none");
                  })</script>';
            exit;


    }
    else
    {



      $table = query("SELECT * FROM client_tab ");
    render("vente_form.php", ["title" => "Vente", "table" => $table]);
	}



?>
