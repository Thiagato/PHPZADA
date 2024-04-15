<?php

    function formulario(...$campos){

        

        echo '<form action="" method="get">';

        foreach($campos as $camp){
        echo '<label for="">'. $camp . '</label>';
        echo '<input type="text" name=""'. $camp . 'id="">';  
        }

    
        echo '<input type="submit" value="">';
        echo '</form>';
        
    }



?>