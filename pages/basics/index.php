<?php 
    $base_path = $_SERVER['DOCUMENT_ROOT'] . '/portafoli-personal-php/';
    include $base_path."templates/header.php"; 
    include $base_path."templates/menu.php"; 
?>

<div class="container">
 <a href="variables.php">Variables</a><br>
 <a href="bucle1.php">Bucle 1</a><br>
 <a href="condicionalHora.php">Condicional Hora</a>
 
</div>

<?php 
    include $base_path."templates/footer.php";    
?>