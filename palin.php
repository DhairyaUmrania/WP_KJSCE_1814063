<?php
    $string="livevil";
    $rev="";
    for($i=strlen($string)-1;$i>=0;$i--)
    {
        $char=$string[$i];
        $rev.="$char";
        
    }
    if($rev==$string){
        echo"$string is a palindrome";
    }
    else{
        echo "$string is not a palindrome";
    }
?>