<?php

function validate_donnees($donnee)
{
    $donnee = trim($donnee);
    $donnee = stripslashes($donnee);
    $donnee = htmlspecialchars($donnee);
    return $donnee;
}


if (isset($_GET['ErreurPseudo']) || isset($_GET['ErreurEmail']) || isset($_GET['Validité'])) {

?>
    <div class="wrapper-msgErreur">
        <div class="msgErreur">
            <ion-icon name="close-sharp"></ion-icon>
            <?php
            //--------- Message d'erreur -----------

            if (!empty($_GET['ErreurEmail']) || !empty($_GET['ErreurPseudo'])):                    
                if (!empty($_GET['ErreurEmail'])) {
                    $email = validate_donnees($_GET['ErreurEmail']);
                    $text = 'L\'email <span>' . $email . '</span> que vous venez d\'utiliser est déja pris.';
                }
                if (!empty($_GET['ErreurPseudo'])) {
                    $pseudo = validate_donnees($_GET['ErreurPseudo']);
                    $text = 'Le pseudo <span>' . $pseudo . '</span> que vous venez d\'utiliser est déja pris.';
                }
            ?>
                <h2>Nous somme désolé :</h2>
                <p><?php echo $text; ?></p>
                <p>Merci de bien vouloir réessayer.</p>
            <?php endif; ?>
            <?php 
            //------- Message Validité
            
            if (!empty($_GET['Validité'])) :
                $validite = validate_donnees($_GET['Validité']);
                if (!empty($validite)) {
                    $text = '<span>' . $validite . '</span> votre inscription à bien été prise en compte.';
                }
            ?>
                <h2>Inscrit :</h2>
                <p><?php echo $text; ?></p>
                <p>Vous pouvez vous connecter.</p>
            <?php endif; ?>
        </div>
    </div>


<?php }
?>