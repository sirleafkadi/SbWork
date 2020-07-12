<?php 
require_once'../init.php';
class Error_Views extends Checking{

    //Checking Files Directory

    public function checking(){

        $files = $this->files_check();

        try{

           if($files[0] = true){ echo'<p style="color:green">App Folder: ok</p>'; } else{ throw new Exception('<p style="color:red">App Folder: missing</p>'); }
           if($files[1] = true){ echo'<p style="color:green">Protected Folder: ok</p>'; } else{ throw new Exception('<p style="color:red">Protected Folder: missing</p>'); }
           if($files[2] = true){ echo'<p style="color:green">Src Folder: ok</p>'; } else{ throw new Exception('<p style="color:red">Src Folder: missing</p>'); }

        } catch(Exception $e){
           echo '<p style="red">Error</p>'.$e->getMessage();
        }


    }



}
?>