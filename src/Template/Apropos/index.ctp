<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Apropo[]|\Cake\Collection\CollectionInterface $apropos
 */
?>
 
<html>
    <head>
        <meta charset="utf-8" />
        <title>À propos</title>
    </head>
    <style>
        #center
        {
            text-align:center;
        }
    </style>
    <body>
     <div id="center">
            <h1>À propos</h1>
            <h2>Kenny Linh</h2>
            <h3>420-4A4 MO Web et Bases de données</h3>
            <h3>Hiver 2020, Collège Montmorency</h3>
</div>
        <br/>
        <br/>
        <div>
            <h3>Description sommaires des étapes d'utilisation</h3>
            
              <h4>Utilisation de: Ajax, JQuery, Bootstrap</h4>   

            
            <p>Le programme est pour but de créer une commande en 
                remplissant un formulaire qui demande:</p>
            <ol>
                <li>Nom de la commande </li>
                <li>Sous-sujet en lien avec la commande </li>
                <li>Un tags qui détermine si c'est une commande à venir chercher, commande d'affaire, livraison </li>
                <li>Un fichier photo en lien avec le sujet afin d'effectuer une recherche facile pour ceux qui sont visuel </li>
            </ol>
            
              <p>Le programme peut faire d'autres actions similaire à la création des commandes.<br/>
                  On peut afficher la liste des commandes,selections,produits, departments, sous-sujets, les tags (les choix de commande) et les produits.<br/>
                  On peut aussi afficher le format pdf de la vue des commandes.
              </p>         
        </div>

        <div>
            <h4>Il y a quatre onglets:</h4>
            <dl>
                <dt>Listes liées</dt>
                    <dd>La liste liée permet d'ajouter un sous-sujet et le reliée selon son départment ainsi que la selection qui dépend du départment. Il faut ensuite créer un code de sous-sujet et un nom pour l'identifier.</dd>
                    
                <dt>Autocomplétion</dt>
                    <dd>L'autocomplétion permet de créer une commande et lorsqu'on tappe une lettre dans le sous-sujet, il doit afficher une liste de tout les noms qui commence par la lettre tappée.</dd>
                    
                <dt>Monopage </dt>
                    <dd>La monopage sert à créer,modifier et supprimer des départments avec un interface ajoutée.</dd>
                    
                <dt>Routage Admin</dt>
                    <dd>Il affiche la page des départments avec un thème ajoutée lorsqu'on est connecter en tant qu'admin.</dd>
            </dl>
            <p>Voici une image du diagramme de la base de données:</p>
            <img src= "img/diagramme.png" alt="diagramme" >

        </div>

        <div id="center">
            <h4>POUR PLUS DE DÉTAIL</h4>
            <p>Appuyez <a href="img/facture_et_paiement.pdf" target="_blank">ici</a> pour voir le schéma detaillé de la base de données.</p>
            <p>Appuyez <a href="http://www.databaseanswers.org/data_models/invoices_and_payments/index.htm" target="_blank">ici</a> pour voir le diagramme original de la base de données.</p>
            <p>Appuyez <a href="https://github.com/KennyLinh/ApplicationInternet" target="_blank">ici</a> pour acceder au github du projet fait par Kenny Linh.</p>
            <a href="index.php">Retour</a>
       </div>
    </body>
</html>









