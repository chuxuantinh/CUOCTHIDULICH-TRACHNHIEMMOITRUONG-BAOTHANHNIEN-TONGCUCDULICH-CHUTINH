<?php /* Smarty version 2.6.18, created on 2014-12-23 19:38:16
         compiled from signin1.tpl.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><table cellpadding=0 cellspacing=5 border=0 width="100%" bgcolor="#0066CC">
<tr vAlign=top><td width="35%" height="100%" class=signin1>
<form action="index.php" method=post name=signinform>
<?php echo $this->_tpl_vars['lngstr']['page_signin_box_signin_intro']; ?>
<br>
<br><?php echo $this->_tpl_vars['lngstr']['page_signin_box_signin']; ?>

<br><input name=username class=inp type=text value="<?php echo $this->_tpl_vars['g_vars']['page']['username']; ?>
" size=20>
<br><?php echo $this->_tpl_vars['lngstr']['page_signin_box_password']; ?>

<br><input name=password class=inp type=password value="<?php echo $this->_tpl_vars['g_vars']['page']['user_password']; ?>
" size=20><input name=gotourl type=hidden value="<?php echo $this->_tpl_vars['g_vars']['page']['gotourl']; ?>
">
<br>
<br><input class=btn type=submit name=bsubmit value=" <?php echo $this->_tpl_vars['lngstr']['button_signin']; ?>
 ">

<?php if ($this->_tpl_vars['g_vars']['page']['cansigninasguest']): ?><br><br><input class=btn type=submit name=bguest value=" <?php echo $this->_tpl_vars['lngstr']['button_signin_as_guest']; ?>
 "><?php endif; ?>

</form></td>
<td height="100%" class=signin2>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_notifications.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo $this->_tpl_vars['lngstr']['page_signin_box_intro']; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['can_register']): ?><p><?php echo $this->_tpl_vars['lngstr']['page_signin_box_register_intro']; ?>
</p><?php endif; ?>
<p><?php echo $this->_tpl_vars['lngstr']['page_signin_box_lostpassword_intro']; ?>
</p>
</td></tr></table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>