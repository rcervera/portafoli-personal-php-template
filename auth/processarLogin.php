<?php

    
    function comprova_usuari($username, $password) {
        $claus = array ('enric'=>"z67yeeui", 'carles'=>"sdfe3sdf",'Manel'=>"axeeeldds23",'prova'=>"prova");
        if(isset($claus[$username]) && $claus[$username]==$password) return true;
        return false;  
    }

    // Posar Aquí el codi per recuperar dades del formulari de Login i comprovar usuari i password


?>