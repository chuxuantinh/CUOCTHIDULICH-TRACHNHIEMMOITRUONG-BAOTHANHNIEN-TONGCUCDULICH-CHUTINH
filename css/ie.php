<?php header("Content-type: text/css"); ?>

<?php

$template_path = dirname( dirname( $_SERVER['REQUEST_URI'] ) );
global $color;
function ieversion() {
  ereg('MSIE ([0-9]\.[0-9])',$_SERVER['HTTP_USER_AGENT'],$reg);
  if(!isset($reg[1])) {
    return -1;
  } else {
    return floatval($reg[1]);
  }
}
$iev = ieversion();

?>
<?php /*All IE*/ ?>

<?php
/*IE 6*/
if ($iev == 6) {
?>

.column ul li {	zoom: 1; }

div.moduletable,
div.moduletable_default,
div.moduletable_menu,
div.moduletable_text,
div.moduletable_hilite { zoom: 1; }

ul.ja-megamenu { margin: 0; }

div.discussion-wrap { zoom: 1; }

<?php
}
?>


<?php
/*IE 7*/
if ($iev == 7) {
?>

<?php
}
?>


<?php
/*IE 8*/
if ($iev == 8) {
?>

<?php
}
?>
