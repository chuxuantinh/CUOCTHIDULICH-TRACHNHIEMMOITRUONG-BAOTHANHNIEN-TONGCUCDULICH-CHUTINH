<?php /* Smarty version 2.6.18, created on 2007-08-22 17:16:11
         compiled from signin.tpl.html */ ?>

<div> 

<table cellpadding=0 cellspacing=0 border=0 width="100%" style="border-left: 1px solid #E0E7F6; border-right: 1px solid #CFD6E3; border-bottom: 1px solid #CFD6E3;">
<tr  style="background: url(images/mainbar-background.gif) repeat-x;">
<td width=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=32></td>
<td align=left><b><a class= style="color:#FFFFFF" href="Gioithieu.php"><?php echo $this->_tpl_vars['lngstr']['gioithieu']; ?></a></b></td>
<td align=left><b><a class= style="color:#FFFFFF" href="Gioithieu.php"><?php echo $this->_tpl_vars['lngstr']['gioithieu']; ?></a></b></td>
<td align=left><b><a class= style="color:#FFFFFF" href="Gioithieu.php"><?php echo $this->_tpl_vars['lngstr']['gioithieu']; ?></a></b></td>
<td align=left><b><a class= style="color:#FFFFFF" href="Gioithieu.php"><?php echo $this->_tpl_vars['lngstr']['gioithieu']; ?></a></b></td>
<td align=left><b><a class= style="color:#FFFFFF" href="Gioithieu.php"><?php echo $this->_tpl_vars['lngstr']['gioithieu']; ?></a></b></td>
<td align=left><b><a class= style="color:#FFFFFF" href="Gioithieu.php"><?php echo $this->_tpl_vars['lngstr']['gioithieu']; ?></a></b></td>
<td align=left><b><a class= style="color:#FFFFFF" href="Gioithieu.php"><?php echo $this->_tpl_vars['lngstr']['gioithieu']; ?></a></b></td>

<td align=center><b><a class=bar1 href="">
</a></b></td>

<td align=center><b><a class=bar1 href=""></a></b></td>
<td align=center><b><a class=bar1 href=""></a></b></td>

<td align=center><b><a class=bar1 href=""></a></b></td>
<td align=center><b><a class=bar1 href=""></a></b></td>
<td align=center><b><a class=bar1 href=""></a></b></td>

<td align=center><b><a class=bar1 href=""></a></b></td>

<td align=center><b><a class=bar1 href=""></a></b></td>
<td width=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=32></td></tr></table>


</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
.style2 {color: #0033FF}
-->
</style>





<table width="100%" border=0 cellpadding=0 cellspacing=5 bgcolor="#FFFFFF">
<tr vAlign=top><td width="25%" height="100%" class=signin1>
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
 
 
 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_notifications.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo $this->_tpl_vars['lngstr']['page_signin_box_intro']; ?>

<?php if ($this->_tpl_vars['g_vars']['page']['can_register']): ?>
<p><?php echo $this->_tpl_vars['lngstr']['page_signin_box_register_intro']; ?>
</p><?php endif; ?>
<p><?php echo $this->_tpl_vars['lngstr']['page_signin_box_lostpassword_intro']; ?></p>

</form></td>
<td height="300px"  width="1000px"background="images/cuocthi.jpg" class=signin2></td>
</tr></table>
<div align="center" class style="color:#0033FF"><span class="style1">&#272;&#417;n v&#7883; &#273;&#7891;ng &#273;&#259;ng cai t&#7893; ch&#7913;c</span>: <strong><a href="http://dulichvn.org.vn">T&#7893;ng c&#7909;c Du l&#7883;ch</a>, <a href="http://www.thanhnien.com.vn">B&aacute;o Thanh Ni&ecirc;n</a>, <a href="http://www.saigonact.edu.vn/">Tr&#432;&#7901;ng Cao &#273;&#7859;ng V&#259;n h&oacute;a Ngh&#7879; thu&#7853;t v&agrave; Du l&#7883;ch S&agrave;i G&ograve;n</a></strong> 
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
