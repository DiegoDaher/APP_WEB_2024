
<?php
// session_start();

// Verificar si el usuario está autenticado
function verificarAutenticado() {
    if (!isset($_SESSION['user_id'])) {
        header('Location: index.php');  // Redirigir a la página de login si no está autenticado
        exit();
     }
 }

$isLoggedIn = isset($_SESSION['user_id']);

// Si está logueado, obtener los datos del usuario desde la sesión
if ($isLoggedIn) {
    $user_name = $_SESSION['usuario'];  // Nombre de usuario
    $user_email = $_SESSION['email'];  // Email del usuario
} else {
    $user_name = '';  // No se muestra el nombre si no está logueado
    $user_email = '';  // No se muestra el email si no está logueado
}

?>