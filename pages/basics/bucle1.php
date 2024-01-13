<?php 
    $base_path = $_SERVER['DOCUMENT_ROOT'] . '/portafoli-personal-php/';
    include $base_path."templates/header.php"; 
    include $base_path."templates/menu.php"; 
?>

<div class="container">
<h3>Fem un bucle per crear una llista</h3>
<ul>
    <?php 

        for($i=0;$i<10;$i++) {
            echo "<li>$i</li>";
        }

    ?>
</ul>
 
</div>

<?php 
    include $base_path."templates/footer.php";    
?>