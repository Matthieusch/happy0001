<?php
function implodeLast($array, $connector = ', ', $lastConnector = ' and '){
  if(!is_array($array) or count($array) == 0) return '';
  $last = array_pop($array);
  if(count($array)) return implode($connector, $array).' '.$lastConnector.' '.$last;
  else return $last;
}
?>
