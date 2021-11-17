<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include_once('header.php'); ?>

    <div class="container-f">
        <?php include_once('inscrire.php') ?>
        <?php include_once('connexion.php') ?>
    </div>

    <?php include_once('pseudoEmailExistant.php'); ?>

    <main>
        <div class="wrapper">
            <h2>Lorem ipsum dolor sit amet</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et distinctio provident numquam quasi assumenda cupiditate sunt perspiciatis praesentium! Soluta corrupti labore sed ipsa accusamus consequuntur quibusdam quisquam voluptatem nobis deserunt sunt velit magni qui, aliquid reiciendis, aliquam cupiditate quidem repudiandae eius! Officia magnam repellendus nemo pariatur maiores neque debitis sapiente dolorem distinctio. Perferendis, aliquid neque. Quod recusandae sapiente optio excepturi necessitatibus eligendi, sequi officia voluptatum obcaecati rem rerum accusamus corporis alias eius, quis sit aspernatur aut tempore. Voluptates quaerat suscipit facilis eum harum libero, perferendis eligendi illum mollitia quae nobis consequatur voluptate dolores impedit tempora nam exercitationem dolorum illo perspiciatis?</p>
            <div class="box-container">
                <div class="box">
                    <ion-icon name="camera-outline"></ion-icon>
                </div>
                <div class="box">
                    <ion-icon name="documents-outline"></ion-icon>
                </div>
                <div class="box">
                    <ion-icon name="bulb-outline"></ion-icon>
                </div>
            </div>
            <h2>Lorem ipsum dolor sit amet</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et distinctio provident numquam quasi assumenda cupiditate sunt perspiciatis praesentium! Soluta corrupti labore sed ipsa accusamus consequuntur quibusdam quisquam voluptatem nobis deserunt sunt velit magni qui, aliquid reiciendis, aliquam cupiditate quidem repudiandae eius! Officia magnam repellendus nemo pariatur maiores neque debitis sapiente dolorem distinctio. Perferendis, aliquid neque. Quod recusandae sapiente optio excepturi necessitatibus eligendi, sequi officia voluptatum obcaecati rem rerum accusamus corporis alias eius, quis sit aspernatur aut tempore. Voluptates quaerat suscipit facilis eum harum libero, perferendis eligendi illum mollitia quae nobis consequatur voluptate dolores impedit tempora nam exercitationem dolorum illo perspiciatis?</p>
            <div class="box2-container">
                <div>
                    <div class="box2">
                        <h3>Lorem ipsum dolor sit.</h3>
                        <h4>Lorem, ipsum dolor.</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, blanditiis ea facilis quis voluptate omnis doloremque laudantium natus ex excepturi similique maxime consectetur quidem cum autem. Tempora, ab beatae quidem officiis vero accusamus repellat atque, error sint adipisci provident sequi consequatur sunt. Eos blanditiis sunt quas beatae iste ea dolorem nihil eius, repellendus adipisci corporis, est illum. Ducimus illum, iure distinctio officiis ipsum molestias voluptatibus.</p>
                    </div>
                    <div class="second-box2">
                        <h3>Lorem ipsum dolor sit.</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam facilis magni aut velit veniam sint eaque obcaecati non temporibus vel!</p>
                    </div>
                </div>
                <div>
                    <div class="box2">
                        <h3>Lorem ipsum dolor sit.</h3>
                        <h4>Lorem, ipsum dolor.</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, blanditiis ea facilis quis voluptate omnis doloremque laudantium natus ex excepturi similique maxime consectetur quidem cum autem. Tempora, ab beatae quidem officiis vero accusamus repellat atque, error sint adipisci provident sequi consequatur sunt. Eos blanditiis sunt quas beatae iste ea dolorem nihil eius, repellendus adipisci corporis, est illum. Ducimus illum, iure distinctio officiis ipsum molestias voluptatibus.</p>
                    </div>
                    <div class="second-box2">
                        <h3>Lorem ipsum dolor sit.</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam facilis magni aut velit veniam sint eaque obcaecati non temporibus vel!</p>
                    </div>
                </div>
                <div>
                    <div class="box2">
                        <h3>Lorem ipsum dolor sit.</h3>
                        <h4>Lorem, ipsum dolor.</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, blanditiis ea facilis quis voluptate omnis doloremque laudantium natus ex excepturi similique maxime consectetur quidem cum autem. Tempora, ab beatae quidem officiis vero accusamus repellat atque, error sint adipisci provident sequi consequatur sunt. Eos blanditiis sunt quas beatae iste ea dolorem nihil eius, repellendus adipisci corporis, est illum. Ducimus illum, iure distinctio officiis ipsum molestias voluptatibus.</p>
                    </div>
                    <div class="second-box2">
                        <h3>Lorem ipsum dolor sit.</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam facilis magni aut velit veniam sint eaque obcaecati non temporibus vel!</p>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <?php include_once('footer.php'); ?>




    <script src="app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>