<?php session_start() ?>

<?php if(!isset($_SESSION['name']) && !isset($_SESSION['rename']))  {

header('location:prof.php');

}?>
<?php include('includes/head.php') ?>

   <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenue Prof <?= $_SESSION['name'] ?>  <?= $_SESSION['rename'] ?></h1>

        <a href="traitement/killprof.php">Deconnexion</a>

        
      </div>
    </div>


    
<?php include('includes/head.php') ?>