# Phabricator : traduction française

Traduction partielle des chaînes les plus courantes de Phabricator, Maniphest, et quelques autres.

## Installation

``${ROOT}`` est la racine de votre installation:

  1. Patcher ``libphutil`` pour ajouter la locale fr_FR : 
    ``cd ${ROOT}/libphutil ; git am --signoff < add_fr_FR_locale.patch``
  2. copier les fichiers php dans le dossier ``${ROOT}/phabricator/src/extensions`` 
  3. Lancer ``${ROOT}/arcanist/bin/arc liberate``.
  4. Dans le profil de l'utilisateur modifiez la langue en choisissant "Français (France)".

## Extraire les chaînes

Si vous souhaitez faire de nouvelles traductions vous pouvez bien-entendu éditer et enrichir cette traduction !

Pour extraire les chaînes il faut utiliser la commande ``phabricator/bin/i18n extract`` suivi d'un nom de dossier. Malheureusement il y a actuellement un bug qui empêche de le faire "intégralement" [T9643](https://secure.phabricator.com/T9643). Mais vous pouvez le faire module par module.

----
*Ça fait plaisir d'écrire en français sur GitHub quand même !*
