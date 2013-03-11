<?php
class Common {
    public function formatTime($timestamp,$type = 'date'){
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

    public function returnTime($timestamp){
        $day      = 60*60*24;
        $interval = time()-$timestamp;
        if($interval<3600){
            $time = Common::formatTime($timestamp,'interval');
            $time = $time.'之前';
        }elseif($interval<$day){
            $time = Common::formatTime($timestamp,'time');
            $time = '今天'.$time;
        }elseif($interval<(2*$day)){
            $time = Common::formatTime($timestamp,'time');
            $time = '昨天'.$time;
        }elseif($interval<(3*$day)){
            $time = Common::formatTime($timestamp,'time');
            $time = '前天'.$time;
        }else{
            $time = Common::formatTime($timestamp);
        }

        return $time;
    }
}