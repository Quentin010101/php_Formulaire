<?php session_start(); ?>
<?php

if (isset($_POST['pseudoConnexion']) && isset($_POST['mdpConnexion'])) {

    function validate_donnees($donnee)
    {
        $pattern = '/</i';
        $pattern1 = '/>/i';
        $donnee = preg_replace($pattern,'',$donnee);
        $donnee = preg_replace($pattern1,'',$donnee);
        $donnee = trim($donnee);
        $donnee = htmlspecialchars($donnee);
        $donnee = stripslashes($donnee);

        return $donnee;
    }

    $pseudo = validate_donnees(($_POST['pseudoConnexion']));
    $mdp = validate_donnees(($_POST['mdpConnexion']));
    var_dump($pseudo);
    try {
        $db = new PDO('mysql:host=localhost;dbname=site;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $query = 'SELECT pseudo, mdp FROM user WHERE pseudo = :pseudo';
    $verifications = $db->prepare($query);
    $verifications->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $verifications->execute();
    $resultats = $verifications->fetchAll();

    //--------- Si pseudo existant dans db ------------------
     if ($resultats) {
         //--------- Si mdp correspond dans db ------------------
         foreach($resultats as $resultat):
             if(password_verify($mdp, $resultat['mdp']))
             {
                 $_SESSION['pseudo'] = $pseudo;
                 header('Location: index.php');
             } else {
                 // le mdp ne correspond pas
                 header('Location: index.php?connexionErreur=mdp');
             }
         endforeach;
     } else {
         //le pseudo n'existe pas
         header('Location: index.php?connexionErreurP=' . $pseudo);
    }
} else {
    echo "erreur";
}
