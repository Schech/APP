<?php
session_start();
header("Refresh:0 ,url=../ACCUEIL/Simplevent.php");
session_destroy();
exit()
?>