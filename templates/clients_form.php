<?php
    if(isset($_SESSION['id_u'])){
      //echo "session setted";
    }
    else header("Location: " . "logout.php");
    //echo "non session";
?>
<ul class="nav" >
    <li class="">
        <a href="index.php">
            <i class="material-icons">dashboard</i>
            <p>TABLEAU DE BORD</p>
        </a>
    </li>
    <li>
        <a href="assistance_sco.php">
            <i class="material-icons">person</i>
            <p>Assistance Scolaire</p>
        </a>
    </li>
    <li>
        <a href="assistance_ped.php">
            <i class="material-icons">person</i>
            <p>Assistance pedagogique</p>
        </a>
    </li>
    <li class="active">
        <a href="clients.php">
            <i class="material-icons">person</i>
            <p>Identification</p>
        </a>
    </li>
    <li>
        <a href="tontine.php">
            <i class="material-icons">content_paste</i>
            <p>Tontine</p>
        </a>
    </li>
    <li>
        <a href="">
            <i class="material-icons">library_books</i>
            <p>Rapport</p>
        </a>
    </li>
    <li>
        <a href="logout.php" class="red">
            <i class="material-icons">info_outline</i>
            <p>Deconnexion</p>
        </a>
    </li>
</ul>
</div>
</div>
<div class="main-panel">
<nav class="navbar navbar-transparent navbar-absolute">
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"> GESTION DES CLIENTS </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">dashboard</i>
                    <p class="hidden-lg hidden-md">Dashboard</p>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">person</i>
                    <span class="notification suc"></span>
                    <p class="hidden-lg hidden-md">Notifications</p>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"> <?php if(isset($_SESSION['login'])){
                            echo "ONLINE ".$_SESSION['login'];
                          }?></a>
                    </li>
                    <li class="red">
                        <a href="logout.php">Se deconnecter</a>
                    </li>

                </ul>
            </li>

        </ul>
        <form class="navbar-form navbar-right" role="search">
            <div class="form-group  is-empty">
                <input autocomplete="off" type="text" class="form-control" placeholder="Search">
                <span class="material-input"></span>
            </div>
            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
            </button>
        </form>
    </div>
