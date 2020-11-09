

    Aller au menu Aller au contenu Aller à la recherche

Accueil - Alsacreations.com

    actualités
    tutoriels
    forum
    emploi

    S'inscrire
    Connexion

    Tutoriels et astucesOutilsLivresQuiz

Rechercher

Bienvenue ! Alsacréations est une communauté dédiée à l'apprentissage des standards web (HTML, CSS, JavaScript), du design et de l'accessibilité numérique. Vous y trouverez tutoriels, forum, annonces d'emploi, quiz, concours et bien d'autres choses. Créez votre profil en quelques secondes pour participer ou consultez notre politique de protection des données.

Niveau Niveau débutant
HTML5 : structure globale du document

Articlehtml

Publié par Simon-K le 30 Janvier 2012, mis à jour le 05 Mai 2014 (827947 lectures)

xhtml balises doctype meta html5 head body
Pour débuter sereinement avec une nouvelle intégration HTML5 et comprendre ses implications, nous allons commencer par le début : la structure globale d'un document.

La conception d'une page web en suivant la philosophie du standard HTML5 spécifié par le W3C (ou du standard vivant tel que désigné par le WhatWG) répond à quelques réflexes de base. La structure d'un document (l'imbrication des balises à la racine) est simplfiiée pour répondre aux attentes pragmatiques des intégrateurs et webdesigners.

Un document HTML5 minimal

Sans surprise, les bases d'un code HTML5 ressemblent beaucoup à celles rédigées à l'aide des précédentes versions HTML 4 et XHTML 1.x. Rétro-compatibilité oblige. On y retrouve donc un doctype suivi des éléments les plus courants : <html>, <head>, <title>, <meta>, <link>, <script> et <body>.

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  ...
  <!-- Le reste du contenu -->
  ...
</body>
</html>

Le doctype

La première ligne d'en-tête a été considérablement simplifiée. On peut maintenant retenir un doctype par coeur, sans avoir à le copier-coller.

<!doctype html>

Ce doctype allégé a été mûrement testé et réfléchi : il permet toujours - pour les anciens navigateurs - de rester dans le mode d'interprétation conforme aux standards et d'éviter le mode quirks. On peut remarquer qu'il n'y a pas d'allusion à un quelconque numéro de version. Son rôle est toujours de préciser quel est le type de document qui va suivre, afin de permettre au navigateur de savoir quel langage de la vaste famille SGML il devra interpréter.
L'élément racine <html>

C'est lui qui va recueillir les deux principaux éléments de la hiérarchie : <head> et <body>.

L'attribut lang (sur <html>)

On a tendance à l'oublier : l'attribut lang précise la langue utilisée pour le contenu de la page, lorsqu'il est placé sur la racine <html>.

<html lang="fr">

Une langue bien indiquée sera utile ainsi aux synthèses vocales (pour adopter le bon accent).

Les fameux <head> et <body>

À ce niveau, le code HTML peut être divisé en deux parties : l'en-tête située entre les balises <head> et </head>, qui regroupe toutes les méta-informations, c'est-à-dire les données qui ne sont pas représentées directement à l'écran dans le rendu du document, mais qui lui sont tout de même liées : le titre dans <title> (extrêmement recommandé), les autres méta-informations variées (facultatives : mots-clés, description générale de la page) dans zéro ou plusieurs <meta>, et éventuellement <link>, <script> ou <style>.

La deuxième partie comprend le corps à proprement parler, c'est-à-dire <body>. On y retrouvera tout le reste du contenu HTML, structuré par des balises variées - selon ce que l'on aura à y placer - et dont l'apparence sera affectée par les styles CSS chargés dans <link> et/ou <style>.
L'attribut charset (sur <meta>)

Préciser l'encodage des caractères est primordial pour exploiter la bonne page de code et ne pas se retrouver avec les caractères spéciaux ou accentués. Le choix de l'UTF-8 est désormais préconisé par le W3C pour tous les protocoles échangeant du texte sur internet (dont HTML).

<meta charset="utf-8">

On retrouvera donc très souvent ce codage de caractères, par contre il faut toujours veiller à ce que l'éditeur permettant de coder en HTML (que ce soit un IDE tout-en-un ou un simple éditeur de texte) enregistre le fichier avec le bon encodage, et non en Latin-1 (alias ISO-5589-1) ou ANSI si la balise <meta> indique UTF-8.

Veillez à toujours placer cette déclaration d'encodage avant toutes les autres balises contenues dans la section <head>. En effet, celles-ci sont immédiatement concernées, par exemple <title> qui peut déjà faire appel à des caractères en UTF-8 ; ceci également dans un but de sécuriser l'interprétation des caractères spéciaux et prévenir les injections de contenu indésirables.
L'élément <link>

Dans la majorité des cas, une balise <link> placée dans l'en-tête permet de mettre en relation la page avec d'autres documents externes. La plupart du temps cela concerne les feuilles de style CSS externes avec une relation du type stylesheet, mais il est aussi possible de définir d'autres types de relations (par exemple avec author, icon, prefetch, next, prev, etc).

<link rel="stylesheet" href="style.css">

En HTML5, il n'est plus strictement obligatoire de spécifier l'attribut type.

Pour inclure directement des instructions CSS dans le document HTML sans passer par un fichier externe, <style> est à votre service. Cependant, il vaut mieux faire confiance à un fichier indépendant : il n'y aura qu'un seul code à maintenir pour de multiples pages (voire pour tout le site), et la mise en cache par le navigateur n'en sera que plus efficace.
L'élément <script>

Cet élément permet d'ajouter des scripts (JavaScript) qui vont s'éxécuter côté client dans le navigateur dès leur chargement.

<script src="script.js"></script>

En HTML5, il n'est plus obligatoire de spécifier l'attribut type. Celui-ci est de toute manière interprété par défaut en text/javascript par tous les navigateurs.
Les autres éléments HTML5

Une fois la structure de base préparée, il est temps de commencer à y placer d'autres éléments HTML pour le contenu à proprement parler : paragraphes, listes, liens, images, vidéos, tableaux de données, formulaires, etc. La majorité des éléments HTML sont toujours au rendez-vous dans HTML5, qui se voit complété par quelques nouveautés pour le balisage. Par exemple :

    Éléments de section <section>, <article>, <header>, <footer>, <nav> et <aside>
    Élément <datalist>
    Éléments <details> & <summary>
    Éléments <figure> & <figcaption>
    Éléments média <audio> et <video> complétés par <source>
    Élément <canvas>
    Éléments <meter>, <output> et <progress>
    Élément <time> et <mark>
    Et tous les autres, que l'on peut retrouver dans une liste complète maintenue par le W3C : HTML : The Markup Language

Pour rappel, tous les nouveaux éléments HTML5 ne sont pas nécessairement reconnus de façon native et cohérente par tous les navigateurs (même les plus récents). Pour certains, il sera possible de trouver des alternatives avec des compléments en JavaScript. Pour d'autres, il faudra patienter jusqu'à une implémentation totale, et évaluer le risque selon le besoin : un nouvel élément sera-t-il tout de même consultable, masqué, ou géré de façon erronée ?

Pour juger de l'état de la prise en charge par les navigateurs, fiez-vous à Caniuse.com qui dresse des tableaux de support complets, ou bien encore à HTML5Please, qui indique de façon rationnelle par rapport aux parts de marché ce qu'il est possible d'utiliser en production pour un maximum de visiteurs.
Templates et boilerplates

Des modèles réfléchis et structurés existent pour faciliter le démarrage d'un nouveau projet web autour de HTML5, et de ses futures évolutions. Ils reprennent la structure globale d'un document, en y ajoutant quelques bonnes pratiques, avec parfois des fichiers de configuration pour le serveur et des feuilles de styles de base, voire même des librairies JavaScript.
HTML5 Boilerplate

HTML5 Boilerplate

HTML5 Boilerplate
Initializr

Initializr

Initializr par Jonathan Verrecchia
HTML KickStart

HTML Kickstart

HTML KickStart par 99lime
Bootstrap

Bootstrap

Bootstrap (par la team Twitter)

Schnaps.it

Schnaps.it (par la team Alsacréations)
Jetez-vous à l'eau !

Comme on peut le constater, démarrer un document HTML5 est facilement abordable, et reste rétro-compatible, pour peu que les nouveaux éléments soient intégrés de façon intelligente. Étant donné que cette nouvelle version du langage embarque la grande majorité des éléments déjà connus par les précédentes moutures, il n'y aura pas de risque de s'y aventurer progressivement.

HTML5 propose de nouveaux éléments qui ont pour objectif de faciliter l'intégration de médias, d'utiliser des composants plus dynamiques sans avoir besoin de faire appel - à plus long terme - à des extensions propriétaires (Flash, Java, Silverlight). Le balisage propose également d'obtenir une meilleur sémantique, avec tous les aspects bénéfiques qui en découlent (accessibilité, référencement, syndication, interprétation par les moteurs de rendu, etc.)

HTML5 siginifie-t-il obligatoirement l'utilisation de CSS 3 ? Dois-je tout réapprendre ? Pour répondre à ces questions, un article est prévu à cet effet : Les 5 mythes et vérités de HTML5

Quiz

Testez vos connaissances avec un Quiz HTML5
Commentaires
Patidou
30 Janvier 2012 à 10h56

Perso j'écris mon doctype comme ça:

<!DOCTYPE html>

Ainsi il est compatible xhtml5. ;)
tm™
30 Janvier 2012 à 11h22

