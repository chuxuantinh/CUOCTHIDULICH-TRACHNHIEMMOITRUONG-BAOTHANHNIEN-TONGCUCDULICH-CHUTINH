<?php
$g_vars['page']['location'] = array('test_manager', 'test_manager');
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('_header');
$g_vars['page']['selected_section'] = 'testmanager';
$g_vars['page']['selected_tab'] = 'testmanager';
$g_vars['page']['menu_2_items'] = getMenu2Items($g_vars['page']['selected_section']);
writePanel2($g_vars['page']['menu_2_items']);
echo '<h2>'.$lngstr['page_header_edittests'].'</h2>';
writeErrorsWarningsBar();
writeInfoBar($lngstr['tooltip_tests']);
$i_pagewide_id = 0;  
$i_subjectid_addon = '';
$i_sql_where_addon = '';
if(isset($_GET['subjectid']) && $_GET['subjectid'] != '') {
	$i_subjectid_addon .= '&subjectid='.(int)$_GET['subjectid'];
$i_sql_where_addon .= $srv_settings['table_prefix'].'tests.subjectid='.(int)$_GET['subjectid'].' AND ';
} 
$i_testid_addon = '';
if(isset($_GET['testid']) && $_GET['testid'] != '') {
	$i_testid_addon .= '&testid='.(int)$_GET['testid'];
$i_sql_where_addon .= $srv_settings['table_prefix'].'tests.testid='.(int)$_GET['testid'].' AND ';
} 
$i_direction = '';
$i_order_addon = '';
$i_sql_order_addon = '';
$i_tablefields = array(
	array($lngstr['label_edittests_hdr_testid'], $lngstr['label_edittests_hdr_testid_hint'], $srv_settings['table_prefix']."tests.testid"),
	array($lngstr['label_edittests_hdr_test_notes'], $lngstr['label_edittests_hdr_test_notes_hint'], ""),
	array($lngstr['label_edittests_hdr_test_name'], $lngstr['label_edittests_hdr_test_name_hint'], $srv_settings['table_prefix']."tests.test_name"),
	array($lngstr['label_edittests_hdr_subjectid'], $lngstr['label_edittests_hdr_subjectid_hint'], $srv_settings['table_prefix']."tests.subjectid"),
	array($lngstr['label_edittests_hdr_test_datestart'], $lngstr['label_edittests_hdr_test_datestart_hint'], $srv_settings['table_prefix']."tests.test_datestart"),
	array($lngstr['label_edittests_hdr_test_dateend'], $lngstr['label_edittests_hdr_test_dateend_hint'], $srv_settings['table_prefix']."tests.test_dateend"),
	array($lngstr['label_edittests_hdr_test_enabled'], $lngstr['label_edittests_hdr_test_enabled_hint'], $srv_settings['table_prefix']."tests.test_enabled"),
);
$i_order_no = isset($_GET["order"]) ? (int)$_GET["order"] : 0;
if($i_order_no>=count($i_tablefields))
 $i_order_no = -1;
if($i_order_no>=0) {
	$i_direction = (isset($_GET["direction"]) && $_GET["direction"]) ? "DESC" : "";
$i_order_addon = "&order=".$i_order_no."&direction=".$i_direction;
$i_sql_order_addon = " ORDER BY ".$i_tablefields[$i_order_no][2]." ".$i_direction;
} 
$i_url_limitto_addon = "";
$i_url_pageno_addon = "";
$i_url_limit_addon = "";
$i_pageno = 0;
$i_limitcount = isset($_GET["limitto"]) ? (int)$_GET["limitto"] : $G_SESSION['config_itemsperpage'];
if($i_limitcount>0) {
	$i_recordcount = getRecordCount($srv_settings['table_prefix'].'tests', $i_sql_where_addon."1=1");
$i_pageno = isset($_GET["pageno"]) ? (int)$_GET["pageno"] : 1;
if($i_pageno < 1)
 $i_pageno = 1;
$i_limitfrom = ($i_pageno - 1) * $i_limitcount;
$i_pageno_count = floor(($i_recordcount - 1) / $i_limitcount) + 1;
if($i_limitfrom > $i_recordcount) {
 $i_pageno = $i_pageno_count;
$i_limitfrom = ($i_pageno - 1) * $i_limitcount;
}
$i_url_limitto_addon .= "&limitto=".$i_limitcount;
$i_url_pageno_addon .= "&pageno=".$i_pageno;
$i_url_limit_addon .= $i_url_limitto_addon.$i_url_pageno_addon;
} else {
	$i_url_limitto_addon = "&limitto=";
$i_url_limit_addon .= $i_url_limitto_addon;
$i_limitfrom = -1;
$i_limitcount = -1;
} 
$nPageWindow = IGT_CONFIG_NAVIGATION_WINDOW;
if (!IGT_CONFIG_NAVIGATION_SHOW_ALWAYS) {
	if ($i_recordcount == 0 || ($i_pageno_count == 1 && $this->NavShowAll == false))
 return;
} 
if($i_pageno > floor($nPageWindow/2) + 1 && $i_pageno_count > $nPageWindow)
	$nStartPage = $i_pageno - floor($nPageWindow/2);
