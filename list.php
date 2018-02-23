<?php session_start() ?>
<?php include('includes/connect.php'); ?>
<?php if(!isset($_SESSION['name']) && !isset($_SESSION['rename']))  {

header('location:eleves.php');


}?>
<?php include('includes/head.php') ?>

   <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenue <?= $_SESSION['name'] ?>  <?= $_SESSION['rename'] ?></h1>

        <a href="traitement/kill.php">Deconnexion</a>

        
      </div>
    </div>


    <div class="row-fluid">
      <div class="container">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


<h2>Liste des professeurs disponibles </h2><p style="margin-top: 3em;"></p>

        <table class="table table-responsive">
          <thead>
            <tr>
              <th>#</th>
              <th>Nom</th>
              <th>Prenoms</th>
              <th>Matière</th>
              <th>Telephone</th>
               <th>Email</th>
               <th>Options</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $n=1;
              $list=" SELECT * FROM professeurs ORDER BY id DESC";
              $res= mysqli_query($link,$list);
  while ($data = mysqli_fetch_array($res)){
                
              
             ?>
            <tr>
              <td> <?php echo $n; ?> </td>
              <td><?php echo $data['nom']; ?></td>
              <td><?php echo $data['prenoms']; ?></td>
              <td><?php echo $data['matiere']; ?></td>
              <td><?php echo $data['telephone']; ?></td>
               <td><?php echo $data['email']; ?></td>
              <td><button class="btn btn-success">Contacter le professeur</button></td>
            </tr>
            <?php $n++;
             } ?>
          </tbody>
        </table>

      </div>
      
    </div>
      </div>
    </div>
    



    
<?php include('includes/footer.php') ?>