<!--/**********Page de gestion des articles**********/-->	<?php 	$actions = array(1,2,3); // Tableau des actions possibles		if(isset($_GET['action']) && in_array($_GET['action'],$actions))	{		$action = $_GET['action'];		if($action==1) //Ajout rubrique		{ ?>			<div class="contenu" align="center" style="height:50px;">				<div style="float : left;font-size : 120%;font-weight:bold;">					<div style="float:left;">					<img src="ressources/design/style1/images/add_rubrique.png"/>					</div>					<div style="float:right; margin-top:10px;margin-left:10px;">						Ajout d'une rubrique					</div>				</div>				<div style="height:50px;width:300px;float:right;">					<a href="" class="save"><img src="ressources/design/style1/images/save.png"/>Sauver</a>					<a href="" class="validate"><img src="ressources/design/style1/images/validate.png"/>Appliquer</a>					<a href="index.php?page=rubrique&message=procedureAnnulee" class="cancel"><img src="ressources/design/style1/images/cancel.png"/>Annuler</a>				</div>			</div>			<div class="contenu" align ="center">				<div style="background-color : #f0f0ee;margin : 10px 12px 20px 13px;border : 1px solid #cccccc;text-align:left; padding-left : 20px;">					<form>						<p>							<label for="titleFR" style="float : left;"><strong>Titre</strong> (FR) :</label>							<input type="text" style="margin-left:10px;" size="60" value="" name="titleFR"/> <br/><br/>							<label for="titleEN" style="float : left;"><strong>Titre</strong> (EN) :</label>							<input type="text" style="margin-left:10px;" size="60" value="" name="titleEN"/> <br/><br/>							<strong>Rubrique mère</strong> : 							<?php								listeRubrique();							?>						</p>					</form>				</div>								</div>		<?php		} else if ($action==2) { //modifier une rubrique			if(isset($_GET['idRubrique'])) {				$rubr=$_GET['idRubrique'];				$req3 = mysql_query("SELECT * FROM `rubrique` WHERE `id_rubrique`=$rubr;");				$rubrique2=mysql_fetch_array($req3);				if (rubriqueExistante($rubr)) {					include("temp.php");				} else {					header("Location: $pageRubrique&message=rubriqueAbsente");				}			} else {				header("Location: $pageRubrique");			}		} else if ($action==3) { //supprimer une rubrique			if(isset($_GET['idRubrique'])) {				$rubr=$_GET['idRubrique'];				if (rubriqueExistante($rubr)) {					$req3 = mysql_query("DELETE FROM `rubrique` WHERE `id_rubrique`=$rubr;");					header("Location: $pageRubrique&message=rubriqueSupprimee");				} else {					header("Location: $pageRubrique&message=rubriqueAbsente");				}			}		}	}	else 	{		if (isset($_GET['message'])) {		?>		<div class="contenu" align="center"><!-- Affichage d'un message -->			<?php				// ajouter : 				$msg=$_GET['message'];				if ($msg=="rubriqueAbsente") {					echo "La rubrique est inexistante";				} else if ($msg=="procedureAnnulee") {					echo "La procédure a été annulée";				} else if ($msg=="rubriqueSupprimee") {					echo "Votre rubrique a bien été supprimée";				} else if ($msg=="rubriqueAjoutee") {					echo "Votre rubrique a bien été ajoutée";				}/* else if ($msg=="") {					echo "";				}*/ else {					echo "Erreur";				}			?>		</div>		<?php		}		?>		<div class="contenu" align="center">			<h2>Gestion des	rubriques</h2>			<a href="index.php?page=rubrique&action=1"> Ajouter un rubrique </a>			<table id='articles'>			<tr class='article'><th class='article'>Num Rubrique</th><th class='article'>Titre de la rubrique (FR)</th><th class='article'>Titre de la rubrique (EN)</th><th class='article'>Administration</th></tr>			<?php			$req = mysql_query('SELECT * FROM RUBRIQUE;');			while($rubrique = mysql_fetch_array($req))			{				echo "<tr class='article'>";				echo "<td class='article'>".$rubrique[0]."</td>";				echo "<td class='article'>".$rubrique[2]."</td>";				echo "<td class='article'>".$rubrique[3]."</td>";				echo "<td class='article'>";				echo "<a href='index.php?page=rubrique&action=2&idRubrique=".$rubrique[0]."'>Modifier</a> - ";				echo "<a href='index.php?page=rubrique&action=3&idRubrique=".$rubrique[0]."'>Supprimer</a>";				echo "</td>";				echo "</tr>";			}			?>			</table>			<a href="index.php?page=rubrique&action=1"> Ajouter un rubrique </a>		</div>		<?php	}	// ?></div>