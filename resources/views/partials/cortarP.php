<?php
 function cortarPalabras($texto, $largo = 5, $puntos = "...") { 
   $palabras = explode(' ', $texto); 
   if (count($palabras) === $largo){ 
     return implode(' ', array_slice($palabras, 0, $largo)); 
   } 
   elseif (count($palabras) > $largo){
     return implode(' ', array_slice($palabras, 0, $largo)) ." ". $puntos;
    }
   else{
    return $texto; 
           }      
} 



?>
