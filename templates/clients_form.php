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
        <a href="vente.php">
            <i class="material-icons">content_paste</i>
            <p>SMS Viwer</p>
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
                <input type="text" class="form-control" placeholder="Search">
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

                                <li class="">
                                    <a href="#modification" data-toggle="tab">
                                        <i class="material-icons">edit</i> Modifier Clients
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
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
                													<th data-name="firstName">First Name</th>
                													<th data-name="lastName">Last Name</th>
                													<th data-name="jobTitle" data-breakpoints="xs">Job Title</th>
                													<th data-name="startedOn" data-breakpoints="xs sm" data-type="date" data-format-string="MMMM Do YYYY">Started On</th>
                													<th data-name="dob" data-breakpoints="xs sm md" data-type="date" data-format-string="MMMM Do YYYY">Date of Birth</th>
                												</tr>
                												</thead>
                												<tbody>
                												<tr data-expanded="true">
                													<td>1</td>
                													<td>Dennise</td>
                													<td>Fuhrman</td>
                													<td>High School History Teacher</td>
                													<td>November 8th 2011</td>
                													<td>July 25th 1960</td>
                												</tr>
                												<tr>
                													<td>2</td>
                													<td>Elodia</td>
                													<td>Weisz</td>
                													<td>Wallpaperer Helper</td>
                													<td>October 15th 2010</td>
                													<td>March 30th 1982</td>
                												</tr>
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
                														<input type="number" id="id" name="id" class="hidden"/>

                														<div class="form-group required">
                                              <div class="col-sm-6">
                                                <label for="" class=" control-label pull-left"> Nom complet du parent: </label>
                																<input type="text" class="form-control" id="nom_parent" name="nom_parent" placeholder="Nom complet du parent" required>
                															</div>
                                              <div class="col-sm-2">
                                                <label for="" class=" control-label pull-left"> Age: </label>
                                                <input type="text" class="form-control" id="age" name="age" placeholder="age" required>
                                              </div>
                                              <div class="col-sm-2">
                                                <label for="" class=" control-label pull-left"> Genre: </label>
                                                <select class="form-control" id="genre" name="genre" placeholder="genre" required>
                                                  <option></option>
                                                  <option>F</option>
                                                  <option>M</option>
                                                </select>
                                              </div>
                                              <div class="col-sm-2">
                                                <label for="" class=" control-label pull-left"> Etat civil: </label>
                                                <select class="form-control" id="etat_civil" name="etat_civil" placeholder="Etat civil" required>
                                                  <option></option>
                                                  <option>M</option>
                                                  <option>C</option>
                                                  <option>D</option>
                                                  <option>V</option>
                                                </select>
                                              </div>
                                            </div>

                														<div class="row">
                                              <div class="col-sm-6">
                                                <div class="col-m-12">
                                                  <div class="form-group required">
                                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Téléphone" >
                                                  </div>
                                                </div>
                                                <div class="col-m-12">
                                                  <div class="form-group required">
                                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Téléphone" >
                                                  </div>
                                                </div>

                                                <div class="col-m-12">
                                                  <div class="form-group required">
                                                    <input type="text" class="form-control" id="Fonction" name="Fonction" placeholder="Fonction" >
                                                  </div>
                                                </div>

                                                <div class="col-m-12">
                                                   <div class="form-group required">
                                                      <textarea class="form-control" placeholder="Adresse" rows="2" ></textarea>
                                                    </div>
                                                </div>

                                              </div>

                                              <div class="col-sm-6">
                                                <div class="col-sm-12">
                                                  <div class="form-group required">
                                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Téléphone" >
                                                  </div>
                                                </div>

                                                <div class="col-sm-12">
                                                  <textarea class="form-control" placeholder="Adresse" rows="2" ></textarea>
                                                </div>
                                              </div>
                                            </div>

                                              <div class="col-sm-6">
                                                <label for="" class=" control-label pull-left"> Adresse11: </label>
                                                <textarea class="form-control" placeholder="Adresse00" rows="2" ></textarea>
                                              </div>

                														<div class="form-group">
                															<label for="jobTitle" class="col-sm-3 control-label">Job Title</label>
                															<div class="col-sm-9">
                																<input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Job Title">
                															</div>
                														</div>
                														<div class="form-group required">
                															<label for="startedOn" class="col-sm-3 control-label">Started On</label>
                															<div class="col-sm-9">
                																<input type="text" class="form-control" id="startedOn" name="startedOn" placeholder="Started On" required>
                															</div>
                														</div>
                														<div class="form-group">
                															<label for="dob" class="col-sm-3 control-label">Date of Birth</label>
                															<div class="col-sm-9">
                																<input type="text" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
                															</div>
                														</div>
                													</div>
                													<div class="modal-footer">
                														<button type="submit" class="btn btn-warning">Save changes</button>
                														<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                													</div>
                												</form>
                											</div>
                										</div>
                										<!--/Editor-->
                									</div>
                								</div>
                							</div>
                							</div>
                						</div>
                					</div>

<!-- <table></table> -->
                        </div>
                        <div class="tab-pane" id="messages">
                          <table id="data-table-basic" class="table table-hover">
                              <thead class="text-warning">
                                  <th>ID</th>
                                  <th>Nom complet</th>
                                  <th>Email</th>
                                  <th>Code</th>
                                  <th>Etat</th>
                              </thead>
                              <tbody>
                              <?php
                                  $id = 1;
                                foreach ($table as $row)
                                  {
                                      echo("<tr>");
                                      echo("<td>" . $id . "</td>");
                                      echo("<td>" . $row["nom_client"] . "</td>");
                                      echo("<td>" . $row["mail"] . "</td>");
                                      echo("<td>" . $row["num_transaction"] . "</td>");
                                       echo("<td>" . $row["etat_activation"] . "</td>");
                                      echo("</tr>");
                                      $id++;
                                    }
                                ?>


                              </tbody>
                          </table>
                        </div>
                        <div class="tab-pane" id="settings">

                        </div>

                        <div class="tab-pane" id="modification">


                          <div class="row">
                                          <div class="col-md-3"></div>
                                        <div class="col-md-6">

                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Selectionner clients</label>

                                                    <select type="text" class="form-control">
                                                      <option></option>
                                                      <option>123</option>
                                                      <option>456</option>
                                                      <option>789</option>
                                                      <option>111</option>

                                                    </select>
                                                <span class="material-input"></span><span class="material-input"></span></div>
                                        </div>
                                        <div class="col-md-3"></div>
                          </div>
                          <div class="row">
                                          <div class="col-md-3"></div>
                                        <div class="col-md-6">

                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Nom clients</label>
                                                    <input type="text" class="form-control">
                                                <span class="material-input"></span><span class="material-input"></span></div>
                                        </div>
                                        <div class="col-md-3"></div>
                          </div>
                          <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                              <div class="form-group label-floating is-empty">
                                  <label class="control-label">Address mail</label>
                                  <input type="text" class="form-control">
                              <span class="material-input"></span><span class="material-input"></span></div>
                              </div>
                              <div class="col-md-3"></div>
                          </div>
                          <a href="#pablo" class="btn btn-primary btn-round" style="margin:  auto;display:  table;">
                            MODIFIER<div class="ripple-container"></div></a>
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
