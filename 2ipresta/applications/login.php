<?php
// Texte entete
$titre = 'login';
include_once('head.php');

// menu site web
include_once('./menu.php');
?>
<div class="container">
  <div class="row m-5 d-flex justify-content-center ">
    <div class='col-lg-4 col-md-12 d-flex flex-column align-items-center shadow-lg '>
      <div class=" card mb-3">
        <div class="card-body">

          <div class="pt-4 pb-2">
            <h5 class="card-title text-center pb-0 fs-4"><b>Votre compte</b></h5>
            <p class="text-center small">Entrer votre nom &amp; password à login</p>
          </div>

          <form class="row gy-4" action="./traitement_login.php" method="post">
            <div class="col-12">
              <label class="form-label">Votre login</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
                <input type="text" name="login_user" class="form-control" placeholder="Login" required>
              </div>
            </div>

            <div class="col-12">
              <label for="yourPassword" class="form-label"> Password</label><br>
              <div class="input-group">
                <span class="input-group-text"><i class="fa fa-unlock-alt"></i></span>
                <input type="password" name="password_user" class="form-control" placeholder="Mot de passe">
              </div>
            </div>

            <div class="col-12">
              <button class="btn btn-primary w-100" type="submit">Login</button>
            </div>
            <div class="col-12">
              <p class="small mb-0">Vous n'avez pas un compte? <a href="pages-register.html">Créez un compte</a></p>
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