<?php 
include '../lib/db.php';
include '../lib/constants.php';

$select= $db->query('SELECT * FROM agents ORDER BY nom ASC');
$agents=$select->fetchAll();

if (isset($_POST['nom'])&& isset($_POST['email'])) {
    
        $nom = $db-> quote($_POST['nom']);
        $email = $db-> quote($_POST['email']);
        $lieu= $db-> quote($_POST['lieu']);
        $tel = $db-> quote($_POST['tel']);
        $dat= $db-> quote($_POST['date']);
        $prenom = $db-> quote($_POST['prenom']);
      
        // $db->prepare("INSERT INTO message SET nom=:nom, email=:email, coment:=msg, tel=:tel",array(':nom'=>$_POST['nom'],':email'=>$_POST['email'],':coment'=>$_POST['msg'],':tel'=>$_POST['tel']));
        
        $sql=$db->query("INSERT INTO agents SET nom=$nom, prenom=$prenom, email=$email, lieu_naiss=$lieu, date_naiss=$dat, tel=$tel");
        
            
    }
    


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Gestion des dechets</title>

    <!-- Favicon-->
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
   <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
   <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />
   <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- Colorpicker Css -->
    <link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />
   <!-- Dropzone Css -->
    <link href="assets/plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="assets/plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="assets/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- JQuery DataTable Css -->
    <link href="assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="assets/css/themes/all-themes.css" rel="stylesheet" />

</head>

<body class="theme-red">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->

<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.php">GESTIONS DES DECHETS</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Tasks -->
                <li class="dropdown">
                    <ul class="dropdown-menu">
                        <li class="header">TASKS</li>
                        <li class="body">
                            <ul class="menu tasks">
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Footer display issue
                                            <small>32%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Make new buttons
                                            <small>45%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Create new dashboard
                                            <small>54%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Solve transition issue
                                            <small>65%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Answer GitHub questions
                                            <small>92%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Tasks -->
                <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="assets/images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Experts</div>
                
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li >
                    <a href="index.php">
                        <i class="material-icons">home</i>
                        <span>Accueil</span>
                    </a>
                </li>
                <li>
                    <a href="paiement.php">
                        <i class="material-icons">assignment</i>
                        <span>Gestion Paiements</span>
                    </a>
                </li>
                <li class="active">
                    <a href="agents.php">
                        <i class="material-icons">assignment</i>
                        <span>Gestion Agents</span>
                    </a>
                </li>
                <li>
                    <a href="https://dashboard.tawk.to/#/dashboard" target="_blank">
                        <i class="material-icons">message</i>
                        <span>Alert Messages</span>
                    </a>
                </li>
                <li>
                    <a href="reparateur.php">
                        <i class="material-icons"> person_pin</i>
                        <span>Réparatuers</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2019 - 2020 <a href="javascript:void(0);">Gestion des déchets</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->

    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red" class="active">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="pink">
                        <div class="pink"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme="indigo">
                        <div class="indigo"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="light-blue">
                        <div class="light-blue"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="teal">
                        <div class="teal"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="light-green">
                        <div class="light-green"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme="lime">
                        <div class="lime"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme="yellow">
                        <div class="yellow"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme="amber">
                        <div class="amber"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="brown">
                        <div class="brown"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme="grey">
                        <div class="grey"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2></h2>
            </div>

            <!-- GESTION DES PAIEMENTS  FORMULAIRE -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                 GESTIONS DES AGENTS
                            </h2>
                        </div>
                        <div class="body">
                            <form action="" method="post">
                                 <div class="row">
                                      <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">Nom :</span>
                                            <div class="form-line">
                                                <input name="nom" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">Prenom :</span>
                                            <div class="form-line">
                                                <input name="prenom" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">Date de naissance :</span>
                                            <div class="form-line">
                                                <input  name="date" type="date" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                      </div>
</div>
                                    <div class="row">
                                      <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">Lieu de naissance :</span>
                                            <div class="form-line">
                                                <input  name="lieu" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-md-3">
                                        <div class="input-group">
                                            <label class="input-group-addon">Email :</label>
                                            <div class="form-line">
                                                <input name="email" type="email" class="form-control date" >
                                            </div>
                                            <span class="input-group-addon"></span>
                                        </div>
                                      </div>
                                      <div class="col-md-3">
                                        <div class="input-group">
                                            <label class="input-group-addon">Telephone :</label>
                                            <div class="form-line">
                                                <input name="tel" type="text" class="form-control date" >
                                            </div>
                                            <span class="input-group-addon"></span>
                                        </div>
                                      </div>

                                      <div class="row">
                            
                                       
                                        
                                           <button style="margin-right:20px;"   class="btn btn-primary waves-effect" type="submit">Ajouter</button>
                                          
                                       
                                         
                                           <button class="btn btn-danger waves-effect" type="reset">Vider</button>
                                            
                                        
                    
                                         </div>  
                                      </div>
                                 </div>
                                 
                              </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# GESTIONS DES AGENTS  FORMULAIRE -->

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LISTES DES AGENTS
                            </h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                             <th>Nom et Prenom</th>
                                            <th>Lieu de naissance</th>
                                            <th>Date de naissance</th>
                                            <th>Email</th>
                                            <th>Telephone</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php foreach($agents as $agent): ?>
                                    <tr>
                                        <td><?= $agent['nom']; ?></td>
                                        <td><?= $agent['lieu_naiss']; ?></td>
                                        <td><?= $agent['date_naiss']; ?></td>
                                        <td><?= $agent['email']; ?></td>
                                        <td><?= $agent['tel']; ?></td>
                                        
                                    </tr>
                                <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->

        </div>
    </section>
    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="assets/js/demo.js"></script>



    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
    <!-- Select Plugin Js -->
    <script src="assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Bootstrap Colorpicker Js -->
    <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <!-- Dropzone Plugin Js -->
    <script src="assets/plugins/dropzone/dropzone.js"></script>
    <!-- Input Mask Plugin Js -->
    <script src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
    <!-- Multi Select Plugin Js -->
    <script src="assets/plugins/multi-select/js/jquery.multi-select.js"></script>
    <!-- Jquery Spinner Plugin Js -->
    <script src="assets/plugins/jquery-spinner/js/jquery.spinner.js"></script>
    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <!-- noUISlider Plugin Js -->
    <script src="assets/plugins/nouislider/nouislider.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/forms/advanced-form-elements.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <script src="assets/js/pages/tables/jquery-datatable.js"></script>
    <!-- Demo Js -->
    <script src="assets/js/demo.js"></script>

</body>

</html>