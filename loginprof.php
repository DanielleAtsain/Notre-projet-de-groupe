<?php session_start() ?>
<?php include('includes/head.php') ?>



<div class="jumbotron">
      <div class="container">

        <?php if(isset($_SESSION['error'])) {  ?>

<div class="alert alert-danger"><?=  $_SESSION['error']; ?></div>

<?php unset($_SESSION['error']); } ?>


        <h1 class="col-lg-offset-3 col-md-offset-3">Connexion</h1>
        <form method="post" action="traitement/t_prof_login.php">

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
    <div class="form-group">
    <input type="email" name="email" class="form-control" placeholder="Entrez votre email" required="">
    </div>

  </div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
    <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe" required="">
    </div>

  </div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
  <button type="submit" class="btn btn-primary">Se connecter</button>
  </div>
</div>



   </form>
      </div>
    </div>
   
    
<?php include('includes/footer.php') ?>