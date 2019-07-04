#Flux de construction 

##Création de la database

##Création des entity

##Création des Fixtures 
( Données fictives pour les tests )

##Création du login 
Pour pouvoir check ensuite si les les évènements peuvent être modifier en admin / user ou non

Pour le login il fallait suivre la doc symfony afin de pouvoir mettre aussi la bonne sécurité

C’est au cours de ce processus que la doc a informé que le argon2i était deprecated et qu’il était désormais conseillé de mettre l’algorithm d’encodeur  en auto afin qu’il choisisse le plus optimisé entre sodium , argon2i et brykt.

##Création d’un CRUD 
Pour la classe Event ce qui a généré un contrôleur/ un form / des fichiers twig : remove : edit : new : form : index : show

##Modifications des fichiers 
( services.yaml / EventController.php / EventType) afin d’inclure les images ainsi que : get user et get slugg.( ajouter un dossier Service dans lesquel on met la classe Slugger) 

##Découpage du fichier html de pierre .
 
 Pour l’intégrer dans les twigs et les rendres dynamiques avec des BLK (blocks)

{% block title %}Event index{% endblock %}

##Ajout des participants

##Ajout d’une page admin 

##Dynamisation de la page homepage suivant l’utilisateur connecté 

{% if app.user %}
   <a class="p-2 text-white" href="{{ path('event_new') }}">Proposer un événement</a>
   <a class="p-2 text-white" href="{{ path('account') }}">Mon compte</a>
   <a class="p-2 text-white" href="{{ path('app_logout') }}">Déconnexion</a>
   {% if is_granted('ROLE_ADMIN') %}
       <a class="p-2 text-white" href="{{ path('easyadmin') }}">Admin</a>
   {% else %}
   {% endif %}
{% else %}
   <a class="p-2 text-white" href="{{ path('app_login') }}">Proposer un événement</a>
   <a class="p-2 text-white" href="{{ path('app_login') }}">Connexion</a>
   <a class="p-2 text-white" href="{{ path('app_register') }}">Inscription</a>
{% endif %}
