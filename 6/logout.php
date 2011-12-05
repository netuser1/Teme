<?php
session_start();
session_destroy();
session_unset();

echo 'Multam ca folosesti sistemul meu de logare <br>
	  Pentru a te intoarce la pagina principala, apasa <a href="index.php">aici</a>';

?>