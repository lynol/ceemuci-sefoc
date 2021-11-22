<?php include 'head.php';
$x = date("d/m/Y");

if (!empty($_POST)) {
    var_dump($_POST);
    die();
	$requete = $pdo->prepare("INSERT INTO articles SET 
		nom = ?,
		prenoms = ?,
		age = ?,
		sexe = ?,
		commune = ?,
        niveau = ?,
        etablissement = ?,
        contact = ?,
        contact_parent = ?,
        date_ajout = ?        
        ;");

	// envoie des données du formulaire a la base de donnée (dans l'ordre)
	$requete->execute([
		$_POST['nom'], 
		$_POST['prenoms'],
        $_POST['age'],
        $_POST['sexe'],
        $_POST['commune'],
        $_POST['niveau'],
        $_POST['etablissement'],
        $_POST['contact'],
        $_POST['contact_parent'], 
		$x
	]);
}