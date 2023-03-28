<?php
   $numeroA = 9;
   $numeroB = 5;
   $producto = $numeroA * $numeroB;
   if($producto > 0){
       echo "$producto : Es positivo";
   }elseif($producto == 0){
       echo "$producto : Es igual a Cero";
   }else{
       echo "$producto : Es Negativo";
   }
?>