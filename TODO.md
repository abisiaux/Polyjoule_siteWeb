# Informations

## Attention à la mise en page du contenu

* Pour la création des autres pages, il faudrait garder le même design que les pages gestion des articles et gestions des comptes.
* Il y a une fonction spéciale pour créer la barre de titre de chaque page en lui passant par paramètre l'icone de la page et son titre.

## Améliorations possibles

* Page article : afficher le nombre de commentaire associés à l'article --> FAIT
* Page rubrique : Prévoir un message de confirmation pour la suppression --> FAIT
* Page école : Prévoir un message de confirmation pour la suppression --> FAIT
	
## Informations sur base

* Pseudo stocké dans la base sensible à la casse pour pouvoir les afficher dans le profil ( vu avec Simon ) --> FAIT
	
## En cas d'erreur de la fonction php mail()

Il faut configurer php.ini en modifiant les lignes :

	[mail function]
	SMTP = /*ici adresse serveur smtp ex : smtp.bbox.fr Voir : http://www.commentcamarche.net/faq/893-adresses-des-serveurs-pop-et-smtp-des-principaux-fai pour la liste */
	; http://php.net/smtp-port
	smtp_port = 25

	; http://php.net/sendmail-from
	sendmail_from = /* ici votre adresse mail */


# Fichiers

## Images

* ajouter une image ajout rubrique avec le nom "add_rubrique.png" --> FAIT
* ajouter une iamge mise à jour rubrique avec le nom "modify_rubrique.png" --> FAIT
* ajouter gestion_rubrique.png --> FAIT
* ajouter add/modify/gestion_ecole.png --> FAIT
* ajouter add/modify/gestion_formation.png --> FAIT
* ajouter modify/gestion_profil.png --> FAIT
* ajouter add/modify/gestion_participant.png
* ajouter add/modify/gestion_equipe.png
* ajouter add/modify/gestion_participation.png
* ajouter add/modify/gestion_course.png

## Terminés

* Général
* Rubrique
* Ecole
* Formation
* Participant
* Equipe
* Profil
* Article
* Commentaire
* Connexion
* Membre

## En cours ...

* Statistiques

	* Début des pages de stats avec intégration de graphiques (Bibizz)

* Course

	* Faire une vérification sur la date lors de l'ajout (Siwon)
	* Modifier la fonction de suppression d'une équipe pour que lorsqu'une équipe est supprimée, les courses associées aussi.
	* Ajouter le numéro de la course dans le nom de la photo, afin d'avoir au moins un identifiant unique
