<?php
session_start();
session_unset();
session_destroy();
header('Location: ../index.php');//devuelve a la página de inicio
exit();
?>
