<?php
     $arr = array('Gildasio','Leticia','Giulene','Neide','Gilsonia','Nei','Gabi','Otavio','Gilson','Guilherme',' Bia');
     
     foreach ($arr as $key => $value) {
         # code...
         /*
         echo $key;
         echo '=>';
         echo $value;
         echo '<hr>';
      
     }
        */

        //retorna o numero de objetos no array 
        $total = count($arr);
         for($i=0; $i < $total; $i++) { 
             # code...
            echo $arr[$i];
            echo '<br>';
         }

?>