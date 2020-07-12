<!DOCTYPE html>
<html lang="en">
<head>
    <?php $cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SbWork</title>

    <!-- linking css, jquery, javascript, Bootstrap !-->
    <?php 
    $bootstrap_css="../src/css/bootsrap.css"; $mystyle="../src/css/mystyle.css"; 
    $jquery="../src/jquery/jquery-3.5.1.min.js";  $bootstrap_js="../src/js/bootstrap.js"; $myscript="../src/js/myscript.js";  
     
   echo' <link rel="stylesheet" type="text/css" href="'.$bootstrap_css.'"> ';
   echo' <link rel="stylesheet" type="text/css" href="'.$mystyle.'"> ';

   echo '<script type="text/javascript" src="'.$jquery.'">';
   echo '<script type="text/javascript" src="'.$bootstrap_js.'">';
   echo '<script type="text/javascript" src="'.$myscript.'">';
    ?>

    <!-- End!-->



</head>