Merci pour cet article.
Je m'en vais de ce pas jeter un coup d'oeil à HTML KickStart !
Juste une petite remarque : au sens strict <header> et <footer> ne sont pas des élément de section mais plutôt de flux...
mfaure
30 Janvier 2012 à 15h54

Excellent article, merci !

Juste une précision, le doctype est sensible à la casse, il s'écrit donc:
<!DOCTYPE html>

Le pointeur sur la spec W3C: http://www.w3.org/TR/html5/syntax.html#the-do...
dew
30 Janvier 2012 à 16h57

Justement, non, la spec dit bien que ce n'est pas sensible à la casse :
"In other words, <!DOCTYPE html>, case-insensitively."

Pour la compat' XHTML5 ça peut se comprendre, mais personne ne fera vraiment de XHTML5, c'est bien trop contraignant.
jmlapam
30 Janvier 2012 à 21h55

Merci pour cet article.
Pour les scripts en fin de page c'est pas toujours vrai, en plus souvent certains font l'erreur de mettre des scripts bas de page, croyant ainsi optimiser, alors que les scripts en question sont à mettre avant la balise <body> dans le <head>, je pense à des js comme selectivzr ou HTML5 media par exemple. Y a plein de topics sur le forum où le problème vient de là.
Felipe
31 Janvier 2012 à 10h20

