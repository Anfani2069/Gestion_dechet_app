<?php 
include 'lib/db.php';
include 'lib/constants.php';


if (isset($_POST['nom'])&& isset($_POST['email'])) {
    
        $nom = $db-> quote($_POST['nom']);
        $prenom = $db-> quote($_POST['prenom']);
        $email = $db-> quote($_POST['email']);
        $ile= $db-> quote($_POST['ile']);
        $adres= $db-> quote($_POST['adres']);
        $tel = $db-> quote($_POST['tel']);
        $prof = $db-> quote($_POST['prof']);
      
        // $db->prepare("INSERT INTO message SET nom=:nom, email=:email, coment:=msg, tel=:tel",array(':nom'=>$_POST['nom'],':email'=>$_POST['email'],':coment'=>$_POST['msg'],':tel'=>$_POST['tel']));
        
        $sql=$db->query("INSERT INTO reparateur SET nom=$nom,prenom=$prenom, email=$email, ile=$ile, tel=$tel, prof=$prof, adres=$adres");
        
            
    }
    

    
    ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Environement</title>
    <link rel="shortcut icon" href="images/logos/ascobef.jpg">
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">


    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="css/color/green.css">



    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="css/color/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="css/color/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="css/color/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="css/color/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="css/color/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="css/color/light-green.css" title="light-green">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>


    <!-- Modernizer js -->
    <script src="js/modernizr.custom.js"></script>


    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="index">


    <!-- Styleswitcher
================================================== -->
    <div class="colors-switcher">
        <a id="show-panel" class="hide-panel"><i class="fa fa-tint"></i></a>
        <ul class="colors-list">
            <li>
                <a title="Light Red" onClick="setActiveStyleSheet('light-red'); return false;" class="light-red"></a>
            </li>
            <li>
                <a title="Blue" class="blue" onClick="setActiveStyleSheet('blue'); return false;"></a>
            </li>
            <li class="no-margin">
                <a title="Light Blue" onClick="setActiveStyleSheet('light-blue'); return false;" class="light-blue"></a>
            </li>
            <li>
                <a title="Green" class="green" onClick="setActiveStyleSheet('green'); return false;"></a>
            </li>

            <li class="no-margin">
                <a title="light-green" class="light-green" onClick="setActiveStyleSheet('light-green'); return false;"></a>
            </li>
            <li>
                <a title="Yellow" class="yellow" onClick="setActiveStyleSheet('yellow'); return false;"></a>
            </li>

        </ul>

    </div>
    <!-- Styleswitcher End
================================================== -->

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Gestion des dechets</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                    <a class="active" href="index.php">Accueil</a>
                </li>
               

                <li>
                    <a class="active" href="#repare">Troc</a>
                </li>
                
                <li>
                    <a class="page-scroll" href="contact.php">Contact</a>
                </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    
    <section id="repare" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>S'incrire en tant que reparateur</h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" id="contactForm" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nom *" name="nom" id="nom" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Prenom *" name="prenom" id="nom" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                <select name="ile" id="" class="form-control" required="required">
                                    <option value="">Ngazidja</option>
                                    <option value="">Mwali</option>
                                    <option value="">Anjouan</option>
                                    <option value="">Mayotte</option>
                                    
                                
                                </select>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="adresse *" name="adres" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="email*" name="email" id="email" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="profession *" name="prof" id="prof" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Telephone *" name="tel" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                
                            </div>
                          
                        </div>

                        <button type="submit" class="btn btn-primary">S'inscrire</button>
                    </form>
                </div>
            </div>
           
        </div>
        <footer class="style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <span class="copyright">Copyright &copy; <a href="#">Les Experts du web</a> 2018</span>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-social text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-link">
                            <ul class="pull-right">
                                <li><a href="#">Hackathon</a>
                                </li>
                                <li><a href="#">2eme compétition</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>


    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>



    <!-- jQuery Version 2.1.1 -->
    <script src="js/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/count-to.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/styleswitcher.js"></script>

    <!-- Contact Form JavaScript -->
   

    <!-- Custom Theme JavaScript -->
    <script src="js/script.js"></script>

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5bb05f948a438d2b0cdfdc60/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>



</htm>