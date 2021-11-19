<?php

function validate_donnees($donnee)
{
    $donnee = trim($donnee);
    $donnee = stripslashes($donnee);
    $donnee = htmlspecialchars($donnee);
    return $donnee;
}
if (
    isset($_GET['ErreurPseudo']) ||
    isset($_GET['ErreurPseudoSpecialChar']) ||
    isset($_GET['ErreurEmail']) ||
    isset($_GET['Validité']) ||
    isset($_GET['connexionErreur']) ||
    isset($_GET['connexionErreurP'])
){

?>
    <div class="wrapper-msgErreur">
        <div class="msgErreur">
            <ion-icon name="close-sharp"></ion-icon>
            <?php
            //--------- Message d'erreur -----------

            if (!empty($_GET['ErreurEmail']) || !empty($_GET['ErreurPseudo']) || !empty($_GET['ErreurPseudoSpecialChar'])):                    
                if (!empty($_GET['ErreurEmail'])) {
                    $email = validate_donnees($_GET['ErreurEmail']);
                    $text = 'L\'email <span>' . $email . '</span> que vous venez d\'utiliser est déja pris.';
                }
                if (!empty($_GET['ErreurPseudo'])) {
                    $pseudo = validate_donnees($_GET['ErreurPseudo']);
                    $text = 'Le pseudo <span>' . $pseudo . '</span> que vous venez d\'utiliser est déja pris.';
                }
                if (!empty($_GET['ErreurPseudoSpecialChar'])) {
                    $text = 'Votre pseudo ne doit pas contenir de charactère spécial.';
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
            <?php 
            // ----------Erreur Connexion

            if(!empty($_GET['connexionErreur']) || !empty($_GET['connexionErreurP'])):
                if(!empty($_GET['connexionErreur'])) {
                    $connexionErreur = validate_donnees($_GET['connexionErreur']);
                    $text = 'Le mot de passe utilisé n\'est pas valide.';
                } else if (!empty($_GET['connexionErreurP'])){
                    $connexionErreurP = validate_donnees($_GET['connexionErreurP']);
                    $text = 'Le pseudo <span>' . $connexionErreurP . '</span> n\'est pas valide.';
                } else {
                    $text = "erreur1";
                }
            ?>
                <h2>Problème de Connexion :</h2>
                <p><?php echo $text; ?></p>
                <p>Merci de bien vouloir réessayer.</p>
            <?php 
            endif;
            ?>
        </div>
    </div>
            <script src="./js/messageErreur.js"></script>
<?php } ?>
