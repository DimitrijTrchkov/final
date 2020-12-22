<?php
    function TempeatureConvertion($tempConv)
    {
        $coversion = ($tempConv - 32) * (5 / 9);
        return $coversion;
    }
    $tempConv = $_POST['tempConv'];
    $coversion = TempeatureConvertion($tempConv);
    echo "The temperature in *C was $tempConv, and the coverted temperature in *F it is $coversion"; 
?>