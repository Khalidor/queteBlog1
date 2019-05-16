<?php
//Lancement d'un repo
//  Aller sur la doc symfony dans la rubrique set up"composer create-project symfony/website-skeleton my-project"
//Lancer le serveur "php bin/console s:r"
// ouvrir une nouvelle console
// les dossiers les plus important sont "templates"(les vues (.twig)) et "src"(les controller, effectue des controls entre la vue et le modele)
//
//quete 3 initialiser un travail et créer un fichier
//aller sur la documentation création d'un fichier
//créer un fichier "DefaultController" (ou un autre nom_Contrller); pour cela nous allons créer une class (suggéré dans phpStorm)
//Symfony crée directement la class DefaultController dans le fichier, on rajoute extends et il me propose "extends AbstractContrller
//dans la méthode (entre les accolades), on vient inscrire "la route" (ceci nous évite de faire des "includes" des "requires"...
// comme ceci " /**
//              * Matches /blog exactly
//              *
//              * @Route("/blog", name="blog_list")
//              */
// on a une page "base.html.twig" créé par synfony
// on créé une page defaulthtmltwig avec {% extends "base.html.twig" %} à a base, ceci évite de créer un require header, footer, nav... pour chaque page
//// dans ce fichier on vient faire ceci  {% block body %}
//
//
//                                          <h1> {{ accueil }}</h1>
//
//                                          {% endblock %}
//