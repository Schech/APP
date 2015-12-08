<!DOCTYPE html>
<html>

    <head>
    
        <title>Inscription</title>
    
    </head>
    <link type="text/css" rel="stylesheet" href="inscription.css"/>
    <body>
        <?php include ("Accueil.php"); ?>
        <form action="index.php" method="post">

            <table align="center" id="table1">                           <!-- revoir cette ligne pour aligner le block complet-->
            
            <td>
                <img src="https://www.plug-it.com/assets/img/owncloud/owncloud3.png" border="3"/><br>
                <h3>Inscrivez-vous<br> et rejoigniez le mouvement!!</h3><br>
                <img id="picnic" src="http://www.ville-st-privat-des-vieux.com/sites/www.ville-st-privat-des-vieux.com/IMG/jpg/03e8000004233056-photo-pique-nique.jpg" border=3 />
            </td>
            
            
                
            <td><em><h1><u>Inscription</u></h1><br>*Veillez à bien remplir votre formulaire car il vous permettra utiliser de manière optimale Simpl'event</em><br>&nbsp;
                <table  >
                
                <tr>
            
                <td height=25 align="center"><label for="login"><strong>Nom :</strong></label></td>
                <td align="left"><input type="text" name="login" id="name" placeholder="Dutronc"/></td>
            
                </tr>
                <td></td>
                <tr>
            
                <td height=25 align="center"><label for="login"><strong>Prénom :</strong></label></td>
                <td align="left"><input type="text" name="login" id="firstname" placeholder="Jacques"/></td>
            
                </tr>
                <td></td>
                <tr>
            
                <td height=25 align="center"><label for="login"><strong>Adresse e-mail :</strong></label></td>
                <td align="left"><input type="email" name="login" id="mail" placeholder="...................@.............."/></td>
            
                </tr>
                <td></td>
                <tr>
            
                <td height=25 align="center"><label for="login"><strong>Mot de passe :</strong></label></td>
                <td align="left"><input type="password" name="login" id="pass" placeholder="*******"/></td>
            
                </tr>            
                <td></td>
                <tr>
            
                <td height=25 align="right"><label for="pass"><strong>Confirmation du mot de passe :</strong></label></td>
                <td align="left"><input type="password" name="pass" id="passpass" placeholder="*******"/></td>
                    
                </tr>
                <td></td>
                <tr>
            
                <td height=25 align="center"><label for="pass2"><strong>Date de naissance :</strong></label></td>
                <td align="left"><input type="text" name="pass2" id="date" placeholder=" jour"/>&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" name="pass2" id="date" placeholder="mois"/>&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" name="pass21" id="date2" placeholder="année"/></td>
                </tr>
                <td></td>
                <tr>
            
                <td height=25 align="center"><label for="login"><strong>Centres d'intérêt :</strong></label></td>
                                        <td align="left"><table ><tr><td><!--<input type="text" name="login" id="login"/>-->
                                        <FORM class="miseenforme">
                                                            <INPUT type="checkbox" name="sport" value="1">sport &nbsp; &nbsp; &nbsp;
							    <INPUT type="checkbox" name="repas" value="2">repas &nbsp; &nbsp; &nbsp;
							    <INPUT type="checkbox" name="cinéma" value="3">cinéma &nbsp; &nbsp; &nbsp;
                                                            <INPUT type="checkbox" name="danse" value="6">danse
                                        </FORM>
                                        <br>
					<br><FORM class="miseenforme">	 
							<INPUT type="checkbox" name="sortie" value="4">sortie &nbsp; &nbsp; &nbsp;
							<INPUT type="checkbox" name="exposition" value="5">expo &nbsp; &nbsp; &nbsp;
							<INPUT type="checkbox" name="festival" value="6">festival &nbsp; &nbsp; &nbsp;
					    	<INPUT type="checkbox" name="dégustation" value="7">dégustation
                                        </FORM><!--fin du test--></td></tr></table></td>
            
                </tr>
                <td></td>
                <tr>
            
                    <td height=25 align="center"><label for="login"><strong>Description :</strong><br><br><em>**Ecrivez une petite des-<br> cription qui vous défini<br>et pourra être vue par<br>les autres utilisateurs sur <br> votre profil.</em></label></td>
                <td align="left"><textarea name="login" id="description" placeholder="entrez une petite description de vous..."></textarea></td>
                </tr>
                
            </table></td>
                
            <td>
                <img id="profil" src="profil4.png" border="4"/><br>
                &nbsp;<br>
                &nbsp;<br>
                &nbsp;<br>
                &nbsp;<br>
                <a href='#'style="color:black"><div id="ajouterphoto"> Ajouter une photo</div></a>
                &nbsp;<br>
                &nbsp;<br>
                &nbsp;<br>
                &nbsp;<br>
                &nbsp;<br>
                <a href="#" id="bouton" style="color:black"><div id="go"><strong><u><em>S'inscrire</em></u></strong></div></a>
            </td>
                
                
                
                
                

            </table></td>
            </table>
        
        <input type="submit" name="register" value="S'inscrire"/>
        
        </form>
    <?php include (footer.php); ?>
    </body>

</html>




