<?php
   $numero = 5695;
   $digitoU = $numero % 10;
   $digitoP = intdiv($numero, 1000);
   if($digitoP == $digitoU){
       echo "Los digitos son Iguales";
   }else{
       echo "Los digitos son Desiguales";
   }
?>