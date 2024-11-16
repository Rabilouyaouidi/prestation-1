<?php
// Texte entete
$titre = 'login';
include_once('head.php');

// menu site web
include_once('./menu.php');
?>
<div class=" container">
  <div class="row m-5 d-flex justify-content-center">
      <div class='col-lg-4 col-md-12 d-flex flex-column align-items-center shadow-lg'>
          <div class=" card mb-3 ">
              <div class="card-body">

                  <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4"><b> Inscription</b></h5>
                      <p class="text-center small">Entrer votre nom,votre email,votre login &amp; password </p>
                  </div>

                  <form class="row gy-4 needs-validation" novalidate="">

                      <div class="col-12">
                        <label for="yourUsername" class="form-label">Votre nom *</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                          <input type="text" name="votre-nom" class="form-control" id="votre-nom" required="">
                          <div class="invalid-feedback">s'il vous plait entrer votre nom.</div>
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="yourUsername" class="form-label"> Votre email</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                          <input type="text" name="votre-email" class="form-control" id="votre-email" required="">
                          <div class="invalid-feedback">s'il vous plait entrer votre email.</div>
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="yourUsername" class="form-label"> Votre login</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="fa fa-pencil-square" ></i></span>
                          <input type="text" name="votre-login" class="form-control" id="votre-login" required="">
                          <div class="invalid-feedback">s'il vous plait entrer votre nom.</div>
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="yourPassword" class="form-label"> Password</label><br>
                        <div class="input-group">
                          <span class="input-group-text"><i class="fa fa-unlock-alt"></i></span>
                          <input type="password" class="form-control" placeholder="Mot de passe">
                        </div>
                      </div>

                      
                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">S'inscrire</button>
                      </div>

                      <div class="col-12">
                        <p class="small mb-0">Vous avez  un compte? <a href="">Connectez-en</a></p>
                      </div>
                  </form>
              </div>
          </div>
      </div> 
  </div>
</div>
<?php
include_once('pied.php');
?>