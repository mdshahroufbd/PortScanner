<?php

function scan($host = "google.com", $port = array(80)){
    $r = array("open" => array(), "close" => array());

    foreach ($port as $p){
        $con = @fsockopen($host, $p);
        if(is_resource($con)){
            array_push($r["open"], $p);
            fclose($con);
        } else {
            array_push($r["close"], $p);
        }
    }
}

function convertRange($start = 80, $end = 80) {
    $r = array();

    for($i = $start; $i <= $end; $i++){
        array_push($r, $i);
    }
}
?>