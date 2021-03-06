<?php 
include 'lib/db.php';
include 'lib/constants.php';
include 'partials/header.php';




    
    ?>
    

<!-- section -->

    <!-- Start Home Page Slider -->
    <section id="page" class="page" >
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="images/header2.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated3">
                                <span><strong></strong> PROTEGEONS  NOTRE ENVIRONNEMENT</span>
                            </h1>
                            <p class="animated2"><br> </p>
                            <a href="#feature" class="page-scroll btn btn-primary animated1">Lire plus</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->

                <div class="item">
                    <img class="img-responsive" src="images/152.jpg" alt="slider">

                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 style="color:black;" class="animated1">
                                <span>ECOSYSTEME <strong>Environnement</strong></span>
                            </h1>
                            <p style="color:black;" class="animated2">Generate a flood of new business with the<br> power of a digital media platform</p>
                            <a href="#feature" class="page-scroll btn btn-primary animated3">Read More</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->

                <div class="item">
                    <img class="img-responsive" src="images/Image1.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h3  class="animated2">
                                <span> <strong>Nous n'aurons pas une societe si nous detruisons l'Environnement</strong></span>
                            </h3>
                            <p class="animated1"><br> </p>
                            <a class="animated3 slider btn btn-primary btn-min-block" href="#">Get Now</a><a class="animated3 slider btn btn-default btn-min-block" href="#">Voir Plus</a>

                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->




    <!-- Start Call to Action Section -->
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>De nouvelles technologies de polym??re vert seront b??n??fiques pour l'environnement, les fabricants et les consommateurs</h1>
                    <!-- <button type="submit" class="btn btn-primary">Buy This Template</button> -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Call to Action Section -->



    <!-- Start Portfolio Section -->
    <section id="portfolio" class="portfolio-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>VALORISATION DES DECHETS</h3>
                        <p style="color:white; size:12px;">Duis aute irure dolor in reprehenderit in voluptate</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <!-- Start Portfolio items -->
                    <ul id="portfolio-list">
                        <li>
                            <div class="portfolio-item">
                                <img src="images/portfolio/img1.jpg" class="img-responsive" alt="" />
                                <div class="portfolio-caption">
                                <h4>Incin??ration des d??chets</h4>
                                    <p style="color:white; size:12px;">c'est le fait de r??duire en cendre les differents sorte d??chets</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <img src="images/portfolio/img2.jpg" class="img-responsive" alt="" />
                                <div class="portfolio-caption">
                                <h4>Incin??ration des boues issus des usines </h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <img src="images/portfolio/img3.jpg" class="img-responsive" alt="" />
                                <div class="portfolio-caption">
                                <h4>Traitement des fum??es</h4>
                                    <p style="color:white; size:12px;">Capter les poussieres et les substance poluantes emise lors de la combution des d??chets</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <img src="images/portfolio/img4.jpg" class="img-responsive" alt="" />
                                <div class="portfolio-caption">
                                  
                                <h4>Valorisation ??nergetique</h4>
                                    <p style="color:white; size:12px;">R??cuperer la chaleur contenue dans les fum??s pour produire de la vapeur d'eau sous pression, utilisable pour les besoins de chauffage ou de production.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <img src="images/portfolio/img5.jpg" class="img-responsive" alt="" />
                                <div class="portfolio-caption">
                                <h4>Recyclages des papiers et des cartons</h4>
                                    <p></p>
                                    <p></p>
                                    
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-item">
                                <img src="images/portfolio/img6.jpg" class="img-responsive" alt="" />
                                <div class="portfolio-caption">
                                   <h4>Agrandir l'image Filtres ?? manches</h4>
                                </div>
                            </div>
                        </li>


                    </ul>
                    <!-- End Portfolio items -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- Start Portfolio Modal Section -->
    <div class="section-modal modal fade" id="portfolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="section-title text-center">
                        <h3>Portfolio Details</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <img src="images/portfolio/img1.jpg" class="img-responsive" alt="..">
                    </div>
                    <div class="col-md-6">
                        <img src="images/portfolio/img1.jpg" class="img-responsive" alt="..">
                    </div>

                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
    <!-- End Portfolio Modal Section -->


   
    <!-- Start About Us Section -->
    <section id="about-us" class="about-us-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                        <h3>Risques sanitaires et environnementaux                            </h3>
                        <p>Les dechets presentent une tres grande risques, chez les etres viants </p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="images/about-01.jpg" class="img-responsive" alt="..">
                        <h4>Radioactivit??</h4>
                        <div class="border"></div>
                        <p style="text-align:justify;">Ces d??chets peuvent ??tre explosifs, corrosifs, toxiques, 
                                irritants, facilement inflammables, infectieux etc.
                                D??s lors qu???ils sont m??lang??s aux ordures m??nag??res, 
                                ils sont 
                                une menace pour les personnes
                                 en charge 
                                de la collecte et 
                                un risque pour les installations de 
                                traitement
                                .  ??liminez  vos  d??chets  dangereux,  mais  
                                pas n???importe o??, pas n???importe comment
                                .</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="images/about-02.jpg" class="img-responsive" alt="..">
                        <h4>Degradation de l'Environnement</h4>
                        <div class="border"></div>
                        <p>Un d??chet dangereux est un d??chet pr??sentant une ou plusieurs des propri??t??s de dangers ??num??r??es ?? l???annexe I de l???article R. 541-8 du code de l???environnement (annexe III de la directive 2008/98/CE relative aux d??chets). Il est signal?? par un ast??risque dans la liste non exhaustive des d??chets de l???annexe II du m??me article (d??cision 2000/532/CE modifi??e ??tablissant la liste des d??chets). Ils peuvent ??tre de nature : solide, organique (solvants, hydrocarbures,???), min??rale (acides, boues d???hydroxydes m??talliques,???) ou gazeuse.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="images/about-03.jpg" class="img-responsive" alt="..">
                        <h4>Pollution de l'environnement</h4>
                        <div class="border"></div>
                        <p>En amont des activit??s, la qualit?? du tri effectu?? par les m??nages, l???am??nagement urbain, le choix des conteneurs, l???organisation des tourn??es sont autant de dimensions qui ont des implications sur la s??curit?? et la protection de la sant?? des ripeurs. La pr??vention des risques auxquels sont expos??s les travailleurs doit donc ??tre le sujet d???une concertation entre la collectivit?? donneuse d???ordres et l???exploitant et ??tre int??gr??e dans l???appel d???offres.</p>
                    </div>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </section>
    <!-- End About Us Section -->

    <!-- Start About Us Section 2 -->
    <div class="about-us-section-2">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="skill-shortcode">

                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>Dechets ultimes</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-percentage="100">
                                    <span class="progress-bar-span">18%</span>
                                    <span class="sr-only">18% Complete</span>
                                </div>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>Recyclables</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-percentage="95">
                                    <span class="progress-bar-span">9%</span>
                                    <span class="sr-only">9% Complete</span>
                                </div>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>Combustibles</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-percentage="80">
                                    <span class="progress-bar-span">8%</span>
                                    <span class="sr-only">8% Complete</span>
                                </div>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="skill">
                            <p>Biodegradables</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-percentage="100">
                                    <span class="progress-bar-span">65%</span>
                                    <span class="sr-only">65% Complete</span>
                                </div>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <!-- <div class="skill">
                            <p>Extension</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" data-percentage="70">
                                    <span class="progress-bar-span">70%</span>
                                    <span class="sr-only">70% Complete</span>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>

                <div class="col-md-6">
                    <div id="carousel-example-generic" class="carousel slide about-slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/about-01.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/about-02.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/about-03.jpg" alt="">
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Start About Us Section 2 -->





    <!-- Start Feature Section -->
   
    <!-- End Feature Section -->






   
    <!-- Start Team Member Section -->
    <section id="team" class="team-member-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title text-center">
                    <h3>Consigne pour la gestion des dechets</h3>
                    <p>
                        <h4>Il existe une grande vari??t?? de d??chets. Ils peuvent ??tre class??s selon diff??rents crit??res: </h4>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                
                 <div id="team-section">

                    <div class="our-team">

                        <div class="team-member">
                            <img src="images/team/manage-1.JPG" class="img-responsive" alt="">
                            <div class="team-details">
                                <h4>Article 1</h4>
                                <p> les ?? d??chets m??nagers ??, dont le producteur initial est un m??nageCe sont les ordures de tous les jours, jet??es dans vos poubelles d???int??rieur et pr??sent??es ?? la collecte en sacs ou destin??s au tri (emballages m??nagers en verre, plastique ou carton...) ;</p>
                                <p></p>
                              
                            </div>
                        </div>

                        <div class="team-member">
                            <img src="images/team/manage-2.jpg" class="img-responsive" alt="">
                            <div class="team-details">
                                <h4>Trier les dechets,Mettre chaque type de dechets dans des poubelle diff??rentes </h4>
                                <p> Classer les plastiques , les metaux, les papiers et les verres, chaque type dans un contenu different. : </p>
                              
                                 
                            </div>
                        </div>

                        <div class="team-member">
                            <img src="images/team/manage-3.jpg" class="img-responsive" alt="">
                            <div class="team-details">
                                <h4>Les d??chets non dangereux inertes </h4>
                                <p>ce sont des d??chets qui ne subissent aucune modification physique, chimique ou biologique importante, qui ne se d??composent pas</p>
                                
                            </div>
                        </div>

                        <div class="team-member">
                            <img src="images/team/manage-4.jpg" class="img-responsive" alt="">
                            <div class="team-details">
                                <h4>LES ENCOMBRANTS OU MONSTRES</h4>
                                <p>Ce sont des d??chets occasionnels, dont la taille et la composition n??cessitent une collecte sp??cifique avec un grappin. Vieux frigos, matelas, mobiliers volumineux (plus de 0,5 m3), appareils audiovisuels hors d'usage... etc. Leur enl??vement se fait ?? des jours pr??cis.
                              Il suffit de pr??venir au moins la veille de la collecte, jusqu'?? 16h, par simple appel t??l??phonique au service de la voirie de la commune</p>
                                
                            </div>
                        </div>

                                          
                    </div>


                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Team Member Section -->
