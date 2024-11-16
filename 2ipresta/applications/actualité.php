<?php
// Texte entete
$titre = 'actualité';
include_once('head.php');

// menu site web
include_once('./menu.php');
?>

<div class="container">
    <div class="row gy-4 m-5">
        <!-- 1ere colonne -->
        <div class="col-lg-4 col-md-12 d-flex flex-column align-items-center shadow-lg">
            <div class="card md-4">
               <h3 class="card-title bg-info fs-5"><span><b>Maintenance Réseau</b></span></h3>
                <div class="card-body">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="1000">
                                <img src="../mm.jpg" class="img-fluid mt-5" alt="" width="1320" height="990">
                                <div class="carousel-caption d-none d-md-block text-drak ">
                                    <h5><b> Decouvrez un monde merveilleu</b></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin 1ere colonne -->

        <!-- 2eme colonne -->
        <div class="col-lg-4 col-md-12 d-flex flex-column align-items-center shadow-lg">
            <div class="card md-4">
                <h3 class="card-title bg-info fs-5"><span><b>Développement Logiciels</b></span></h3>
                <div class="card-body">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="1000">
                                <img src="../img/hero-img.png" class="img-fluid mt-5" alt="" width="1320" height="990">
                                <div class="carousel-caption d-none d-md-block text-drak ">
                                    <h5><b> Decouvrez un monde merveilleu</b></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin 2eme colonne -->

        <!-- 3eme colonne -->
        <div class="col-lg-4 col-md-12 d-flex flex-column align-items-center shadow-lg">
            <div class="card md-4">
                <h3 class="card-title bg-info fs-5"><span><b>Formation NTIC</b></span></h3>
                <div class="card-body">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="1000">
                                <img src="../img/222" class="img-fluid mt-5" alt="" width="1320" height="990">
                                <div class="carousel-caption d-none d-md-block text-drak ">
                                    <h5><b>Decouvrez un monde merveilleu</b></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin 3eme colonne -->               
    </div>
</div>


<?php
include_once('pied.php');
?>