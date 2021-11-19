<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleProduit.css">
</head>

<body>
    <?php include_once('header.php'); ?>

    <div class="container-f">
        <?php include_once('inscrire.php') ?>
        <?php include_once('connexion.php') ?>
    </div>

    <?php include_once('pseudoEmailExistant.php'); ?>

    <main>
        <div class="produit">
            <div class="produit-main">
                <ion-icon name="tv-sharp"></ion-icon>
            </div>
            <div class="produit-text">
                <h2>Ecran plat :</h2>
                <p><span>Modèle :</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, magni!</p>
                <p><span>Volume :</span> Lorem ipsum dolor sit amet consectetur.</p>
                <p><span>Type :</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam aperiam ducimus veritatis ad pariatur excepturi.</p>
                <p><span>Prix :</span> Lorem ipsum dolor sit.</p>
                <button class="cardExtend" type="button">Voir Plus</button>
            </div>
        </div>
        <div class="produit-extend">
            <div class="flex-row">
                <div>
                    <h2>Caractéristique :</h2>
                    <p>Lorem ipsum dolor sit.</p>
                    <div></div>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <div></div>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div></div>
                    <h2>Review :</h2>
                </div>
                <div class="produit-extend-form">
                    <form action="">
                        <input type="hidden">
                        <input type="submit" value="Ajouter au panier">
                    </form>
                </div>
            </div>
            <div id="card-container">
                <div class="card">
                    <ion-icon name="person-outline"></ion-icon>
                    <div class="star-container">
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-half-sharp"></ion-icon>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing. dolor sit amet consectetur adipisi Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores, unde?</p>
                </div>
                <div class="card">
                    <ion-icon name="person-outline"></ion-icon>
                    <div class="star-container">
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing. dolor sit amet consectetur adipisi Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, rem?</p>
                </div>
                <div class="card">
                    <ion-icon name="person-outline"></ion-icon>
                    <div class="star-container">
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-half-sharp"></ion-icon>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing. dolor sit amet consectetur adipisi Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, rem?</p>
                </div>
            </div>
        </div>
        <div class="produit">
            <div class="produit-main">
                <ion-icon name="call-sharp"></ion-icon>
            </div>
            <div class="produit-text">
                <h2>Telephone fixe :</h2>
                <p><span>Modèle :</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, magni!</p>
                <p><span>Volume :</span> Lorem ipsum dolor sit amet consectetur.</p>
                <p><span>Type :</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam aperiam ducimus veritatis ad pariatur excepturi.</p>
                <p><span>Prix :</span> Lorem ipsum dolor sit.</p>
                <button class="cardExtend" type="button">Voir Plus</button>
            </div>
        </div>
        <div class="produit-extend">
            <div class="flex-row">
                <div>
                    <h2>Caractéristique :</h2>
                    <p>Lorem ipsum dolor sit.</p>
                    <div></div>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <div></div>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div></div>
                    <h2>Review :</h2>
                </div>
                <div class="produit-extend-form">
                    <form action="">
                        <input type="hidden">
                        <input type="submit" value="Ajouter au panier">
                    </form>
                </div>
            </div>
            <div id="card-container">
                <div class="card">
                    <ion-icon name="person-outline"></ion-icon>
                    <div class="star-container">
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-half-sharp"></ion-icon>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing. dolor sit amet consectetur adipisi Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores, unde?</p>
                </div>
                <div class="card">
                    <ion-icon name="person-outline"></ion-icon>
                    <div class="star-container">
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing. dolor sit amet consectetur adipisi Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, rem?</p>
                </div>
                <div class="card">
                    <ion-icon name="person-outline"></ion-icon>
                    <div class="star-container">
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-half-sharp"></ion-icon>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing. dolor sit amet consectetur adipisi Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, rem?</p>
                </div>
            </div>
        </div>
        <div class="produit">
            <div class="produit-main">
                <ion-icon name="phone-portrait"></ion-icon>
            </div>
            <div class="produit-text">
                <h2>Telephone portable :</h2>
                <p><span>Modèle :</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, magni!</p>
                <p><span>Volume :</span> Lorem ipsum dolor sit amet consectetur.</p>
                <p><span>Type :</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam aperiam ducimus veritatis ad pariatur excepturi.</p>
                <p><span>Prix :</span> Lorem ipsum dolor sit.</p>
                <button class="cardExtend" type="button">Voir Plus</button>
            </div>
        </div>
        <div class="produit-extend">
            <div class="flex-row">
                <div>
                    <h2>Caractéristique :</h2>
                    <p>Lorem ipsum dolor sit.</p>
                    <div></div>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <div></div>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div></div>
                    <h2>Review :</h2>
                </div>
                <div class="produit-extend-form">
                    <form action="">
                        <input type="hidden">
                        <input type="submit" value="Ajouter au panier">
                    </form>
                </div>
            </div>
            <div id="card-container">
                <div class="card">
                    <ion-icon name="person-outline"></ion-icon>
                    <div class="star-container">
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-half-sharp"></ion-icon>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing. dolor sit amet consectetur adipisi Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores, unde?</p>
                </div>
                <div class="card">
                    <ion-icon name="person-outline"></ion-icon>
                    <div class="star-container">
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing. dolor sit amet consectetur adipisi Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, rem?</p>
                </div>
                <div class="card">
                    <ion-icon name="person-outline"></ion-icon>
                    <div class="star-container">
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-half-sharp"></ion-icon>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing. dolor sit amet consectetur adipisi Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, rem?</p>
                </div>
            </div>
        </div>
        <div class="produit">
            <div class="produit-main">
                <ion-icon name="print"></ion-icon>
            </div>
            <div class="produit-text">
                <h2>Imprimante :</h2>
                <p><span>Modèle :</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, magni!</p>
                <p><span>Volume :</span> Lorem ipsum dolor sit amet consectetur.</p>
                <p><span>Type :</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam aperiam ducimus veritatis ad pariatur excepturi.</p>
                <p><span>Prix :</span> Lorem ipsum dolor sit.</p>
                <button class="cardExtend" type="button">Voir Plus</button>
            </div>
        </div>
        <div class="produit-extend">
            <div class="flex-row">
                <div>
                    <h2>Caractéristique :</h2>
                    <p>Lorem ipsum dolor sit.</p>
                    <div></div>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <div></div>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div></div>
                    <h2>Review :</h2>
                </div>
                <div class="produit-extend-form">
                    <form action="">
                        <input type="hidden">
                        <input type="submit" value="Ajouter au panier">
                    </form>
                </div>
            </div>
            <div id="card-container">
                <div class="card">
                    <ion-icon name="person-outline"></ion-icon>
                    <div class="star-container">
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-half-sharp"></ion-icon>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing. dolor sit amet consectetur adipisi Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores, unde?</p>
                </div>
                <div class="card">
                    <ion-icon name="person-outline"></ion-icon>
                    <div class="star-container">
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing. dolor sit amet consectetur adipisi Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, rem?</p>
                </div>
                <div class="card">
                    <ion-icon name="person-outline"></ion-icon>
                    <div class="star-container">
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-sharp"></ion-icon>
                        <ion-icon name="star-half-sharp"></ion-icon>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing. dolor sit amet consectetur adipisi Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, rem?</p>
                </div>
            </div>
        </div>
    </main>



    <?php include_once('footer.php'); ?>


    <?php
    if (empty($_SESSION['pseudo'])) :
    ?>
        <script src="./js/connexion.js"></script>
    <?php
    endif;
    ?>

    <script src="./js/header.js"></script>
    <script src="./js/cardExtend.js"></script>
    <script src="./js/app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>