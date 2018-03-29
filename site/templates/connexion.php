<?php snippet('header-login') ?>

<div class="container">

  <div class="row">

    <div id="login-form" class="col-md-4 offset-md-4">

      <h1>Connexion</h1>

      <?php if($error): ?>
        <div class="alert alert-danger" role="alert">
          <?= $page->alert()->html() ?>
        </div>
      <?php endif ?>

      <form method="post">

        <div class="form-group">
          <!-- <label for="username">Nom d'utilisateur</label> -->
          <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Nom d'utilisateur..." required>
        </div>

        <div class="form-group">
          <!-- <label for="password">Mot de passe</label> -->
          <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Mot de passe..." required>
        </div>

        <input class="btn btn-primary btn-lg btn-block" type="submit" name="login" value="Connexion">

      </form>

    </div>

  </div>

</div>

<?php snippet('footer') ?>
