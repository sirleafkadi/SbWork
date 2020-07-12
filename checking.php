<?php 

class Checking {


protected function files_check(){
////Checking file directories
    $file_array=array();
   
    $app=is_dir("../app");
    $protected=is_dir("../protected");
    $src=is_dir("../src");



    if ($app==true) { $app=true; $file_array[0]=$app;  } else{$file_array[0]=$app;}
    if ($protected==true) { $protected=true; $file_array[1]=$protected;  } else{$file_array[1]=$protected;}
    if ($src==true) { $src=true; $file_array[2]=$src;  } else{$src=false; $file_array[2]=$src;}

    return  $file_array;
}
    

}




?>
