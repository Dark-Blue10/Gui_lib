<?php
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'gui_lib');
    if ($con) {
        # code...
       
    }else{
        echo "cant connected";
    }
?>