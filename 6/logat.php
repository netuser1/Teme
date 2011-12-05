<?php
require_once('config.php');

if(!isset($_SESSION['logat'])) $_SESSION['logat'] = 'Nu';
if($_SESSION['logat'] != 'Da') 
{
echo 'JMEKERE, pentru a accesa aceasta pagina, trebuie sa te autentifici. <br>
      Pentru a te autentifica, apasa <a href="autentificare.php">aici</a><br>
	  Pentru a va inregistra, apasa <a href="inregistrare.php">aici</a>';
}
else
{
echo 'Bine ai venit, <b><i>'.$_SESSION['user'].'</b></i>!<br><br>
       <a href="logout.php">Iesire</a>';
}

?>