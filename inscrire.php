<div class="container-form form-inscription">
    <form action="inscriptionAction.php" method="post">
        <h2>Formulaire Inscription</h2>
        <label for="pseudo">Entrer votre pseudo</label>
        <input type="text" id="pseudo" name="pseudoInscription" placeholder="pseudo">
        <span>* Doit contenir au moins 4 caractère</span>
        <label for="email">Entrer votre email</label>
        <input type="email" id="email" name="emailInscription" placeholder="email">
        <span></span>
        <label for="mdp">Entrer votre mot de passe</label>
        <input type="password" id="mdp" name="mdpInscription" placeholder="mot de passe">
        <span></span>
        <label for="mdp-confirm">Confirmer votre mot de passe</label>
        <input type="password" id="mdp-confirm" placeholder="confirmer mot de passe">
        <span></span>
        <input type="submit" id="submit">
    </form>
</div>