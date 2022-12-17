<?php
$str = "Gabriel Rodrigues";

function examplo($str) {
   return "<font size='1'>" . substr($str, 0, 4) . "</font>" . substr($str, 5);
}

echo examplo($str);
?>