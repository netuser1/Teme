<?php	
require_once('config.php');

if(!isset($_GET['actiune'])) $_GET['actiune'] = '';

switch($_GET['actiune'])
{
case '':
echo '<form action="autentificare.php?actiune=validare" method="post">
      Utilizator: <input type="text" name="user" value=""><br>
      Parola: <input type="password" name="parola" value=""><br>
	  <input type="submit" name="Login" value="Login">
	  </form>';
break;

case 'validare':

$_SESSION['user'] = $_POST['user'];

if(($_POST['user'] == '') || ($_POST['parola'] == ''))
{
echo 'Completeaza toate casutele. <Br> 
      Apasati <a href="autentificare.php">aici</a> pentru a va intoarce la pagina precedenta.';
}
else
{
$cerereSQL = "SELECT * FROM `utilizatori` WHERE utilizator='".htmlentities($_POST['user'])."' AND parola='".md5($_POST['parola'])."'";
$rezultat = mysql_query($cerereSQL);
if(mysql_num_rows($rezultat) == 1)
{
  while($rand = mysql_fetch_array($rezultat))
  {
    $_SESSION['logat'] = 'Da';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=logat.php">';
  }
}
else
{
echo 'Date introduse sunt incorecte. <Br> 
      Apasati <a href="autentificare.php">aici</a> pentru a va intoarce la pagina precedenta.';
}

}
break;
}
?>