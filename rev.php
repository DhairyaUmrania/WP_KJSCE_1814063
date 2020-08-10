<?php
    $string="yolo";
    $new="";
    for($i=strlen($string)-1;$i>=0;$i--)
    {
        $char=$string[$i];
        $new.="$char";
        
    }
    echo "The reverse of $string is $new";
?>