else
	$nStartPage = 1; 
if($i_pageno <= $i_pageno_count - floor($nPageWindow/2) && $nStartPage + $nPageWindow-1 <= $i_pageno_count)
	$nEndPage = $nStartPage + $nPageWindow - 1;
else
{
	$nEndPage = $i_pageno_count;
if($nEndPage - $nPageWindow + 1 >= 1)
 $nStartPage = $nEndPage - $nPageWindow + 1;
}
$nRecordFrom = ($i_pageno - 1) * $i_limitcount + 1;
if($i_pageno != $i_pageno_count)
 $nRecordTo = $i_pageno * $i_limitcount;
else $nRecordTo = $i_recordcount;
 
echo '<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="">';
echo '<tr valign=top><td class=rowhdr2 colspan=2><a class=rowhdr2 href="javascript:void(0)" onclick="javascript:toggleSection(\'div_filter_testmanager\')">'.$lngstr['label_filter_header'].'</td></tr>';
echo '<tr valign=top><td class=rowone colspan=2><div id=div_filter_testmanager style="display:'.(isset($_COOKIE['div_filter_testmanager']) && $_COOKIE['div_filter_testmanager']=='Y' ? 'block' : 'none').'"><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">'; 
  
 
$i_subjects = array('' => $lngstr['label_none']);
$i_rSet2 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."subjects");
if(!$i_rSet2) {
	showDBError(__FILE__, 2);
} else {
	while(!$i_rSet2->EOF) {
 $i_subjects[$i_rSet2->fields['subjectid']] = $i_rSet2->fields['subject_name'];
$i_rSet2->MoveNext();
}
$i_rSet2->Close();
}
$f_subjectid = isset($_GET['subjectid']) ? (int)readGetVar('subjectid') : '';
writeTR2($lngstr['page_edittests_subjectid'], getSelectElement('subjectid', $f_subjectid, $i_subjects, ' onchange="document.location.href=\'test-manager.php?subjectid=\'+this.value+\''.$i_testid_addon.$i_order_addon.$i_url_limitto_addon.'\';"')); 
 
$i_tests = array('' => $lngstr['label_none']);
$i_rSet2 = $g_db->Execute("SELECT * FROM ".$srv_settings['table_prefix']."tests");
if(!$i_rSet2) {
	showDBError(__FILE__, 2);
} else {
	while(!$i_rSet2->EOF) {
 $i_tests[$i_rSet2->fields['testid']] = $i_rSet2->fields['test_name'];
$i_rSet2->MoveNext();
}
$i_rSet2->Close();
}
$f_testid = isset($_GET['testid']) ? (int)readGetVar('testid') : '';
writeTR2($lngstr['page_edittests_testname'], getSelectElement('testid', $f_testid, $i_tests, ' onchange="document.location.href=\'test-manager.php?testid=\'+this.value+\''.$i_subjectid_addon.$i_order_addon.$i_url_limitto_addon.'\';"'));
echo '</table>'; 
echo '</div></td></tr>';
echo '</table></p>';
 
