<?php
function ago($time)
{
   $periods = array("sec", "min", "hr", "dia", "semana", "mes", "year", "decade");
   $lengths = array("60","60","24","7","4.35","12","10");

   $now = time();

	   $difference     = $now - $time;
	   $tense         = "hace";

   for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
	   $difference /= $lengths[$j];
   }

   $difference = round($difference);

   if($difference != 1) {
	   $periods[$j].= "s";
   }

   return "hace $difference $periods[$j]";
}
?>