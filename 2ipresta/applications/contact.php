<?php
// Texte entete
$titre = 'Contactez-nous';
include_once('head.php');

// menu site web
include_once('./menu.php');
?>

<div class="container">

    <!-- 1er bloc -->
    <div class='row'>
        <h3 class="text-dark fw-bold text-center mt-5">
            Plus de renseignements, contactez-nous
        </h3>
    </div>
    <!-- fin 1er bloc -->


    <!-- 2eme bloc -->
    <div class="row mt-4 mb-5 shadow-lg p-3 bg-body rounded">
        <!-- 1 ere colonne -->
        <div class="col-lg-6">
            <!-- localisation -->
            <div>
                <h4>
                    <i class="fa fa-map-marker"></i>
                    Localisation
                </h4>
                <p>Nouveau marché, Rue du Nigeria, Niamey/Niger</p>
            </div>

            <!-- email 2isoft -->
            <div>
                <h4>
                    <i class="fa fa-envelope"></i>
                    Adresse mail
                </h4>
                <p>info@2isoft.com</p>
            </div>

            <!-- telephone -->
            <div>
                <h4>
                    <i class="fa fa-phone"></i>
                    Contact
                </h4>
                <p>+227 80 60 30 30</p>
            </div>

            <!-- Site web -->
            <div>
                <h4>
                    <i class="fa fa-globe"></i>
                    Site Web
                </h4>
                <p>www.2isoft.com</p>
            </div>

            <!-- iframe localisation -->
            <div>
                <iframe style="width: 100%;height:100%;" scrolling="no" src="https://maps.google.com/maps?q=Niamey%2CNiger%20%2C%20Ex%20Radio%20Souda&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near" aria-label="Niamey,Niger , Ex Radio Souda" frameborder="0"></iframe>
            </div>
        </div>

        <!-- 2eme colonne -->
        <div class="col-lg-6 mt-2">
            <form method="POST" action="" autocomplete="off">
                <!-- 1ere ligne -->
                <div class="row">
                    <!-- nom et prenom -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Votre nom" required>
                        <span class="input-group-text"><i class='fa fa-user'></i></span>
                        <input type="text" class="form-control" placeholder="Votre prénom" required>
                    </div>
                </div>
                <!-- fin 1ere ligne -->

                <!-- 2eme ligne -->
                <div class='row'>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Objet de votre message" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <!-- fin 2eme ligne -->

                <!-- 3 eme ligne -->
                <div class='row'>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class='fa fa-edit'></i></span>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Contenu de votre message" class='form-control'></textarea>
                    </div>
                </div>
                <!-- fin 3 eme ligne -->

                <!-- btn envoi message -->
                <div class='row m-2'>
                    <div class='col-md-4 offset-md-5 col-xs-6 offset-xs-6'>
                        <button type="submit" class="btn btn-sm btn-success fw-bold">
                            <i class="fa fa-send"></i> Envoyer
                        </button>
                    </div>
                </div>
                <!-- fin btn envoi message -->
            </form>
        </div>
    </div>
    <!-- fin 2eme bloc -->

</div>

<?php
include_once('pied.php');
?>