echo '<p><form name=testsForm class=iactive method=post><table cellpadding=0 cellspacing=0 border=0 width="100%"><tr><td>';
echo '<table cellpadding=0 cellspacing=0 border=0 width="100%" style="background: url(images/toolbar-background.gif) repeat-x"><tr vAlign=center><td width=2><img src="images/toolbar-left.gif" width=2 height=32></td><td width=32><a href="test-manager.php?action=create"><img src="images/button-new-big.gif" width=32 height=32 border=0 title="'.$lngstr['label_action_create_test'].'"></a></td><td width=3><img src="images/toolbar-separator.gif" width=3 height=32 border=0></td><td width=32><img src="images/button-groups-big.gif" border=0 title="'.$lngstr['label_action_groups'].'" style="cursor: hand;" onclick="f=document.testsForm;f.action=\'test-manager.php?action=groups\';f.submit();"></td><td width=3><img src="images/toolbar-separator.gif" width=3 height=32 border=0></td><td width=32><img src="images/button-cross-big.gif" border=0 title="'.$lngstr['label_action_tests_delete'].'" style="cursor: hand;" onclick="f=document.testsForm;if (confirm(\''.$lngstr['qst_delete_tests'].'\')) { f.action=\'test-manager.php?action=delete&confirmed=1\';f.submit();}"></td>';
echo '<td width=3><img src="images/1x1.gif" width=3 height=1></td>';
echo '<td width="100%">&nbsp;</td>';
if($i_limitcount > 0) {
	$i_url_pages_addon = $i_url_limitto_addon.$i_order_addon.$i_testid_addon.$i_subjectid_addon;
echo '<td vAlign=middle width=32><nobr>&nbsp;'.sprintf($lngstr['label']['KtoLofN'], $nRecordFrom, $nRecordTo, $i_recordcount).'&nbsp;</nobr></td>';
echo '<td width=3><img src="images/toolbar-separator.gif" width=3 height=32 border=0></td>';
echo '<td vAlign=middle width=32><nobr>&nbsp;';
for($i = $nStartPage; $i <= $nEndPage; $i++) {
 if($i != $i_pageno)
 echo '&nbsp;<a href="test-manager.php?pageno='.$i.$i_url_pages_addon.'">'.$i.'</a>&nbsp;';
else echo '<span class=currentitem>&nbsp;'.$i.'&nbsp;</span> ';
}
echo '</nobr></td>';
echo '<td width=3><img src="images/toolbar-separator.gif" width=3 height=32 border=0></td>';
if($i_pageno > 1) {
 echo '<td width=32><a href="test-manager.php?pageno=1'.$i_url_pages_addon.'"><img src="images/button-first-big.gif" border=0 title="'.$lngstr['button_first_page'].'"></a></td>';
echo '<td width=32><a href="test-manager.php?pageno='.max(($i_pageno-1), 1).$i_url_pages_addon.'"><img src="images/button-prev-big.gif" border=0 title="'.$lngstr['button_prev_page'].'"></a></td>';
} else {
 echo '<td width=32><img src="images/button-first-big-inactive.gif" border=0 title="'.$lngstr['button_first_page'].'"></td>';
echo '<td width=32><img src="images/button-prev-big-inactive.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td>';
}
if($i_pageno < $i_pageno_count) {
 echo '<td width=32><a href="test-manager.php?pageno='.min(($i_pageno+1), $i_pageno_count).$i_url_pages_addon.'"><img src="images/button-next-big.gif" border=0 title="'.$lngstr['button_next_page'].'"></a></td>';
echo '<td width=32><a href="test-manager.php?pageno='.$i_pageno_count.$i_url_pages_addon.'"><img src="images/button-last-big.gif" border=0 title="'.$lngstr['button_last_page'].'"></a></td>';
} else {
 echo '<td width=32><img src="images/button-next-big-inactive.gif" border=0 title="'.$lngstr['button_next_page'].'"></td>';
echo '<td width=32><img src="images/button-last-big-inactive.gif" border=0 title="'.$lngstr['button_last_page'].'"></td>';
}
}
echo '<td width=2><img src="images/toolbar-right.gif" width=2 height=32></td></tr></table>';
echo '</td></tr><tr><td>';
echo '<table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">';
echo '<tr vAlign=top><td class=rowhdr1 title="'.$lngstr['label_hdr_select_hint'].'" width=22><input type=checkbox name=toggleAll onclick="toggleCBs(this);"></td>';
writeQryTableHeaders('test-manager.php?action='.$i_testid_addon.$i_subjectid_addon.$i_url_limit_addon, $i_tablefields, $i_order_no, $i_direction);
echo '<td class=rowhdr1 colspan=5>'.$lngstr['label_hdr_action'].'</td></tr>';
$i_rSet1 = $g_db->SelectLimit("SELECT ".$srv_settings['table_prefix']."tests.testid, ".$srv_settings['table_prefix']."tests.test_name, ".$srv_settings['table_prefix']."tests.subjectid, ".$srv_settings['table_prefix']."tests.test_datestart, ".$srv_settings['table_prefix']."tests.test_dateend, ".$srv_settings['table_prefix']."tests.test_notes, ".$srv_settings['table_prefix']."tests.test_enabled, ".$srv_settings['table_prefix']."subjects.subject_name FROM ".$srv_settings['table_prefix']."tests, ".$srv_settings['table_prefix']."subjects WHERE ".$i_sql_where_addon."".$srv_settings['table_prefix']."tests.subjectid=".$srv_settings['table_prefix']."subjects.subjectid".$i_sql_order_addon, $i_limitcount, $i_limitfrom);
if(!$i_rSet1) {
	showDBError(__FILE__, 1);
} else {
	$i_counter = 0;
while(!$i_rSet1->EOF) {
 $rowname = ($i_counter % 2) ? "rowone" : "rowtwo";
echo '<tr id=tr_'.$i_pagewide_id.' class='.$rowname.' onmouseover="rollTR('.$i_pagewide_id.',1);" onmouseout="rollTR('.$i_pagewide_id.',0);"><td align=center width=22><input id=cb_'.$i_pagewide_id.' type=checkbox name=box_tests[] value="'.$i_rSet1->fields["testid"].'" onclick="toggleCB(this);"></td><td align=right>'.$i_rSet1->fields["testid"].'</td><td align=center width=16 style="padding: 1px;"><a href="javascript:void(0)" onClick="showDialog(\'test-manager.php?testid='.$i_rSet1->fields["testid"].'&action=notes\', 300, 200)"><img src="images/button-notes.gif" width=16 height=20 title="'.convertTextValue($i_rSet1->fields["test_notes"]).'" border=0></a></td><td>'.convertTextValue($i_rSet1->fields["test_name"]).'</td><td><a href="test-manager.php?subjectid='.(isset($_GET["subjectid"]) && $_GET["subjectid"] != "" ? "" : $i_rSet1->fields["subjectid"]).$i_order_addon.$i_url_limitto_addon.'">'.convertTextValue($i_rSet1->fields["subject_name"]).'</a></td><td>'.getDateLocal($lngstr['language']['date_format'],$i_rSet1->fields["test_datestart"]).'</td><td>'.getDateLocal($lngstr['language']['date_format'],$i_rSet1->fields["test_dateend"]).'</td><td align=center><a href="test-manager.php?testid='.$i_rSet1->fields["testid"].$i_order_addon.$i_url_limit_addon.'&action=enable&set='.($i_rSet1->fields["test_enabled"] ? '0"><img src="images/button-checkbox-2.gif" width=13 height=13 border=0 title="'.$lngstr['label_yes'].'">' : '1"><img src="images/button-checkbox-0.gif" width=13 height=13 border=0 title="'.$lngstr['label_no'].'">').'</a></td>';
echo '<td align=center width=22><a href="test-manager.php?testid='.$i_rSet1->fields["testid"].'&action=settings"><img width=20 height=20 border=0 src="images/button-gear.gif" title="'.$lngstr['label_action_test_settings'].'"></a></td>';
if(IGT_TESTMANAGER_SHOWSTATS)
 echo '<td align=center width=22><a href="test-manager.php?testids='.$i_rSet1->fields["testid"].'&action=statst"><img width=20 height=20 border=0 src="images/button-stats.gif" title="'.$lngstr['page_testmanager']['view_test_stats'].'"></a></td>';
echo '<td align=center width=22><a href="test-manager.php?testids='.$i_rSet1->fields["testid"].'&action=groups"><img width=20 height=20 border=0 src="images/button-groups.gif" title="'.$lngstr['label_action_test_groups_select'].'"></a></td>';
echo '<td align=center width=22><a href="test-manager.php?testid='.$i_rSet1->fields["testid"].'&action=editt"><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_questions_edit'].'"></a></td>';
echo '<td align=center width=22><a href="test-manager.php?testid='.$i_rSet1->fields["testid"].'&action=delete" onclick="return confirmMessage(this, \''.$lngstr['qst_delete_test'].'\')"><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_test_delete'].'"></a></td>';
echo '</tr>';
$i_counter++;
$i_pagewide_id++;
$i_rSet1->MoveNext();
}
$i_rSet1->Close();
}
echo '</table>';
echo '</td></tr></table></form>';
displayTemplate('_footer');
?>
