<?php
// Texte entete
$titre = 'Accueil';
include_once('head.php');

// menu site web
include_once('./menu.php');
?>

<section id="hero" class="d-flex align-items-center">
    <!-- <div class="container" -->
    <!-- Bloc slide -->
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators ">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="1000">
                        <img src="../img/presta1.jpg" class="img-fluid" alt="Arsha - Free Corporate Bootstrap HTML Template">
                        <div class="carousel-caption d-none d-md-block text-dark bg-white">
                            <h5><b> First slide label</b></h5>
                            <p class='text-success'><b> Some representative placeholder content for the first slide.</b></p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="../img/presta2.jpg" class="img-fluid" alt="Arsha - Free Corporate Bootstrap HTML Template">
                        <div class="carousel-caption d-none d-md-block text-dark bg-white">
                            <h5><b> Second slide label</b></h5>
                            <p class='text-success'><b> Some representative placeholder content for the second slide.</b></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/presta3.jpg" class="img-fluid" alt="Arsha - Free Corporate Bootstrap HTML Template">
                        <div class="carousel-caption d-none d-md-block text-dark bg-white">
                            <h5><b> Third slide label</b></h5>
                            <p class='text-success'><b> Some representative placeholder content for the third slide.</b></p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <div style="background-color:aqua">
                        <span class="carousel-control-prev-icon text-success" aria-hidden="true"></span>
                    </div>
                    <span class="visually-hidden text-success">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <div style="background-color:aqua">
                        <span class="carousel-control-next-icon text-success" aria-hidden="true"></span>
                    </div>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Fin bloc slide -->
    <!-- </div> -->
</section>


<!-- contenu de la page -->
<div class="container">
    <section class="m-5">
        <div class='row'>
            <h3 class="text-dark fw-bold text-center mt-1">
                Présentation du 2isoft
            </h3>
        </div>

        <div class="row mt-4 shadow-lg p-3 mb-5 bg-body">
            <div class="col-lg-6">
                <img src="../img/2ilogo.jpg" class="img-fluid mt-5" alt="" width="1320" height="990">
                <h4>
                    <p class="fst-italic fs-5">Sa principale mission est d’aider ses clients à atteindre leurs objectifs en leur fournissant des meilleures solutions digitales.</p>
                </h4>
            </div>

            <div class="col-lg-6">
                <h1 class="fw-bold"></h1>
                <h4 style="text-align:justify">
                    <p class="fst-italic text-dark fs-5">2isoft, une entreprise informatique basée à Niamey, spécialisée dans le domaine des nouvelles technologies de l’informatique plus précisément au niveau du service SACODE (Service Analyse Conception et développement). Ce service a pour mission la conception des sites web ainsi que des logiciels, l’installation et la gestion des serveurs des clients et la maintenance des équipements informatiques et du réseau.</p> 
                    <p class="fst-italic fs-5">2isoft (Ingénierie Informatique Soft) est une société d’ingénierie informatique, de droit Nigérien. Fournisseur de solutions technologiques en développement de logiciels sur mesure, en conception de sites Web, en conception graphique et en formation sur les NTIC. Ainsi donc, elle a vu le jour le 18 Mai 2012. Elle est née de la volonté d’accompagner les grandes entreprises et les PME à intégrer les Nouvelles Technologies de l'Information et de la Communication. Au fil des années, 2isoft a acquis une solide expérience qu’elle met au service de ces dernières afin de les rendre plus compétitives dans un environnement évolutif.</p>
                </h4>
            </div>
        </div>
    </section>
</div>

<?php
include_once('pied.php');
?>

