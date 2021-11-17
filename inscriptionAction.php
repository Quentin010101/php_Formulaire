<?php session_start(); ?>


<?php 

    function validate_donnees($donnee){
        $donnee = trim($donnee);
        $donnee = stripslashes($donnee);
        $donnee = htmlspecialchars($donnee);
        return $donnee;
    }
    $pseudo = validate_donnees($_POST['pseudoInscription']);
    $email = validate_donnees($_POST['emailInscription']);
    $mdp = validate_donnees($_POST['mdpInscription']);

    if(
    isset($pseudo) 
    && isset($email) 
    && isset($mdp)
    && !empty($email)
    && !empty($pseudo)
    && !empty($mdp)
    && filter_var($email, FILTER_VALIDATE_EMAIL)
    && strlen($pseudo) <= 20
    && strlen($email) <= 20
    && strlen($mdp) <= 20
    ){
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=site;charset=utf8','root','');
        }
        catch (Exception $e)
        {
            die('Erreur : ' .$e->getMessage());
        }
        //----------- Verifier si le pseudo et email existe déja dans la db --------------------
        $requete = 'SELECT pseudo, email FROM `user`';
        $userRequette = $db->prepare($requete);
        $userRequette -> execute();
        $usersSaved = $userRequette -> fetchAll();

        foreach($usersSaved as $userSaved):
            if($userSaved['pseudo'] == $pseudo):
                $messageErreurPseudo = $pseudo;
                header('Location: index.php?ErreurPseudo=' . $messageErreurPseudo);
                exit;
            endif;    
            if($userSaved['email'] == $email):
                $messageErreurEmail = $email;
                header('Location: index.php?ErreurEmail=' . $messageErreurEmail);
                exit;
            endif;    
        endforeach;


        //------------ Enregistrer pseudo email et mdp dans la db ------------------------------
                //-----Hash pasword-------
        $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);        
        $query = 'INSERT INTO `user` (`pseudo`, `email`, `mdp`) VALUES (:pseudo, :email, :mdp)';        
        $user = $db->prepare($query);
        $user->execute([
            'pseudo'=> $pseudo,
            'email' => $email,
            'mdp'   => $mdpHash,
        ]);
        header('Location: index.php?Validité=' . $pseudo);
        exit;
    }




?>