</div>
</nav>
<div class="content">
<div class="container-fluid">


    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card card-nav-tabs">
                <div class="card-header" data-background-color="purple">
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <span class="nav-tabs-title"></span>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active">
                                    <a href="#profile" data-toggle="tab">
                                        <i class="material-icons">save</i> Identification des parents
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#messages" data-toggle="tab">
                                        <i class="material-icons">person</i> Identification des élèves
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <!-- <li class="">
                                    <a href="#settings" data-toggle="tab">
                                        <i class="material-icons">liste</i> Historique d'achat
                                        <div class="ripple-container"></div>
                                    </a>
                                </li> -->

                                <!-- <li class="">
                                    <a href="#modification" data-toggle="tab">
                                        <i class="material-icons">edit</i> Modifier Clients
                                        <div class="ripple-container"></div>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="tab-content">
                        <div class="tab-pane active" id="profile">

                          <div class="row">
                						<div class="col-sm-12">
                							<div class="panel panel-default card-view">

                								<div class="panel-wrapper collapse in">
                									<div class="panel-body">
                										<div class="table-wrap">
                											<table id="footable_2" class="table" data-paging="true" data-filtering="true" data-sorting="true">
                												<thead>
                												<tr>
                                          <th data-name="id" data-breakpoints="xs" data-type="number">ID</th>
                                          <th data-name="nom_parent">Nom du parent</th>
                                          <th data-name="Age" data-breakpoints="xs sm md lg">Age</th>
                                          <th data-name="genre" data-breakpoints="xs sm md lg">Genre</th>
                                          <th data-name="etat_civil" data-breakpoints="xs sm md lg">Etat civil</th>
                                          <th data-name="Telephone">Telephone</th>
                                          <th data-name="Fonction" data-breakpoints="xs sm md lg">Fonction</th>
                                          <th data-name="Adresse" data-breakpoints="xs sm md lg">Adresse</th>
                                          <th data-name="niv_rev">Revenue</th>
                                          <th data-name="taille_menage">Taille menage</th>
                                          <th data-name="t_m_g" data-breakpoints="xs sm md lg">Garçons menage</th>
                                          <th data-name="t_m_f" data-breakpoints="xs sm md lg">Filles menage</th>
                                          <th data-name="enf_sco">Enfants scolarisés</th>
                                          <th data-name="enf_sco_g" data-breakpoints="xs sm md lg">Garçons scolarisés</th>
                                          <th data-name="enf_sco_f" data-breakpoints="xs sm md lg">Filles scolarisées</th>
                                          <th data-name="enf_zsa">Enfant zsa</th>
                                          <th data-name="enf_zsa_g" data-breakpoints="xs sm md lg">Garçons ZSA</th>
                                          <th data-name="enf_zsa_f" data-breakpoints="xs sm md lg">FILLES zsa</th>
                                          <th data-name="code_zsa" >Code zsa</th>
                												</tr>
                												</thead>
                												<tbody>
                                          <?php
                                              $id = 1;
                                            foreach ($table_parent as $row)
                                              {
                                                  echo("<tr data-expanded='false'>");
                                                  echo("<td>" . $id . "</td>");
                                                  echo("<td>" . $row["nom_parent"] . "</td>");
                                                  echo("<td>" . $row["Age"] . "</td>");
                                                  echo("<td>" . $row["genre"] . "</td>");
                                                  echo("<td>" . $row["etat_civil"] . "</td>");
                                                  echo("<td>" . $row["Telephone"] . "</td>");
                                                  echo("<td>" . $row["Fonction"] . "</td>");
                                                  echo("<td>" . $row["Adresse"] . "</td>");
                                                  echo("<td>" . $row["niv_rev"] . "</td>");
                                                  echo("<td>" . $row["taille_menage"] . "</td>");
                                                  echo("<td>" . $row["t_m_g"] . "</td>");
                                                  echo("<td>" . $row["t_m_f"] . "</td>");
                                                  echo("<td>" . $row["enf_sco"] . "</td>");
                                                  echo("<td>" . $row["enf_sco_g"] . "</td>");
                                                  echo("<td>" . $row["enf_sco_f"] . "</td>");
                                                  echo("<td>" . $row["enf_zsa"] . "</td>");
                                                  echo("<td>" . $row["enf_zsa_g"] . "</td>");
                                                  echo("<td>" . $row["enf_zsa_f"] . "</td>");

                                                  echo("</tr>");
                                                  $id++;
                                                }
                                            ?>
                												</tbody>
                											</table>

                											<!--Editor-->
                											<div class="modal fade" id="editor-modal" tabindex="-1" role="dialog" aria-labelledby="editor-title">

                											<div class="modal-dialog modal-lg" role="document">
                												<form class="modal-content form-horizontal" id="editor">
                													<div class="modal-header">
                														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                														<h5 class="modal-title" id="editor-title">Ajouter un parent</h5>
                													</div>
                													<div class="modal-body">
                														<input autocomplete="off" type="number" id="id" name="id" class="hidden"/>

                														<div class="form-group1 required1">
                                              <div class="col-md-6">
                                                      <div class="form-group label-floating is-empty">
                                                          <label class="control-label">Nom complet du parent:</label>
                                                          <input autocomplete="off" id="nom_parent1" name="nom_parent" type="text" class="form-control" autocomplete="off">
                                                      <span class="material-input"></span></div>
                                              </div>

                                              <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Age</label>
                                                    <input autocomplete="off" id="Age" type="text" class="form-control">
                                                <span class="material-input"></span></div>
                                              </div>
                                              <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Genre</label>
                                                    <select class="form-control" id="genre" name="genre" placeholder="genre" required>
                                                      <option></option>
                                                      <option>F</option>
                                                      <option>M</option>
                                                    </select>
                                                <span class="material-input"></span></div>
                                              </div>

                                              <div class="col-sm-2">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Etat civil</label>
                                                    <select class="form-control" id="etat_civil" name="etat_civil" required>
                                                      <option></option>
                                                      <option>M</option>
                                                      <option>C</option>
                                                      <option>D</option>
                                                      <option>V</option>
                                                    </select>
                                                <span class="material-input"></span></div>
                                              </div>
                                            </div>

                														<div class="row">
                                              <div class="col-sm-6">
                                                <div class="col-m-12">
                                                  <div class="form-group label-floating is-empty">
                                                      <label class="control-label">Telephone</label>
                                                      <input autocomplete="off" id="Telephone" name="Telephone" type="text" class="form-control">
                                                  <span class="material-input"></span></div>
                                                </div>

                                                <div class="col-m-12">
                                                  <div class="form-group label-floating is-empty">
                                                      <label class="control-label">Fonction</label>
                                                      <input autocomplete="off" id="Fonction" name="Fonction" type="text" class="form-control">
                                                  <span class="material-input"></span></div>
                                                </div>

                                                <div class="col-m-12">
                                                   <!-- <div class="form-group required">
                                                      <textarea class="form-control" placeholder="Adresse" rows="4" ></textarea>
                                                    </div> -->
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Adresse</label>
                                                        <textarea class="form-control" id="Adresse" name="Adresse" rows="4" ></textarea>
                                                    <span class="material-input"></span></div>
                                                </div>
                                              </div>

                                              <div class="col-sm-6">
                                                <div class="col-sm-12">
                                                  <div class="form-group label-floating is-empty">
                                                      <label class="control-label">Niveau de revenue / mois</label>
                                                      <input autocomplete="off" id="niv_rev" name="niv_rev" type="text" class="form-control">
                                                  <span class="material-input"></span></div>
                                                </div>

                                                <div class="col-sm-4">
                                                  <div class="form-group label-floating is-empty">
                                                      <label class="control-label">Taille menage</label>
                                                      <input autocomplete="off" id="taille_menage" name="taille_menage" type="text" class="form-control">
                                                  <span class="material-input"></span></div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group label-floating is-empty">
                                                      <label class="control-label">Garcons</label>
                                                      <input autocomplete="off" id="t_m_g" name="t_m_g" type="text" class="form-control">
                                                  <span class="material-input"></span></div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group label-floating is-empty">
                                                      <label class="control-label">Filles</label>
                                                      <input autocomplete="off" id="t_m_f" name="t_m_f" type="text" class="form-control">
                                                  <span class="material-input"></span></div>
                                                </div>

                                                <div class="col-sm-4">
                                                  <div class="form-group label-floating is-empty">
                                                      <label class="control-label">Enfants scolarisés</label>
                                                      <input autocomplete="off" id="enf_sco" name="enf_sco" type="text" class="form-control">
                                                  <span class="material-input"></span></div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group label-floating is-empty">
                                                      <label class="control-label">Garcons</label>
                                                      <input autocomplete="off" id="enf_sco_g" name="enf_sco_g" type="text" class="form-control">
                                                  <span class="material-input"></span></div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group label-floating is-empty">
                                                      <label class="control-label">Filles</label>
                                                      <input autocomplete="off" id="enf_sco_f" name="enf_sco_f" type="text" class="form-control">
                                                  <span class="material-input"></span></div>
                                                </div>

                                                <div class="col-sm-4">
                                                  <div class="form-group label-floating is-empty">
                                                      <label class="control-label">Enfants au ZSA</label>
                                                      <input autocomplete="off" id="enf_zsa" name="enf_zsa" type="text" class="form-control">
                                                  <span class="material-input"></span></div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group label-floating is-empty">
                                                      <label class="control-label">Garcons</label>
                                                      <input autocomplete="off" id="enf_zsa_g" name="enf_zsa_g" type="text" class="form-control">
                                                  <span class="material-input"></span></div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group label-floating is-empty">
                                                      <label class="control-label">Filles</label>
                                                      <input autocomplete="off" id="enf_zsa_f" name="enf_zsa_f" type="text" class="form-control">
                                                  <span class="material-input"></span></div>
                                                </div>
                                              </div>
                                            </div>
                                            <div id="affreslt_aut2">000</div>

                													</div>
                													<div class="modal-footer">
                														<button id="enr_cli" type="submit" class="btn btn-warning">Enregistrer</button>
                														<button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                													</div>
                												</form>
                											</div>
                										</div>
                										<!--/Editor-->
                                    <div id="affreslt_aut"></div>

                									</div>
                								</div>
                							</div>
                							</div>
                						</div>
                					</div>

