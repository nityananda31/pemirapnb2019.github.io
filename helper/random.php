<?php

    function random($leng){
        $string = "0123456789abcdefghifklmnopqrstuvwxyz";
        $mix = str_shuffle($string);
        $res = substr($mix,0,$leng);

        return $res;
    }

?>