html5shiv et tous les scripts qui l'embarquent sont en effet à placer en haut de la page, pour IE8 et moins uniquement.
Simon-K
31 Janvier 2012 à 10h36

En effet, ce n'est pas la règle d'or pour tous les scripts. J'ai supprimé la ligne histoire de se concentrer uniquement sur HTML5 ;) - Merci pour la lecture !
jonnefoy
31 Janvier 2012 à 12h37

Un bon article qui m'a permis de rectifier le tir sur certains points ! Merci Simon.
Dorgel
06 Septembre 2018 à 00h58

Merci pour ce tuto trés intéressant. Est ce que les scripts JavaScript sont dans cette même page ou externe? Exemple: monJavascript.js. merci pour votre réponse.

Dorgel
Jean-Pierre-Bruneau
21 Février 2020 à 11h20

Curieux la réaction d'un module html5 avec ses balises qui ne marchent plus avec Grid Layout ?

<section>

<article>

<figure><img src="logos/illustration002.jpg" alt="image"/></figure>

<div>

un texte qui se mettait a droite de l'image

</div>

</article>

</section>
Commenter

Vous devez être inscrit et identifié pour utiliser cette fonction.
Connectez-vous (déjà inscrit)

Identifiant (pseudo) ou e-mail :

Mot de passe :

Oubli de mot de passe ? Pas de panique, on va le retrouver

Pas encore inscrit ? C'est très simple et gratuit.

" .titanic { float:none; } " (Edward John Smith)

    plan du site contact boutique formations agence web
    Retourner en haut de page

Alsacréations est une communauté dédiée à la conception de sites et applications web de qualité, grâce aux standards W3C, aux feuilles de styles CSS, aux langages HTML et JavaScript, et à l'accessibilité. Réalisé par l'agence web Alsacreations.fr · Hébergement Syazen · À propos et mentions légales · Données personnelles