<!-- <table></table> -->
                        </div>


















                        <div class="tab-pane" id="messages">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="panel panel-default card-view">

                              <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                  <div class="table-wrap">
                                    <table id="elev_footable_2" class="table" data-paging="true" data-filtering="true" data-sorting="true">
                                      <thead>
                                      <tr>
                                        <th data-name="elev_id" data-breakpoints="xs" data-type="number">ID</th>
                                        <th data-name="elev_nom_eleve">Nom eleve</th>
                                        <th data-name="elev_Age" data-breakpoints1="xs sm md lg">Age</th>
                                        <th data-name="elev_genre" data-breakpoints1="xs sm md lg">Genre</th>
                                        <th data-name="elev_matricule" data-breakpoints1="xs sm md lg">Matricule</th>
                                        <th data-name="elev_degre">Degré</th>
                                        <th data-name="elev_class" data-breakpoints1="xs sm md lg">Classe</th>
                                        <th data-name="elev_id_parent" data-breakpoints="xs sm md lg">Parent</th>
                                        <th data-name="elev_id_ecole">Ecole</th>

                                      </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                            $id = 1;
                                          foreach ($table_eleve as $row)
                                            {

                                                echo("<tr data-expanded='false'>");
                                                echo("<td>" . $id . "</td>");
                                                echo("<td>" . $row["nom_eleve"] . "</td>");
                                                echo("<td>" . $row["Age"] . "</td>");
                                                echo("<td>" . $row["genre"] . "</td>");
                                                echo("<td>" . $row["matricule"] . "</td>");
                                                echo("<td>" . $row["degre"] . "</td>");
                                                echo("<td>" . $row["class"] . "</td>");
                                                echo("<td>" . $row["id_parent"] . "</td>");
                                                echo("<td>" . $row["id_ecole"] . "</td>");

                                                echo("</tr>");
                                                $id++;
                                              }
                                          ?>
                                      </tbody>
                                    </table>

                                    <!--Editor-->
                                    <div class="modal fade" id="elev_editor-modal" tabindex="-1" role="dialog" aria-labelledby="editor-title">

                                    <div class="modal-dialog modal-lg" role="document">
                                      <form class="modal-content form-horizontal" id="elev_editor">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                          <h5 class="modal-title" id="elev_editor-title">Ajouter un Elève</h5>
                                        </div>
                                        <div class="modal-body">
                                          <input autocomplete="off" type="number" id="elev_id" name="id" class="hidden"/>

                                          <div class="form-group1 required1">
                                          <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Nom du parent</label>
                                                <select class="form-control" id="elev_id_parent" name="elev_id_parent" placeholder="Nom du parent" required>
                                                  <option></option>
                                                  <?php
                                                    foreach ($table_parent as $row)
                                                    {
                                                      $id_p = $row["id_c"];
                                                      echo("<option value='$id_p'>" . $row["nom_parent"] . "</option>");
                                                    }
                                                  ?>

                                                </select>
                                              <span class="material-input"></span>
                                            </div>
                                          </div>

                                          <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Ecole</label>
                                                <select class="form-control" id="elev_id_ecole" name="elev_id_ecole" placeholder="Ecole" required>
                                                  <option></option>
                                                  <option value="1">EP MATUNDA 1</option>
                                                  <option value="2">EP MATUNDA 2</option>
                                                  <option value="3">EP SABINYO</option>
                                                  <option value="4">EP MONT CARMEL</option>
                                                </select>
                                              <span class="material-input"></span>
                                            </div>
                                          </div>

                                          <div class="col-md-6">
                                                  <div class="form-group label-floating is-empty">
                                                      <label class="control-label">Nom complet de l'Elève:</label>
                                                      <input autocomplete="off" id="elev_nom_eleve" name="elev_nom_eleve" type="text" class="form-control" autocomplete="off">
                                                  <span class="material-input"></span></div>
                                          </div>

                                          <div class="col-md-6">
                                                  <div class="form-group label-floating is-empty">
                                                      <label class="control-label">Matricule:</label>
                                                      <input autocomplete="off" id="elev_matricule" name="elev_matricule" type="text" class="form-control" autocomplete="off">
                                                  <span class="material-input"></span></div>
                                          </div>



                                            <div class="col-sm-3">
                                              <div class="form-group label-floating is-empty">
                                                  <label class="control-label">Age</label>
                                                  <input autocomplete="off" id="elev_Age" type="text" class="form-control">
                                              <span class="material-input"></span></div>
                                            </div>
                                            <div class="col-sm-3">
                                              <div class="form-group label-floating is-empty">
                                                  <label class="control-label">Genre</label>
                                                  <select class="form-control" id="elev_genre" name="elev_genre" placeholder="" required>
                                                    <option></option>
                                                    <option>F</option>
                                                    <option>M</option>
                                                  </select>
                                                <span class="material-input"></span>
                                              </div>
                                            </div>

                                            <div class="col-sm-3">
                                              <div class="form-group label-floating is-empty">
                                                  <label class="control-label">Classe</label>
                                                  <select class="form-control" id="elev_class" name="elev_class" required>
                                                    <option></option>
                                                    <option value="1">1 ere</option>
                                                    <option value="2">2 eme</option>
                                                    <option value="3">3 eme</option>
                                                    <option value="4">4 eme</option>
                                                    <option value="5">5 eme</option>
                                                    <option value="6">6 eme</option>
                                                  </select>
                                              <span class="material-input"></span></div>
                                            </div>
                                            <div class="col-sm-3">
                                              <div class="form-group label-floating is-empty">
                                                  <label class="control-label">Degré</label>
                                                  <select class="form-control" id="elev_degre" name="elev_degre" placeholder="Degré" required>
                                                    <option></option>
                                                    <option>ELEMENTAIRE</option>
                                                    <option>MOYEN</option>
                                                    <option>SUPPERIEUR</option>
                                                  </select>
                                                <span class="material-input"></span>
                                              </div>
                                            </div>
                                          </div>


                                          <div id="elev_affreslt_aut2">000</div>

                                        </div>
                                        <div class="modal-footer">
                                          <button id="elev_enr_cli" type="submit" class="btn btn-warning">Enregistrer</button>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                  <!--/Editor-->
                                  <div id="elev_affreslt_aut"></div>

                                </div>
                              </div>
                            </div>
                            </div>
                          </div>
                        </div>

<!-- fin tab eleve-->
                        </div>
                        <div class="tab-pane" id="settings">

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

</div>
</div>
</body>
