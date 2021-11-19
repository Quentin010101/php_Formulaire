
<header>
    <div class="logo">
        <img src="./asset/kisspng-logo-lion-shutterstock-red-gradient-lionhead-5aab05d95bbc07.7490841915211575933758.png" alt="logo">
    </div>
    <nav>
        <ul>
            <li><a class="barre" href="index.php">Accueil</a></li>
            <li><a class="barre" href="produit.php">Produit</a></li>
            <li><a class="barre" href="">Contact</a></li>
        </ul>
    </nav>
    <div class="container-sign">
        <?php
    if(!empty($_SESSION['pseudo'])):
        ?>
        <h4>Bonjour <span><?php echo $_SESSION['pseudo'] ?></span>.</h4>
        <ion-icon id="setting" name="settings-sharp"></ion-icon>
        <div id="menu">
            <form id="deconnexion" action="deconnexion.php" method="post">
                <ion-icon name="power-sharp"></ion-icon>
                <input type="hidden" name="cache" id="cache" value="1">
                <input type="submit" value="Deconnexion">
            </form>
            <a id="boutique" href="#"><ion-icon name="cart-sharp"></ion-icon>Boutique</a>
        </div>
        <script src="./js/bouttonSetting.js"></script>
    <?php
    else:
    ?>
        <a id="inscription" href="#">S'inscrire</a>
        <a id="connexion" href="#">Se connecter</a>
    <?php 
    endif;
    ?>    
    </div>
</header>