<?php
       echo '<br>';
       echo 'FIZZ BUZZ? v4';
       echo '<br>';
       for ($i=1; $i < 151 ; $i++) { 
           //echo 'Contador for (i)'.$i;
           
           if ($i%3 == 0 && $i%5 == 0) {
            echo ' FIZZBUZZ MUTAFUKA! ';
           }elseif ($i%3 == 0) {
            echo 'FIZZ ';

           }elseif ($i%5 == 0) {
            echo ' BUZZ ';
           }else{
               echo $i;
           }
           echo '<br>';
           
        }

?>