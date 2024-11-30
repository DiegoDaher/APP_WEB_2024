<?php
$title = "Vision";
$content = "
“Formar profesionistas altamente capacitados y comprometidos con el desarrollo sostenible, mediante una educación tecnológica de vanguardia que integra el conocimiento teórico y práctico. La Universidad Tecnológica de Durango busca contribuir al crecimiento económico, social y cultural de la región y del país, fomentando valores de responsabilidad, innovación y ética profesional, para enfrentar los retos de un mundo globalizado y en constante cambio.”";
include 'includes/header.php';
verificarAutenticado();//Verificar si el usuario esta autenticado

?>


<section id="content">
    <div class="box">
        <h1><?php echo $title; ?></h1>
        <hr>
        <p><?php echo $content; ?></p>
   </div>
</section>

<?php include 'includes/footer.php'; ?>

