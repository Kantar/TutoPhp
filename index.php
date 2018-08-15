<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>ACCUEIL TEST PHP</title>
    <style type="text/css">
        a {text-decoration: none; color: black;}
        .blue {
            background: blue;
            color:white;
        }
        .orange {
            background: orange;
            color:white;
        }
        .green {
            background: green;
            color:white;
        }
        .red {
            background: red;
            color:white;
        }
        .footer {
             position: absolute;
             bottom: 0;
             width: 100%;
             height: 60px;
             background: #000000;
             color: #FFFFFF;
         }

    </style>

</head>
<body>
<div class="jumbotron">
    <h1>Bienvenue sur l'accueil des tests php et bootstrap</h1>
    <h3>Voici la liste des tâches:</h3>
    <div class="container">
        <div class="btn-group" style="text-align: center">
            <a class="btn btn-primary btn-sm" href="#" >Tache en attente</a>
            <a class="btn btn-success btn-sm" href="#" >Tache terminée</a>
            <a class="btn btn-info btn-sm" href="#" >Tache en cours</a>
            <a class="btn btn-danger btn-sm" href="#" >Tache en erreur</a>
        </div>
        <?php include("menu.php"); ?>
    </div>
    <div class=container>
        <a><?php echo $title; ?></a>
        <ul class="list-group">

            <li id="<%= 'tache'+tache.idTache %>" class="list-group-item">
                <?php include($link); ?>
            </li>
        </ul>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script>
    <?php
    //include("./codephp.php");
    $title;
    $link;

    if(!isset($_GET['title'])){
        $title = $_GET['title'];
        var_dump($title);
        switch ($title){
            case Tuto1:
                $link = '"./Tuto1/bonjour.php"';
                break;
            default:
                $link = "codephp : title non prévus";
                break;
        }
    }else{
        $title ='Accueil';
    }
    ?>
</script>
<script>

    // ****************************JQuery*******************
    jQuery(document).ready(function(){
        //alert('jQuery OK!!!');
        $('[id^="etatTache"]').each(function(){
            //var indice = $(this).attr('id');
            var etat = $(this).attr('value');
            $(this).addClass(etatColorTache(etat));
        });
        //fonction de defilement de la barre de progression
        function timer(n,idTache) {
            console.log('timer');
            $("#progressTache"+idTache).css("width", n + "%");
            if(n < 100) {
                setTimeout(function() {
                    timer(n + 1,idTache);
                }, 200);
            }
        }
        $(function (){
            $('[id^="execTache"]').click(function() {
                let idTache = $(this).attr('idTache');
                console.log('idtache: '+idTache);
                timer(0,idTache);
            });
        });
        //  ********** tests ajax****************
        //test
        /* $('[id^="supTache"]').click(function(){
             let urlTache;
             urlTache = $(this).attr('href')
             //récupère l'url
             $.ajax({
                 url : '/accueil/utilisateur/supprimertache/',
                 type : 'GET',
                 dataType : 'html', // On désire recevoir du HTML
                 success : function(code_html, statut){ // code_html contient le HTML renvoyé
                     //supprime l'id de la tache selectionné : codehtml retourne id

                     $('[id=tache+idTache"]').remove();

                 },
                 error : function(resultat, statut, erreur){
                 },
                 complete : function(resultat, statut){
                 }
             });
         });*/


    });
    // *****************************JavaScript*******************
    function etatColorTache(etatTache){
        console.log('etat de la tache: '+etatTache);
        var classe;
        if(etatTache=='attente')
            classe='bg-info text-white';

        if(etatTache=='enCours')
            classe= 'bg-primary text-white';

        if(etatTache=='terminee')
            classe= 'bg-success text-white';

        if(etatTache=='erreur')
            classe= 'bg-danger text-white';

        return classe;
    }
    //affichage du detail de la tache
    function show(indice){
        if (document.getElementById(indice).style.display=="none")		// Si la zone indiqué par indice est invisible
            document.getElementById(indice).style.display="block";		// On l'affiche
        else									// Sinon (elle est donc visible)
            document.getElementById(indice).style.display="none";		//On la rend invisible
    }


</script>
<?php include("footer.php"); ?>
</body>
</html>