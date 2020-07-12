<?php 
require_once'init.php';
class Error_Views extends Checking{

    //Checking Files Directory

    public function checking(){

        $files = $this->files_check();

        try{
        echo'<h3 style="color:orange; text-decoration:underline">Directory Check </h3>';
        echo'<ol>';
           if($files[0] ==true){ echo'<li><p style="color:green">App Folder: ok</p></li>'; } else{ throw new Exception('<li><p style="color:red">App Folder: missing</p></li>'); }
           if($files[1] ==true){ echo'<li><p style="color:green">Protected Folder: ok</p></li>'; } else{ throw new Exception('<li><p style="color:red">Protected Folder: missing</p></li>'); }
           if($files[2] ==true){ echo'<li><p style="color:green">Src Folder: ok</p></li>'; } else{ throw new Exception('<li><p style="color:red">Src Folder: missing</p></li>'); }
        echo '</ol>';
        } catch(Exception $e){
           echo $e->getMessage();
        }


    }



}
?>