<!--
/**
 * Created by PhpStorm.
 * User: sundor
 * Date: 12/08/2018
 * Time: 16:09
 */
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
    <?php
    include("../menu.php");
    ?>
    <h2>Page de test</h2>
    <p>
        Cette page contient du code HTML avec des balises PHP.<br />
        <?php echo "Ceci est du texte php";?>
        Voici quelques petits tests :
    </p>
    <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
    </ul>
    <?php

    $age_du_visiteur = 17;
    echo 'le visiteur à '.$age_du_visiteur.' ans';


    ?>
    </body>
</html>
