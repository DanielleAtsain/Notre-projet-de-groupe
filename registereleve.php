<?php session_start() ?>
<?php include('includes/head.php') ?>



<div class="jumbotron">
      <div class="container">

<?php if(isset($_SESSION['msg'])) { ?>

<div class="alert alert-success"><?=  $_SESSION['msg']; ?></div>

<?php  unset($_SESSION['msg']); } ?>



        <h1 class="col-lg-offset-3 col-md-offset-3">Inscription</h1>
        <form method="post" action="traitement/t_eleve_register.php">


<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
    <div class="form-group">
    <input type="text" name="nom" class="form-control" placeholder="Entrez votre nom" required="">
    </div>

  </div>
</div>


<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
    <div class="form-group">
    <input type="text" name="prenoms" class="form-control" placeholder="Entrez votre prenom" required="">
    </div>

  </div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
    <div class="form-group">
    <input type="tel" name="tel" class="form-control" placeholder="Entrez votre telephone" required="">
    </div>
 </div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
    <div class="form-group">
      <select name="sexe" class="form-control">
        <option value="">Sexe</option>
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
      </select>
    </div>
 </div>
</div>

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
  <button type="submit" class="btn btn-success">S'inscrire</button>
  </div>
</div>



   </form>
      </div>
    </div>
   
    
<?php include('includes/footer.php') ?>