<?php
$connect_e = mysqli_connect("localhost", "root", "", "bddsimplevent");
if (!$connect_e) {
    printf("Echec de la connexion : %s\n", mysqli_connect_error());
    exit();
	}
$Nb_event=mysqli_query($connect_e,"select * from event")->num_rows;
$Nb_utilisateurs=mysqli_query($connect_e,"select * from utilisateur")->num_rows;


?>