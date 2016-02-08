# Phabricator : traduction française

Traduction partielle des chaînes les plus courantes de Phabricator, Maniphest, et quelques autres.

## Installation

Simplement:

  1. Récupérer ce dépôt ou téléchargez les deux fichiers php
  2. copier les fichiers php dans le dossier ``${ROOT}/phabricator/src/extensions`` où ${ROOT} est la racine de votre installation
  2. Lancer ``${ROOT}/arcanist/bin/arc liberate``.
  3. Dans le profil de l'utilisateur modifiez la langue en choisissant "Français (France)".

## Extraire les chaînes

Si vous souhaitez faire de nouvelles traductions vous pouvez bien-entendu éditer et enrichir cette traduction !

Pour extraire les chaînes il faut utiliser la commande ``phabricator/bin/i18n extract`` suivi d'un nom de dossier. Malheureusement il y a actuellement un bug qui empêche de le faire "intégralement" [T9643](https://secure.phabricator.com/T9643). Mais vous pouvez le faire module par module.

----
*Ça fait plaisir d'écrire en français sur GitHub quand même !*
