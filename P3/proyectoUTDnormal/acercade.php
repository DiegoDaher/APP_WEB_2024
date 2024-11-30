<?php
$title = "Acerca De";
$content = "Somos un equipo destinado al desarrollo de Software, con el fin de brindar soluciones a la comunidad. 
            Nuestro equipo está conformado por estudiantes de la Universidad Tecnológica de Durango, 
            con el objetivo de poner en práctica los conocimientos adquiridos en la carrera de Ingeniería en Desarrollo de Software.";
include 'includes/header.php';
verificarAutenticado();//Verificar si el usuario está loggeado
?>


<section id="content">
    <div class="box">
        <h1><?php echo $title; ?></h1>
        <hr>
        <p><?php echo $content; ?></p>
   </div>
</section>

<?php include 'includes/footer.php'; ?>

