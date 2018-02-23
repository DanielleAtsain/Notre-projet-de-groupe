<?php
session_start();
include('../includes/connect.php');

/*$host="localhost";
	//nom de l'utilisateur de la bd
	$user="root";
	//nom de passe de la bd
	$mdp="";
	// nom de la bd
	$db="professors";

	$dns = "mysql:host=localhost;dbname=".$db;

	$bdd = new PDO($dns,$user,$mdp);*/

	


   


$col_table_name = "eleves";
$col_email = "email";
$col_mot_de_passe = "mot_de_passe";

if(isset($_POST['email'])  && isset($_POST['password']))
{

    $email = htmlspecialchars($_POST['email']);
	$password = md5(htmlspecialchars($_POST['password']));

    $sql = "SELECT * FROM ".$col_table_name." WHERE ".$col_email." = '".$email."' ";
     
    
    //$sql = $bdd->query("SELECT * FROM eleves");

   

  $res = mysqli_query($link,$sql);


  

 $n=1;
	while ($data = mysqli_fetch_array($res)){
					

				if($data['mot_de_passe'] == $password)
				{
					$_SESSION['name'] = $data['nom'];
					$_SESSION['rename'] = $data['prenoms'];
					header('location:../list.php');
				}


				$n++;


	}	

	if(!isset($_SESSION['name']) && !isset($_SESSION['rename']))
				{
					$_SESSION['error'] = "utilisateur inconnu";
   header('location:../logineleve.php');
				}


	/*if(is_null($data))
{
  
   $_SESSION['error'] = "utilisateur inconnu";
   header('location:../logineleve.php');
} */
	/*donnees = $sql->fetchall();
  
	foreach($donnees as $row) {
			echo $row['id'];
		}	*/



						
	
							
					

	
}