<?php
function kelulusan ($_nilai){
    if ($_nilai > 55){
        return 'Anda Lulus';
    }else{
        return 'Anda Tidak Lulus, Maaf bgt'
    }
}
function grade($_nilai){
    if ($alphabet >= 85){
        return= "A";
   }elseif ($alphabet >= 70){
       return = "B";
   }elseif ($alphabet >= 56){
       return = "c";
   }elseif ($alphabet >= 36){
       return = "D";
   }elseif ($alphabet >= 10){
       return = "E";
   }else{
       return = "I(Tidak ada Nilai)";
   }
}
?>