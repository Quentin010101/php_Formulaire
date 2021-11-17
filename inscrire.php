<div class="container-form form-inscription">
    <form action="inscriptionAction.php" method="post">
        <h2>Formulaire Inscription</h2>
        <div>
            <label for="pseudo">Entrer votre pseudo</label>
            <input type="text" id="pseudo" name="pseudoInscription" placeholder="pseudo">
            <span>* Doit contenir au moins 4 caractère</span>
        </div>
        <div>
            <label for="email">Entrer votre email</label>
            <input type="email" id="email" name="emailInscription" placeholder="email">
            <span></span>
        </div>
        <div>
            <label for="mdp">Entrer votre mot de passe</label>
            <input type="password" id="mdp" name="mdpInscription" placeholder="mot de passe">
            <span></span>
        </div>
        <div>
            <label for="mdp-confirm">Confirmer votre mot de passe</label>
            <input type="password" id="mdp-confirm" placeholder="confirmer mot de passe">
            <span></span>
        </div>
        <input type="submit" id="submit">
    </form>
</div>