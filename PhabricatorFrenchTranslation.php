<?php

final class PhabricatorVeryWowEnglishTranslation
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_W*';
  }

  protected function getTranslations() {
    return array(

     #Maniphest
      'Tasks and Bugs' => 'Tâches et bugs',
      'Maniphest Help' => 'Aide Maniphest',
      'Create Task' => 'Créer une tâche',
      'Maniphest Task' => 'Tâche Maniphest',
      'Create New Task' => 'Créer',
      'Quick Create' => 'Abandonner',
      'Type a project name...' => 'Entrez le nom du projet...',
      'Type a username...' => 'Entrez des utilisateurs...',
      'Type a user, project, or mailing list name...' =>
        'Entez un utilisateur, un projet, ou une liste de diffusion...',
      'Queries' => 'Filtres',
      'Query: %s' => 'Filtre: %s',
      'Assigned' => 'Assigné',
      'Assigned: %s' => 'Assigné à : %s',
      'Authored' => 'Auteur',
      'Subscribed' => 'Abonné',
      'Open Tasks' => 'Tâches ouvertes',
      'All Tasks' => 'Toutes les tâches',
      'By User' => 'Par utilisateur',
      'By Project' => 'Par projet',
      'Assigned To' => 'Assigné à',
      'In All Projects' => 'Dans tous les projets',
      'In Any Project' => 'Dans n\'importe quel projet',
      'Not In Projects' => 'Pas dans les projets',
      "In Users' Projects" => 'Dans les projets utilisateurs',
      'Author' => 'Auteur',
      'Authors' => 'Auteurs',
      'Contains Words' => 'Contient les mots',
      'Priority' => 'Priorité',
      'Blocks' => 'Blocs',
      'Blocking' => 'Bloquant',
      'Blocked' => 'Bloqués',
      'Group By' => 'Grouper par',
      'Order By' => 'Ordonner par',
      'Task IDs' => 'IDs des tâches',
      'Created After' => 'Créé après',
      'Created Before' => 'Créé avant',
      'Updated After' => 'Mis à jour après',
      'Updated Before' => 'Mis à jour avant',
      'Page Size' => 'Taille des pages',
      'Shift-Click to Select Tasks' => 'Shift+clic pour sélectionner des tâches',
      'Select All' => 'Tout sélectionner',
      'Clear Selection' => 'Effacer la sélection',
      'Export to Excel' => 'Export Excel',
      'Export Tasks to Excel' => 'Exporter les tâches vers Excel',
      'Do you want to export the query results to Excel?' =>
       'Souhaitez-vous exporter les résultats dans un fichier Excel ?',
      'Batch Edit Selected »' => 'Edition batch sélectionnée »',
      'Edit Task' => 'Editer la tâche',
      'Save Task' => 'Sauvegarder la tâche',
      'Merge Duplicates In' => 'Fusionner les duplicatas',
      'Create Subtask' => 'Créer une sous-tâche',
      'Edit Blocking Tasks' => 'Éditer les tâches bloquantes',
      #'Edit Differential Revisions' => '?',
      #'Edit Pholio Mocks' => '?',
      'Automatically Subscribed' => 'Suiveurs automatiques',
      'Unsubscribe' => 'Ne plus suivre',
      'Subscribe' => 'S\'abonner',
      'Subscribers' => 'Abonnés',
      #'Start Tracking Time' => 'Zeit aufzeichnen starten',
      'Award Token' => 'Récompenser',
      'New task created. Create another?' =>
        'Nouvelle tâche créée. En créer une nouvelle ?',
      'Similar Task' => 'Tâche similaire',
      'Empty Task' => 'Tâche vide',
      'Older changes are hidden. ' => 'Modifications plus anciennes cachées. ',
      'Show older changes.' => 'Afficher les modifications plus anciennes.',
      #'' => '',
      '%s created this task.' => '%s a initié cette tâche.',
      'Weigh In' => 'Exprimez-vous...',
      '%s added a comment.' => '%s a commenté.',
      '%s closed this task as a duplicate.' =>
        '%s a fermé cette tâche car il s\'agit d\'un duplicatat.',
      '%s closed this task as "%s".' => '%s a fermé cette tâche : "%s".',
      '%s placed this task up for grabs.' => '%s a mis cette tâche en "à prendre".',
      '%s assigned this task to %s.' => '%s a assigné cette tâche à %s.',
      '%s claimed this task.' => '%s s\'est attribué cette tâche.',
      '%s updated subscribers...' => '%s abonnés mis à jour...',
      '%s triaged this task as "%s" priority.' => '%s a défini '.
        'la priorité de la tâche à "%s".',
      '%s raised the priority of this task from "%s" to "%s".' => '%s '.
        'a augmenté la priorité de "%s" vers "%s".',
      '%s lowered the priority of this task from "%s" to "%s".' => '%s '.
        'a baissé la priorité de "%s" vers "%s".',
      '%s edited associated projects.' => '%s a mis à jour le projet associé.',
      '%s awarded a token.' => '%s a donné un prix.',
      '%s set %s to %s.' => '%s a défini %s vers %s.',
      '%s edited the task description.' => '%s a édité la description de la tâche.',
      '%s updated the description of %s.' => '%s a mis à jour la description de %s',
      '%s changed %s from %s to %s.' => '%s a changé %s de %s à %s.',

     #Actions
      'Comment' => 'Commenter',
      'Change Status' => 'Modifier le statut',
      'Reassign / Claim' => 'Réassigner / Réclamer',
      'Add CCs' => 'Abonner d\'office',
      'Change Priority' => 'Changer la priorité',
      'Associate Projects' => 'Projets associés',
      /*'' => '',
      '' => '',
      '' => '',
      '' => '',
      '' => '',*/

    #Feed
      '%s created %s.' => '%s a initié %s.',
      '%s edited %s.' => '%s a modifié %s.',
      '%s set %s to %s on %s.' => '%s a défini %s à %s sur %s.',
      '%s changed %s from %s to %s on %s.' => '%s a modifié %s de %s vers %s sur %s.',
      '%s added a comment to %s.' => '%s a commenté %s.',
      '%s edited the description of %s.' => '%s a mis à jour la description de %s.',
      '%s edited the content of %s.' => '%s a modifié le contenu de %s.',
      '%s awarded %s a %s token.' => '%s a récompensé %s par %s susucre.',
      '%s triaged %s as "%s" priority.' => '%s a priorisé %s : "%s".',
      'To begin on such a grand journey, requires but just a single step.' =>
        'Pour s\'élancer dans un grand voyage un seul pas suffit.',

    #Diffusion
      'Host and Browse Repositories' => 'Héberger et parcourir les dépôts',

    #Audit
      'Browse and Audit Commits' => 'Parcourir et auditer les commits',

    #Projects
      'All' => 'Tout',
      'Project' => 'Projet',
      'Projects' => 'Projets',
      'Get Organized' => 'Organisez-vous',
      'Create Project' => 'Créer un projet',
      'Create New Project' => 'Créer un nouveau projet',
      'Joined' => 'Rejoint',
      'Active' => 'Actif',

    #Profiles
      'User Accounts and Profiles' => 'Comptes utilisateurs et profils',
      'User' => 'Utilisateur',
      'People' => 'Individu',
      'User Since' => 'Ancienneté',
      'Roles' => 'Rôles',
      'Not Approved' => 'Non approuvé',
      'Unverified' => 'Non vérifié',
      'Verified' => 'Vérifié',
      'Available' => 'Disponible',
      'Edit Profile' => 'Modifier le profil',
      'Edit Profile Picture' => 'Modifier la photo de profil',
      'Remove Administrator' => 'Supprimer le privilège administrateur',
      'Change Username' => 'Modifier l\'identifiant',
      'Disable User' => 'Désactiver l\'utilisateur',
      'Delete User' => 'Supprimer l\'utilisateur',
      'Send Welcome Email' => 'Envoyer l\'email de bienvenue',
      'Basic Policies' => 'Politique de base',
      'All Users' => 'Tours les utilisateurs',
      'Administrators' => 'Administrateurs',
      'No One' => 'Personne',
      'User Policies' => 'Politiques utilisateur',
      'Advanced' => 'Avancé',
      'Custom Policy...' => 'Politique personnalisée',

    #Conpherence' => '',
      'Send Messages' => 'Envoyer les messages',
      'Message' => 'Message',
      'Messages' => 'Messages',
      'To' => 'À',
      'Send Message' => 'Envoyer le message',
      'New Message' => 'Nouveau message',
      'Join a Room' => 'Rejoindre le salon',
      'Create a Room' => 'Créer un salon',
      'No Messages' => 'Aucun message',
      '%s named this room "%s".' => '%s a donné un nom à ce salon "%s".',

     #Files' => '',
      'Files' => 'Fichiers',
      'Store and Share Files' => 'Stockage et fichiers partagé',
      'Drop Files to Upload' => 'Déposer les fichiers à envoyer',
      'Image' => 'Image',
      'Countdown to Events' => 'Compte à rebours des événements',

     #Settings
      'Settings' => 'Paramètres',
      'Edit Settings' => 'Modifier les paramètres',
      'Save Preferences' => 'Enregistrer',
      'Save Account Settings' => 'Enregistrer les paramètres du profil',
      'Account Settings' => 'Paramètres du Profil',
      'Account' => 'Profil',
      'Translation' => 'Traduction',
      'Pronoun' => 'Pronom',
      '%s updated their profile' => '%s ressent du bonheur',
      '%s updated his profile' => '%s est heureux',
      '%s updated her profile' => '%s est heureuse',
      '**Choose the pronoun you prefer:**' => "**Quel genre préférez-vous ?**",
      'Date and Time Settings' => 'Paramètrs de date et heure',
      'Timezone' => 'Fuseau horaire',
      'Time-of-Day Format' => 'Format de l\'heure',
      'Format used when rendering a time of day.' => 'Format utilisé pour représenter l\'heure de la journée.',
      'Date Format' => 'Format de date',
      'Format used when rendering a date.' => 'Format utilisé pour afficher une date',
      'European (28-02-2000)' => 'Européen (28-02-2000)',
      'Week Starts On' => 'Premier jour de la semaine',
      'Calendar weeks will start with this day.' => 'Les semaines du calendrier commenceront ce jour là.',
      '12-hour (2:34 PM)' => '12 heures (2:34 PM)',
      '24-hour (14:34)' => '24 heures (14:34)',

     #Config
      'Configure Phabricator' => 'Configurer Phabricator',
      
     #404
      'Do not dwell in the past, do not dream of the future, '.
          'concentrate the mind on the present moment.' =>
        'Ne vous attardez pas sur le passé, ne rêvez pas du futur, '.
          'concentez vos pensées sur le moment présent.',

     #Auth' => '',
      'Login to Phabricator' => 'Connexion',
      'Username or Email' => 'Email ou identifiant',
      'Password' => 'Mot de passe',
      'Forgot your password?' => 'Mot de passe oublié ?',
      'Register New Account' => 'Créer un compte',
      'Phabricator Username' => 'Identifiant',
      'Real Name' => 'Nom complet',
      'Confirm Password' => 'Confirmer le mot de passe',
      'Minimum length of %d characters.' => 'La taille minimale est de %d caractères.',
      'Register Phabricator Account' => 'Créer un compte Phabricator',
      'Login' => 'Connexion',
      'Log out of Phabricator?' => 'Se déconnecter de Phabricator ?',
      'Are you sure you want to log out?' => 'Etes-vous sûr de vouloir vous déconnecter ?',
      'Log Out' => 'Se déconnecter',
      'Logout' => 'Déconnecter',

     #Date/Time
      'Time' => 'Heure',
      'Date and Time' => 'Date et heure',

     #Days
      'MTWTFSS' => 'LMMJVSD',
      'Mon' => 'Lu',
      'Tue' => 'Ma',
      'Wed' => 'Me',
      'Thu' => 'Je',
      'Fri' => 'Ve',
      'Sat' => 'Sa',
      'Sun' => 'Di',
      'Monday' => 'Lundi',
      'Tuesday' => 'Mardi',
      'Wednesday' => 'Mercredi',
      'Thursday' => 'Jeudi',
      'Friday' => 'Vendredi',
      'Saturday' => 'Samedi',
      'Sunday' => 'Dimanche',
      'Yesterday' => 'Hier',
      'Today' => 'Aujourd\'hui',
      'Tomorrow' => 'Demain',

     #Months
      'Feb' => 'Fév',
      'Mar' => 'Mar',
      'Apr' => 'Avr',
      'Jun' => 'Juin',
      'Jul' => 'Juil',
      'Aug' => 'Aoû',
      'January' => 'Janvier',
      'February' => 'Février',
      'March' => 'Mars',
      'April' => 'Avril',
      'May' => 'Mai',
      'June' => 'Juin',
      'July' => 'Juillet',
      'August' => 'Août',
      'September' => 'Septembre',
      'October' => 'Octobre',
      'November' => 'Novembre',
      'December' => 'Décembre',

     #Autre
      '%s a supprimé l\'image du projet.' => '%s a supprimé l\'image du projet.',
      '%s a déplacé ceci de "%s" vers "%s".' => '%s a déplacé ceci de "%s" vers "%s".',
      '%s removed this form from the "Create" menu.' => '%s a supprimé ce formulaire du menu de création.',
      '%s moved this document from %s' => '%s a déplacé ce document de %s',
      '%s moved this document to %s' => '%s a déplacé ce document vers %s',
      '%s moved this task to %s on the %s workboard.' => '%s a déplacé cette tâche vers %s sur le  %s.'

    );
  }

}