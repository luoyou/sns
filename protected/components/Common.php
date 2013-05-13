<?php
function formatTime($timestamp,$type = 'date'){
    switch ($type){
        case 'date':
            $time = date('Y-m-d',$timestamp);
            break;
        case 'time':
            $time = date('H:i',$timestamp);
            break;
        case 'interval':
            $time = date('i:s',time()-$timestamp);
            break;
    }
    return $time;
}

function returnTime($timestamp){
    $day      = 60*60*24;
    $interval = time()-$timestamp;
    if($interval<3600){
        $time = formatTime($timestamp,'interval');
        $time = $time.'之前';
    }elseif($interval<$day){
        $time = formatTime($timestamp,'time');
        $time = '今天'.$time;
    }elseif($interval<(2*$day)){
        $time = formatTime($timestamp,'time');
        $time = '昨天'.$time;
    }elseif($interval<(3*$day)){
        $time = formatTime($timestamp,'time');
        $time = '前天'.$time;
    }else{
        $time = formatTime($timestamp);
    }

    return $time;
}
