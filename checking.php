<?php 

class Checking {


protected function files_check(){
////Checking file directories
    $file_array=array();
    $app=false;
    $protected=false;
    $src=false;

    if (file_exists("app")) { $app=true; $file_array[0]=$app;  } else{$file_array[0]=$app;}
    if (file_exists("protected")) { $protected=true; $file_array[1]=$protected;  } else{$file_array[1]=$protected;}
    if (file_exists("src")) { $src=true; $file_array[2]=$src;  } else{$file_array[2]=$src;}

    return  $file_array;
}
    

}




?>
