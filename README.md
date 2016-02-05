# Phabricator : traduction française

Traduction des chaînes les plus courantes de Maniphest (et quelques autres).

## Installation

Comme je suis une quiche je n'ai pas trouvé comment installer proprement le fichier comme une nouvelle langue dans le back office. Du coup j'ai remplacé comme un cochon ``PhabricatorVeryWowEnglishTranslation.php`` !

  1. Remplacer le fichier dans le dossier ``phabricator/src/infrastructure/internationalization/translation/``.
  2. Lancer ``arcanist/bin/arc liberate``.
  3. Dans le profil de l'utilisateur modifiez la langue en choisissant "English (Very Wow)".

## Extraire les chaînes

Si vous souhaitez faire de nouvelles traductions vous pouvez bien-entendu éditer et enrichir cette traduction !

Pour extraire les chaînes il faut utiliser la commande ``phabricator/bin/i18n extract`` suivi d'un nom de dossier. Malheureusement il y a actuellement un bug qui empêche de le faire "intégralement" [T9643](https://secure.phabricator.com/T9643). Mais vous pouvez le faire module par module.
