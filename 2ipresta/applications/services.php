<?php
// Texte entete
$titre = 'Services';
include_once('head.php');

// menu site web
include_once('./menu.php');
?>

<!-- style css personnalise -->
<style>
    /* Par defaut */
    .bloc_card {
        height: 750px;
    }

    /* Taille d'écran xs */
    @media only screen and (max-width: 767px) {
        .bloc_card {
            height: 900px;
        }
    }

    /* Taille d'écran sm */
    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .bloc_card {
            height: 768px;
        }
    }

    /* Taille d'écran lg */
    @media only screen and (min-width: 992px) {
        .bloc_card {
            height: 790px;
        }
    }

    .auto {
        overflow: auto;
        height: 600px;
    }
</style>

<div class=" container">
    <section class="m-5 ">
        <!-- 1ere ligne -->
        <div class="row">
            <!-- titre -->
            <div class="text-center">
                <h2><b> NOS SERVICES</b></h2>
            </div>
        </div>

        <!-- 2eme ligne -->
        <div class="row m-4">
            <!-- 1ere colonne -->
            <div class="col-lg-6 mb-2 col-xs-12">
                <div class="card shadow-lg bloc_card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-cogs"></i><br> Maintenance Réseau</h5>
                        <img src="../img/l.JPG" class="img-fluid mt-5" alt="" width="1320" height="990">
                        <div class="card-text p-4 auto" style="text-align:justify;">
                            L'agent de maintenance en électronique procède à l'installation et à la maintenance corrective et préventive d'appareils, d'équipements, d'installations ou de systèmes à forte composante électronique, selon les règles de sécurité.
                            Il peut assurer une assistance téléphonique aux utilisateurs.
                            Il exerce au sein d'entreprises industrielles, d'entreprises de maintenance spécialisées, de sociétés de services, des armées, en contact avec différents intervenants (production, méthodes, études, clients, fournisseurs)
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin 1ere colonne -->

            <!-- 2eme colonne -->
            <div class="col-lg-6 col-xs-12">
                <div class="card shadow-lg bloc_card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-users"></i><br> Développement Logiciels</h5>
                        <img src="../img/297-1-logiciel-spe.jpg" class="img-fluid mt-5" alt="" width="1320" height="990">
                        <div class="card-text p-4 auto" style="text-align:justify;">
                            le développement de logiciel fait référence à un ensemble d'activités informatiques dédiées au processus de création, de conception, de déploiement et de support des logiciels ».
                            Le logiciel lui-même est l'ensemble des instructions ou des programmes qui indiquent à un ordinateur ce qu'il doit faire. Il est indépendant du matériel et rend les ordinateurs programmable . Il en existe trois types de base :le logiciel système, le logiciel de programmation, le logiciel d'application.
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin 2eme colonne -->
        </div>
        <!-- fin 2eme ligne -->

        <!-- 3eme ligne -->
        <div class="row m-4">
            <!-- 1ere colonne -->
            <div class="col-lg-6 mb-2 col-xs-12">
                <div class="card shadow-lg bloc_card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-image"></i><br> Infographie</h5>
                        <img src="../img/Sans titre.jpg" class="img-fluid mt-5" alt="" width="1320" height="990">
                        <div class="card-text p-4 auto" style="text-align:justify;">
                            Aujourd’hui, les infographies sont de plus en plus nombreuses sur la toile : le mélange entre du texte et des images pertinents facilite la compréhension et encourage le lecteur à rester sur le site. En effet, on constate que les pages web contenant une infographie ont facilement plus de succès que les autres. Créer une infographie est un formidable moyen pour attirer du monde sur son site tout en faisant passer son message de manière claire et, surtout, rapide.
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin 1ere colonne -->

            <!-- 2eme colonne -->
            <div class="col-lg-6 md-2 col-xs-12">
                <div class="card shadow-lg bloc_card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-users"></i><br> Formation NTIC</h5>
                        <img src="../img/f.JPG" class="img-fluid mt-5" alt="" width="1320" height="990">
                        <div class="card-text p-4 auto" style="text-align:justify;">
                            La formation professionnelle initiale vise l'acquisition de qualifications pratiques et de connaissances spécifiques nécessaires à l'exercice d'une activité professionnelle. Elle a pour objectif d'assurer une qualification à tout demandeur de formation.
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin 2eme colonne -->
        </div>
        <!-- fin 3eme ligne -->
    </section>
</div>

<br><br>
<br><br>
<br><br>
<br><br>

<?php
include_once('pied.php');
?>