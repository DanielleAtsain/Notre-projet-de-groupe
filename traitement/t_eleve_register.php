<?php
session_start();
include('../includes/connect.php');

$col_table_name = "eleves";
$col_id = "id";
$col_nom = "nom";
$col_prenoms = "prenoms";
$col_numero_tel = "telephone";
$col_sexe = "sexe";
$col_email = "email";
$col_mot_de_passe = "mot_de_passe";


if(isset($_POST['nom']) && isset($_POST['prenoms']) && isset($_POST['tel'])  && isset($_POST['sexe'])  && isset($_POST['email'])  && isset($_POST['password']))
{
	$nom = htmlspecialchars($_POST['nom']);
	$prenoms = htmlspecialchars($_POST['prenoms']);
	$tel = htmlspecialchars($_POST['tel']);
	$sexe = htmlspecialchars($_POST['sexe']);
	$email = htmlspecialchars($_POST['email']);
	$password = md5(htmlspecialchars($_POST['password']));

	/*var_dump($_POST);
	die();*/



	$sql= "INSERT INTO ".$col_table_name." (".$col_nom.",".$col_prenoms.",".$col_numero_tel.",".$col_sexe.",".$col_email.",".$col_mot_de_passe.") VALUES ('".$nom."','".$prenoms."','".$tel."','".$sexe."','".$email."','".$password."')";

	//die($sql);

		$result=mysqli_query($link	,$sql);
		if ($result) {
			$_SESSION['msg']='Insertion reussie , vous pouvez maintenant vous connecter';
			header('location:../registereleve.php');
			//echo 'Insertion reussie';
		}else{
			$_SESSION['msg']=mysqli_error($link);
			echo 'Insertion non';
		}
	

}