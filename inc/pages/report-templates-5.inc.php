<?php
if(isset($_POST["box_rtemplates"])) {
	foreach($_POST["box_rtemplates"] as $f_rtemplateid) {
 deleteRTemplate((int)$f_rtemplateid);
}
} else {
	$f_rtemplateid = (int)readGetVar('rtemplateid');
deleteRTemplate($f_rtemplateid);
}
 
gotoLocation('report-templates.php'.getURLAddon('', array('action','confirmed','rtemplateid')));
function deleteRTemplate($i_rtemplateid) {
global $g_db, $srv_settings; 
	if($i_rtemplateid > SYSTEM_RTEMPLATES_MAX_INDEX) { 
 if($g_db->Execute("UPDATE ".$srv_settings['table_prefix']."tests SET rtemplateid=0 WHERE rtemplateid=$i_rtemplateid")===false)
 showDBError(__FILE__, 1);
if($g_db->Execute("DELETE FROM ".$srv_settings['table_prefix']."rtemplates WHERE rtemplateid=$i_rtemplateid")===false)
 showDBError(__FILE__, 2);
}
}
?>