<!-- Start Pricing Table Section -->

        <!-- Start Latest News Section -->
        <section id="latest-news" class="latest-news-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Dernieres Nouvelles</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest-news">
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-01.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>31</strong> <br>Dec , 2018</span>

                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-02.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>17</strong> <br>Feb , 2018</span>

                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-03.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>08</strong> <br>Aug , 2018</span>

                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-01.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>08</strong> <br>Aug , 2018</span>

                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-02.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>08</strong> <br>Aug , 2018</span>

                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-03.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>08</strong> <br>Aug , 2018</span>

                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest News Section -->

 <!-- End Testimonial Section -->

 <div id="pricing" class="pricing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3 style="color :black;">HORAIRES DE PASSAGES DE CAMION</h3>
                            <p >Ne garder pas vos dechets chez vous, il suffit seulement de payer: </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="pricing">

                    <div class="col-md-12">
                        <div class="pricing-table">
                            <div class="plan-name">
                                <h3>Lundi et Mardi</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">Moroni Sud<span></span></div>
                                <div class="interval"><h5>de 08h a 14h</h5></div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                        <li>Malouzini</li> 
                                        <li>Hamramba</li>
                                        <li>Zilimadjou</li>
                                        <li>Badjanani</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="pricing-table">
                            <div class="plan-name">
                                <h3>Mercredi</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">MoroniCentre<span></span></div>
                                <div class="interval"><h5> 08h a 12h</h5></div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                        <li>Quartier 1</li> 
                                        <li>Quartier 2</li>
                                        <li>Quartier 3</li>
                                        <li>Quartier 4</li>
                                </ul>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-12">
                        <div class="pricing-table">
                            <div class="plan-name">
                                <h3>Mercredi</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">Moroni Nord<span></span></div>
                                <div class="interval"><h5>de 08h a 18h</h5></div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                        <li>Quartier 1</li> 
                                        <li>Quartier 2</li>
                                        <li>Quartier 3</li>
                                        <li>Quartier 4</li>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                            <div class="pricing-table">
                                <div class="plan-name">
                                    <h3>jeudi</h3>
                                </div>
                                <div class="plan-price">
                                    <div class="price-value">Moroni Nord<span></span></div>
                                    <div class="interval"><h5>de 08h a 18h</h5></div>
                                </div>
                                <div class="plan-list">
                                    <ul>
                                            <li>Quartier 1</li> 
                                            <li>Quartier 2</li>
                                            <li>Quartier 3</li>
                                            <li>Quartier 4</li>
                                    </ul>
                                </div>
                                <div class="plan-signup">
                                    <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Vendredi</h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">Moroni Nord<span></span></div>
                                        <div class="interval"><h5>de 08h a 18h</h5></div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                                <li>Quartier 1</li> 
                                                <li>Quartier 2</li>
                                                <li>Quartier 3</li>
                                                <li>Quartier 4</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                    </div>
                                </div>
                            </div>
                    <div class="col-md-12">
                        <div class="pricing-table">
                            <div class="plan-name">
                                <h3>Samedi</h3>
                            </div>
                            <div class="plan-price">
                                <div class="price-value">Moroni ESt<span></span></div>
                                <div class="interval"><h5>de 06h a 12h</h5></div>
                            </div>
                            <div class="plan-list">
                                <ul>
                                        <li>Quartier 1</li> 
                                        <li>Quartier 2</li>
                                        <li>Quartier 3</li>
                                        <li>Quartier 4</li>
                                </ul>
                                </ul>
                            </div>
                            <div class="plan-signup">
                                <a href="#" class="btn-system btn-small">Sign Up Now</a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>










<!-- fin de la section -->

<?php
include 'partials/footer.php';
?>