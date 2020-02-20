<?php

$time = new Time();
class Time extends Controller
{

    public function getTimestamp($dateTime){
        $date = new DateTime($dateTime, new DateTimeZone('Europe/Berlin'));
        return $date->getTimestamp();
    }

    public function elapsedFromUNIX($time){
        $since = time() - $time;

        $chunks = array(
            array(31536000, "Jahr"),
            array(2592000, "Monat"),
            array(604800, "Woche"),
            array(86400, "Tag"),
            array(3600, "Stunde"),
            array(60, "Minute"),
            array(1, "Sekunde")
        );

        for ($i = 0, $j = count($chunks); $i < $j; $i++)
        {
            $seconds = $chunks[$i][0];
            $name = $chunks[$i][1];
            if (($count = floor($since / $seconds)) != 0)
            {
                break;
            }

        }

        if($name == 'Jahr' && $count == 1){ $print = $count.' '.$name; } elseif($name == 'Jahr' && $count > 1) { $print = $count.' Jahre'; }
        if($name == 'Monat' && $count == 1){ $print = $count.' '.$name; } elseif($name == 'Monat' && $count > 1) { $print = $count.' Monate'; }
        if($name == 'Woche' && $count == 1){ $print = $count.' '.$name; } elseif($name == 'Woche' && $count > 1) { $print = $count.' Wochen'; }
        if($name == 'Tag' && $count == 1){ $print = $count.' '.$name; } elseif($name == 'Tag' && $count > 1) { $print = $count.' Tage'; }
        if($name == 'Stunde' && $count == 1){ $print = $count.' '.$name; } elseif($name == 'Stunde' && $count > 1) { $print = $count.' Stunden'; }
        if($name == 'Minute' && $count == 1){ $print = $count.' '.$name; } elseif($name == 'Minute' && $count > 1) { $print = $count.' Minuten'; }
        if($name == 'Sekunde' && $count == 1){ $print = $count.' '.$name; } elseif($name == 'Sekunde' && $count > 1) { $print = $count.' Sekunden'; }

        //$print = ($count == 1) ? '1 ' . $name : $count . ' ' . $name . 's';

        if ($time >= time())
            return "gerade eben";

        return 'vor '.$print;
    }

}