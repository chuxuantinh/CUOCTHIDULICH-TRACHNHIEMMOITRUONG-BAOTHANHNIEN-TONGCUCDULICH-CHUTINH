<?php /* Smarty version 2.6.18, created on 2014-12-23 19:51:01
         compiled from signin2.tpl.html */ ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<style type="text/css">
<!--
.style1 {color: #0066CC}
-->
</style>



<div> 

<table  cellpadding=0 cellspacing=0 border=0 width="700px" style="border-left: 1px solid #E0E7F6; border-right: 1px solid #CFD6E3; border-bottom: 1px solid #CFD6E3;">
<tr  style="background: url(images/mainbar-background.gif) repeat-x;">
<td width=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=32></td>
<td width=1 style="background: #ffffff"><img src="images/1x1.gif" width=1 height=32></td>
<td align=center><b><a class= style="color:#FFFFFF" href="thele.php"><?php echo $this->_tpl_vars['lngstr']['gioithieu']; ?></a></b></td>
<td align=center><b><a class= style="color:#FFFFFF" href="helpdk.php"><?php echo $this->_tpl_vars['lngstr']['huongdandangkyduthi']; ?></a></b></td>
<td align=center><b><a class= style="color:#FFFFFF" href="register.php"><?php echo $this->_tpl_vars['lngstr']['dangkyduthi']; ?></a></b></td>

<td align=center><b><a class= style="color:#FFFFFF" href="index.php"><?php echo $this->_tpl_vars['lngstr']['dangnhap']; ?></a></b></td>
<td align=center><b><a class= style="color:#FFFFFF" href="http://saigonact.edu.vn/index.php?option=com_content&view=section&layout=blog&id=27&Itemid=1010"><?php echo $this->_tpl_vars['lngstr']['tintuc']; ?></a></b></td>

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

<p>
<table cellpadding=0 cellspacing=5 border=0 width="600" bgcolor="#FFFFFF">
  <tr valign=top>
    <td width="15%" height="100%" class=signin1><form action="index.php" method=post name=signinform>
      <?php echo $this->_tpl_vars['lngstr']['page_signin_box_signin_intro']; ?> <br />
      <br />
      <?php echo $this->_tpl_vars['lngstr']['page_signin_box_signin']; ?> <br />
      <input name=username class=inp type=text value="<?php echo $this->_tpl_vars['g_vars']['page']['username']; ?>
" size=20 />
      <br />
      <?php echo $this->_tpl_vars['lngstr']['page_signin_box_password']; ?> <br />
      <input name=password class=inp type=password value="<?php echo $this->_tpl_vars['g_vars']['page']['user_password']; ?>
" size=20 />
      <input name=gotourl type=hidden value="<?php echo $this->_tpl_vars['g_vars']['page']['gotourl']; ?>
" />
      <br />
      <br />
      <input class=btn type=submit name=bsubmit value=" <?php echo $this->_tpl_vars['lngstr']['button_signin']; ?>
 " />
      <?php if ($this->_tpl_vars['g_vars']['page']['cansigninasguest']): ?>
      <br />
      <br />
      <input class=btn type=submit name=bguest value=" <?php echo $this->_tpl_vars['lngstr']['button_signin_as_guest']; ?>
 " />
      <?php endif; ?>
    </form></td>
   <!-- <td  bgcolor="#FFFFFF"; "height="100%" class=signin2><h1 align="center">&nbsp;</h1>-->
   <td>
        <p align="center"><strong><img src="http://saigonact.edu.vn/images/tuyen-sinh-2015/cuocthi.jpg" alt="" height=""  width="500"align="bottom" title="" /></strong></p>
        <p align="center"><strong><img title="" src="http://saigonact.edu.vn/doc/dulichcotrachnhiem/anh1.png" alt="" height="" width="500" /></strong></p>
     <p class style="font-size:18px; color: #990000" align="center"><strong>TH&#7874; L&#7878;</strong></p>
        <p align="center"><strong>Cu&#7897;c thi &ldquo;Du l&#7883;ch c&oacute; tr&aacute;ch  nhi&#7879;m v&#7899;i m&ocirc;i tr&#432;&#7901;ng v&agrave; x&atilde; h&#7897;i &rdquo;</strong></p>
      <p><strong><span font-size:10.0pt;line-height:="" sans-serif="sans-serif"""="">&#272;i&#7873;u 1. M&#7909;c &#273;&iacute;ch, &yacute; ngh&#297;a</span></strong></p>
      <p>1.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp; </span><span sans-serif="sans-serif"""="">Gi&uacute;p  h&#7885;c sinh t&igrave;m hi&#7875;u v&#7873; du l&#7883;ch c&oacute; tr&aacute;ch nhi&#7879;m v&#7899;i m&ocirc;i tr&#432;&#7901;ng v&agrave; x&atilde; h&#7897;i, n&#7855;m r&otilde; &#273;&#432;&#7907;c  n&#7873;n t&#7843;ng c&#7911;a Du l&#7883;ch c&oacute; tr&aacute;ch nhi&#7879;m li&ecirc;n quan &#273;&#7871;n s&#7917; d&#7909;ng c&aacute;c ngu&#7891;n t&agrave;i nguy&ecirc;n m&#7897;t  c&aacute;ch b&#7873;n v&#7919;ng, t&ocirc;n tr&#7885;ng, b&#7843;o t&#7891;n ph&aacute;t huy t&iacute;nh ch&acirc;n th&#7921;c v&#259;n h&oacute;a v&agrave; x&atilde; h&#7897;i;</span></p>
      <p><span lang="vi" xml:lang="vi">2.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;</span></span>Gi&uacute;p <span lang="vi" sans-serif="sans-serif" xml:lang="vi">h&#7885;c  sinh </span>nh&#7853;n th&#7913;c v&#7873; <span lang="vi" font-size:="" sans-serif="sans-serif" xml:lang="vi">Du l&#7883;ch c&oacute; tr&aacute;ch nhi&#7879;m</span> m&agrave; c&#7889;t l&otilde;i l&agrave; s&#7921; hi&#7875;u bi&#7871;t v&agrave; ch&#7845;p nh&#7853;n tr&aacute;ch nhi&#7879;m;<span lang="vi" sans-serif="sans-serif" xml:lang="vi"> </span></p>
      <p><span lang="vi" xml:lang="vi">3.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi">&nbsp;T&#7841;o s&#7921; &#273;&#7891;ng thu&#7853;n trong c&#7897;ng &#273;&#7891;ng h&#432;&#7899;ng &#273;&#7871;n b&#7843;o  v&#7879; m&ocirc;i tr&#432;&#7901;ng v&agrave; x&atilde; h&#7897;i, s&#7917; d&#7909;ng t&agrave;i nguy&ecirc;n b&#7873;n v&#7919;ng, gi&#7843;m ch&#7845;t th&#7843;i v&agrave; h&#7841;n ch&#7871;  ti&ecirc;u th&#7909; qu&aacute; m&#7913;c c&aacute;c t&agrave;i nguy&ecirc;n l&agrave;m l&#7907;i cho c&#7897;ng &#273;&#7891;ng v&agrave; ph&aacute;t tri&#7875;n kinh t&#7871;, x&atilde;  h&#7897;i;</span></p>
      <p><span lang="vi" xml:lang="vi">4.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi">Cu&#7897;c thi &#273;&#432;&#7907;c tri&#7875;n khai  s&acirc;u r&#7897;ng &#273;&#7871;n h&#7885;c sinh c&#7911;a c&aacute;c tr&#432;&#7901;ng Trung h&#7885;c ph&#7893; th&ocirc;ng tr&ecirc;n to&agrave;n qu&#7889;c.</span></p>
      <p><strong><span sans-serif="sans-serif"""="">&#272;i&#7873;u  2. &#272;&#417;n v&#7883; t&#7893; ch&#7913;c</span></strong></p>
      <p>1.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp; </span><span sans-serif="sans-serif"""="">T&#7893;ng  c&#7909;c Du l&#7883;ch</span></p>
      <p>2.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp; </span><span sans-serif="sans-serif"""="">B&aacute;o  Thanh Ni&ecirc;n</span></p>
      <p>3.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp; </span><span sans-serif="sans-serif"""="">Tr&#432;&#7901;ng  Cao &#273;&#7859;ng V&#259;n h&oacute;a Ngh&#7879; thu&#7853;t v&agrave; Du l&#7883;ch S&agrave;i G&ograve;n. </span></p>
      <p><strong><span font-size:="" sans-serif="sans-serif"""="">&#272;i&#7873;u 3. &#272;&#7889;i t&#432;&#7907;ng,  th&#7901;i gian v&agrave; n&#7897;i dung thi</span></strong></p>
      <p><strong>1.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;</span></strong><span font-size:10.0pt;line-height:="" sans-serif="sans-serif"""="">&#272;&#7889;i t&#432;&#7907;ng d&#7921; thi: T&#7845;t c&#7843; h&#7885;c sinh c&aacute;c  tr&#432;&#7901;ng Trung h&#7885;c Ph&#7893; th&ocirc;ng tr&ecirc;n to&agrave;n qu&#7889;c.</span></p>
      <p><strong>2.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;</span></strong><span font-size:10.0pt;line-height:="" sans-serif="sans-serif"""="">Th&#7901;i gian t&#7893; ch&#7913;c: Cu&#7897;c thi di&#7877;n ra t&#7915;  th&aacute;ng 01/2015 &#273;&#7871;n ng&agrave;y 15/6/2015v&agrave;  chia th&agrave;nh 3 giai &#273;o&#7841;n:</span></p>
      <p>a)<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp; </span>V&ograve;ng 1 b&#7855;t &#273;&#7847;u t&#7915; th&aacute;ng 01/2015 &#273;&#7871;n th&aacute;ng 3/2015;</p>
      <p>b)<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp; </span>V&ograve;ng 2 v&agrave;o th&aacute;ng 4 v&agrave; 5/2015;</p>
      <p>c)<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp; </span>V&ograve;ng chung k&#7871;t v&agrave; trao gi&#7843;i s&#7869; &#273;&#432;&#7907;c truy&#7873;n h&igrave;nh tr&#7921;c  ti&#7871;p v&agrave; d&#7921; ki&#7871;n di&#7877;n ra t&#7915; ng&agrave;y 8/6/2015 &#273;&#7871;n ng&agrave;y 15/6/2015.</p>
      <p><strong>3.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;</span></strong><span font-size:10.0pt;line-height:="" sans-serif="sans-serif"""="">N&#7897;i dung thi</span></p>
      <p>a)<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span sans-serif="sans-serif"""="">T&igrave;m  hi&#7875;u v&#7873; Du l&#7883;ch c&oacute; tr&aacute;ch nhi&#7879;m nh&#432;: Th&#7871; n&agrave;o l&agrave; Du l&#7883;ch c&oacute; tr&aacute;ch nhi&#7879;m, c&aacute;c  nguy&ecirc;n t&#7855;c, l&#7907;i &iacute;ch v&agrave; th&#7921;c ti&#7877;n Du l&#7883;ch c&oacute; tr&aacute;ch nhi&#7879;m, b&#7843;n Tuy&ecirc;n ng&ocirc;n Cape  Town;</span></p>
      <p>b)<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span sans-serif="sans-serif"""="">T&igrave;m  hi&#7875;u vai tr&ograve; c&#7911;a Du l&#7883;ch c&oacute; tr&aacute;ch nhi&#7879;m, s&#7921; kh&aacute;c bi&#7879;t v&#7899;i c&aacute;c h&igrave;nh th&#7913;c Du l&#7883;ch  kh&aacute;c v&agrave; tr&aacute;ch nhi&#7879;m c&#7911;a c&#7897;ng &#273;&#7891;ng, tham gia t&#7841;o ra c&aacute;c s&#7843;n ph&#7849;m Du l&#7883;ch c&oacute;  tr&aacute;ch nhi&#7879;m;</span></p>
      <p>c)<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span sans-serif="sans-serif"""="">Du  l&#7883;ch c&oacute; tr&aacute;ch nhi&#7879;m &#273;&#7889;i v&#7899;i m&ocirc;i tr&#432;&#7901;ng v&agrave; c&#7843;nh quan thi&ecirc;n nhi&ecirc;n;</span></p>
      <p>d)<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span sans-serif="sans-serif"""="">Du  l&#7883;ch c&oacute; tr&aacute;ch nhi&#7879;m &#273;&#7889;i v&#7899;i v&#259;n h&oacute;a, x&atilde; h&#7897;i, c&aacute;c di s&#7843;n v&#259;n h&oacute;a;</span></p>
      <p>e)<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span sans-serif="sans-serif"""="">Du  l&#7883;ch c&oacute; tr&aacute;ch nhi&#7879;m &#273;&#7889;i v&#7899;i n&#7873;n kinh t&#7871;.</span></p>
      <p><strong><span font-size:="" sans-serif="sans-serif"""="">&#272;i&#7873;u 4. H&igrave;nh th&#7913;c  thi</span></strong></p>
      <p><span font-size:10.0pt;line-height:150%;="" sans-serif="sans-serif"""="">Th&iacute; sinh s&#7869; tr&#7843;i qua 3 v&ograve;ng thi c&#7909; th&#7875; nh&#432;  sau:</span></p>
      <p><strong>1.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;</span></strong><span font-size:10.0pt;line-height:="" sans-serif="sans-serif"""="">V&ograve;ng 1:T&#7893; ch&#7913;c thi online tr&ecirc;n c&aacute;c website c&#7911;a Ban t&#7893; ch&#7913;c:</span></p>
      <p><span lang="vi" font-size:10.0pt;="" roman="roman" times="" new="" xml:lang="vi">-<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="fr" xml:lang="fr">T&#7893;ng c&#7909;c  Du l&#7883;ch: </span><a href="http://vietnamtourism.gov.vn">http://vietnamtourism.gov.vn</a> <span lang="fr" xml:lang="fr">;</span> </p>
      <p><span lang="vi" font-size:10.0pt;="" roman="roman" times="" new="" xml:lang="vi">-<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>B&aacute;o Thanh Ni&ecirc;n: <a href="http://thanhnien.com.vn">http://thanhnien.com.vn</a>;<span lang="vi" sans-serif="sans-serif" xml:lang="vi"> </span></p>
      <p><span lang="vi" font-size:10.0pt;="" roman="roman" times="" new="" xml:lang="vi">-<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi">Tr&#432;&#7901;ng Cao &#273;&#7859;ng V&#259;n h&oacute;a Ngh&#7879;  thu&#7853;t v&agrave; Du l&#7883;ch S&agrave;i G&ograve;n: <a href="http://saigonact.edu.vn/index.php?option=com_content&amp;view=article&amp;id=4861:th-l-cuc-thi-du-lch-co-trach-nhim-vi-moi-trng-va-xa-hi-&amp;catid=286:thong-tin-cuc-thi&amp;Itemid=1000">http://saigonact.edu.vn</a></span>.</p>
      <p><span lang="vi" sans-serif="sans-serif" xml:lang="vi">Th&iacute;  sinh truy c&#7853;p v&agrave;o 1 trong 3 website tr&ecirc;n &#273;&#7875; &#273;&#259;ng k&yacute; d&#7921; thi v&agrave; tr&#7843; l&#7899;i 20 c&acirc;u h&#7887;i  tr&#7855;c nghi&#7879;m v&#7899;i 04 &#273;&aacute;p &aacute;n A, B, C, D v&agrave; m&#7897;t c&acirc;u h&#7887;i ph&#7909;. K&#7871;t th&uacute;c v&ograve;ng 1 ch&#7885;n  ra 100 th&iacute; sinh c&oacute; s&#7889; &#273;i&#7875;m cao nh&#7845;t ti&#7871;p t&#7909;c thi v&ograve;ng 2.</span></p>
      <p><strong><span lang="vi" xml:lang="vi">2.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp; </span></span></strong><span lang="vi" xml:lang="vi">V&ograve;ng 2:Th&iacute; sinhthi online t&#7841;i </span><span font-size:10.0pt;line-height:="" sans-serif="sans-serif"""="">1 trong 3 </span><span lang="vi" xml:lang="vi">website tr&ecirc;n c&#7911;a ban t&#7893; ch&#7913;c. M&#7895;i &nbsp;th&iacute; sinh l&#7885;t v&agrave;o v&ograve;ng 2 s&#7869; tr&#7843; l&#7901;i 20 c&acirc;u h&#7887;i  tr&#7855;c nghi&#7879;m v&agrave; vi&#7871;t 01 b&agrave;i lu&#7853;n t&#7915; 500 &ndash; 700 t&#7915; li&ecirc;n quan &#273;&#7871;n ch&#7911; &#273;&#7873; cu&#7897;c thi. K&#7871;t  th&uacute;c v&ograve;ng 2, ch&#7885;n ra 20 th&iacute; sinh c&oacute; s&#7889; &#273;i&#7875;m cao nh&#7845;t v&agrave;o v&ograve;ng chung k&#7871;t.</span></p>
      <p><strong><span lang="vi" xml:lang="vi">3.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp; </span></span></strong><span lang="vi" xml:lang="vi">V&ograve;ng chung k&#7871;t:T&#7893;  ch&#7913;c t&#7841;i Th&agrave;nh ph&#7889; H&#7891; Ch&iacute; Minh v&agrave; &#273;&#432;&#7907;c truy&#7873;n h&igrave;nh tr&#7921;c ti&#7871;p tr&ecirc;n s&oacute;ng Truy&#7873;n  h&igrave;nh.</span></p>
      <p><span lang="vi" font-size:10.0pt;="" roman="roman" times="" new="" xml:lang="vi">a)<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi">20 th&iacute; sinh s&#7869; b&#7889;c th&#259;m  chia th&agrave;nh 5 b&#7843;ng (m&#7897;t b&#7843;ng 4 th&iacute; sinh). M&#7895;i b&#7843;ng ch&#7885;n 1 th&iacute; sinh c&oacute; &#273;i&#7875;m cao  nh&#7845;t v&agrave;o v&ograve;ng thi h&ugrave;ng bi&#7879;n. H&igrave;nh th&#7913;c thi: ph&#7847;n thi n&agrave;y s&#7869; c&oacute; 5 c&acirc;u h&#7887;i tr&#7855;c  nghi&#7879;m. Th&iacute; sinh s&#7869; tr&#7843; l&#7901;i c&acirc;u h&#7887;i b&#7857;ng c&aacute;ch nh&#7845;n chu&ocirc;ng. Th&iacute; sinh nh&#7845;n chu&ocirc;ng  &#273;&#7847;u ti&ecirc;n s&#7869; &#273;&#432;&#7907;c tr&#7843; l&#7901;i, m&#7895;i c&acirc;u tr&#7843; l&#7901;i &#273;&uacute;ng &#273;&#432;&#7907;c 5 &#273;i&#7875;m. N&#7871;u th&iacute; sinh &#273;&#7847;u  ti&ecirc;n tr&#7843; l&#7901;i sai, c&aacute;c th&iacute; sinh c&ograve;n l&#7841;i s&#7869; &#273;&#432;&#7907;c nh&#7845;n chu&ocirc;ng gi&agrave;nh quy&#7873;n tr&#7843; l&#7901;i.  Trong tr&#432;&#7901;ng h&#7907;p c&oacute; 2 ho&#7863;c nhi&#7873;u th&iacute; sinh b&#7857;ng &#273;i&#7875;m nhau trong m&#7897;t b&#7843;ng, Ban t&#7893;  ch&#7913;c s&#7869; &#273;&#432;a ra c&acirc;u h&#7887;i ph&#7909; &#273;&#7875; x&aacute;c &#273;&#7883;nh th&iacute; sinh c&oacute; &#273;i&#7875;m cao nh&#7845;t v&agrave;o v&ograve;ng sau.</span></p>
      <p><span lang="vi" font-size:10.0pt;="" roman="roman" times="" new="" xml:lang="vi">b)<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi">5 th&iacute; sinh xu&#7845;t s&#7855;c nh&#7845;t c&#7911;a  5 b&#7843;ng s&#7869; tham gia ph&#7847;n thi h&ugrave;ng bi&#7879;n v&#7873; ch&#7911; &#273;&#7873; li&ecirc;n quan &#273;&#7871;n cu&#7897;c thi <strong><em>&ldquo;Du l&#7883;ch  c&oacute; tr&aacute;ch nhi&#7879;m v&#7899;i m&ocirc;i tr&#432;&#7901;ng v&agrave; x&atilde; h&#7897;i&rdquo;</em></strong> v&agrave; tr&#7843; l&#7901;i c&acirc;u h&#7887;i c&#7911;a Ban  Gi&aacute;m kh&#7843;o.</span></p>
      <p><strong>&#272;i&#7873;u 5. C&#417; c&#7845;u gi&#7843;i th&#432;&#7903;ng</strong></p>
      <p>1.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp; </span>01 <span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi">Gi&#7843;i nh&#7845;t</span><span lang="vi" xml:lang="vi"> </span>tr&#7883; gi&aacute; <span lang="vi" sans-serif="sans-serif" xml:lang="vi">2</span>0<span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi">.000.000 &#273;&#7891;ng/gi&#7843;i</span> + C&uacute;p + chuy&#7871;n du l&#7883;ch xuy&ecirc;n Vi&#7879;t.</p>
      <p>2.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp; </span>02 Gi&#7843;i nh&igrave; tr&#7883; gi&aacute; 10.0<span lang="vi" sans-serif="sans-serif" xml:lang="vi">00.000  &#273;&#7891;ng/gi&#7843;i</span> + C&uacute;p + chuy&#7871;n du l&#7883;ch xuy&ecirc;n Vi&#7879;t.</p>
      <p>3.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp; </span><span lang="vi" sans-serif="sans-serif" xml:lang="vi">0</span>2<span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi"> Gi&#7843;i ba</span><span lang="vi" xml:lang="vi"> </span><span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi">tr&#7883; gi&aacute;</span> 4.0<span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi">00.000 &#273;&#7891;ng/gi&#7843;i</span> + C&uacute;p + chuy&#7871;n du l&#7883;ch xuy&ecirc;n Vi&#7879;t.</p>
      <p><span lang="vi" xml:lang="vi">4.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi">1</span>5<span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi"> Gi&#7843;i khuy&#7871;n kh&iacute;ch</span><span lang="vi" xml:lang="vi"> </span><span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi">tr&#7883; gi&aacute;</span> 2.0<span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi">00.000 &#273;&#7891;ng/gi&#7843;i</span></p>
      <p><span lang="vi" xml:lang="vi">5.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi">05 th&iacute; sinh c&oacute; &#273;i&#7875;m cao nh&#7845;t  c&#7911;a v&ograve;ng 01 &#273;&#432;&#7907;c nh&#7853;n 3.000.000 &#273;&#7891;ng/th&iacute; sinh</span></p>
      <p><span lang="vi" xml:lang="vi">6.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi">02 tr&#432;&#7901;ng THPT c&oacute; s&#7889; l&#432;&#7907;ng  th&iacute; sinh &#273;&ocirc;ng nh&#7845;t tham gia &#273;&#432;&#7907;c nh&#7853;n 15.000.000 &#273;&#7891;ng/ 01 tr&#432;&#7901;ng</span>.<span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi"> </span></p>
      <p><span lang="vi" xml:lang="vi">7.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi">Mi&#7877;n ph&iacute; 100% h&#7885;c ph&iacute; to&agrave;n  kh&oacute;a h&#7885;c cho 100 th&iacute; sinh c&oacute; &#273;i&#7875;m cao nh&#7845;t v&ograve;ng 01 &#273;&#259;ng k&yacute; h&#7885;c t&#7841;i tr&#432;&#7901;ng Cao &#273;&#7859;ng  V&#259;n h&oacute;a Ngh&#7879; thu&#7853;t v&agrave; Du l&#7883;ch S&agrave;i G&ograve;n.</span></p>
      <p><span lang="vi" xml:lang="vi">8.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi">T&#7845;t c&#7843; th&iacute; sinh l&#7885;t v&agrave;o  v&ograve;ng chung k&#7871;t s&#7869; nh&#7853;n &#273;&#432;&#7907;c b&#7857;ng khen c&#7911;a </span>B&aacute;o  Thanh Ni&ecirc;n<span lang="vi" font-size:10.0pt;line-height:150%;="" sans-serif="sans-serif" xml:lang="vi">.</span></p>
      <p><span lang="vi" xml:lang="vi">9.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span lang="vi" font-size:10.0pt;="" sans-serif="sans-serif" xml:lang="vi">Ban t&#7893; ch&#7913;c s&#7869; h&#7895; tr&#7907; kinh  ph&iacute; &#273;i l&#7841;i v&agrave; &#259;n &#7903; cho 20 th&iacute; sinh l&#7885;t v&agrave;o v&ograve;ng chung k&#7871;t, 5 th&iacute; sinh cao &#273;i&#7875;m  nh&#7845;t c&#7911;a v&ograve;ng 1 v&agrave; &#273;&#7841;i di&#7879;n l&atilde;nh &#273;&#7841;o 2 tr&#432;&#7901;ng THPT &#273;&#7841;t gi&#7843;i t&#7915; c&aacute;c t&#7881;nh, th&agrave;nh  v&#7873; Th&agrave;nh ph&#7889; H&#7891; Ch&iacute; Minh.</span></p>
      <p><strong>&#272;i&#7873;u 6. Gi&#7843;i  quy&#7871;t khi&#7871;u n&#7841;i, t&#7889; c&aacute;o v&agrave; c&aacute;c v&#7845;n &#273;&#7873; th&#7855;c m&#7855;c li&ecirc;n quan &#273;&#7871;n cu&#7897;c thi</strong></p>
      <p>1.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp; </span>Trong th&#7901;i h&#7841;n 7 ng&agrave;y k&#7875; t&#7915; ng&agrave;y Ban T&#7893; ch&#7913;c c&ocirc;ng b&#7889; k&#7871;t  qu&#7843; tr&ecirc;n website, n&#7871;u c&aacute; nh&acirc;n, t&#7893; ch&#7913;c th&#7855;c m&#7855;c v&#7873; k&#7871;t qu&#7843; cu&#7897;c thi, &#273;&#7873; ngh&#7883;  li&ecirc;n h&#7879; tr&#7921;c ti&#7871;p v&#7899;i Ban T&#7893; ch&#7913;c &#273;&#7875; &#273;&#432;&#7907;c xem x&eacute;t, tr&#7843; l&#7901;i; qu&aacute; th&#7901;i h&#7841;n n&ecirc;u  tr&ecirc;n, Ban T&#7893; ch&#7913;c cu&#7897;c thi s&#7869; kh&ocirc;ng gi&#7843;i quy&#7871;t.</p>
      <p>2.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp; </span>N&#7871;u c&oacute; &#273;&#417;n th&#432; khi&#7871;u n&#7841;i, t&#7889; c&aacute;o v&#7873; cu&#7897;c thi th&igrave; s&#7869; &#273;&#432;&#7907;c  gi&#7843;i quy&#7871;t theo c&aacute;c quy &#273;&#7883;nh c&#7911;a Th&#7875; l&#7879; cu&#7897;c thi n&agrave;y v&agrave; theo c&aacute;c quy &#273;&#7883;nh c&#7911;a  ph&aacute;p lu&#7853;t.</p>
      <p><strong>&#272;i&#7873;u 7. Th&ocirc;ng  b&aacute;o k&#7871;t qu&#7843; v&agrave; trao th&#432;&#7903;ng</strong></p>
      <p>1.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp; </span>Ban T&#7893; ch&#7913;c cu&#7897;c thi ch&#7883;u tr&aacute;ch nhi&#7879;m c&ocirc;ng b&#7889; k&#7871;t qu&#7843;  v&agrave; t&#7893; ch&#7913;c trao th&#432;&#7903;ng.</p>
      <p>2.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp; </span>K&#7871;t qu&#7843; thi t&#7915;ng th&aacute;ng s&#7869; &#273;&#432;&#7907;c c&#7853;p nh&#7853;t tr&ecirc;n website  sau 01 ng&agrave;y k&#7875; t&#7915; th&#7901;i &#273;i&#7875;m k&#7871;t th&uacute;c thi th&aacute;ng.</p>
      <p>3.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp; </span>Th&iacute; sinh, &#273;&#417;n v&#7883; &#273;&#7841;t gi&#7843;i khi &#273;&#7871;n nh&#7853;n gi&#7843;i th&#432;&#7903;ng ph&#7843;i  xu&#7845;t tr&igrave;nh Gi&#7845;y t&#7901; t&ugrave;y th&acirc;n (CMND) ho&#7863;c Gi&#7845;y gi&#7899;i thi&#7879;u c&#7911;a &#273;&#417;n v&#7883; &#273;&#7841;t gi&#7843;i cho  Ban T&#7893; ch&#7913;c. </p>
      <p><span lang="vi" xml:lang="vi">4.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;</span></span>Sau V&ograve;ng chung k&#7871;t,  Ban T&#7893; ch&#7913;c s&#7869; ti&#7871;n h&agrave;nh T&#7893;ng k&#7871;t v&agrave; trao gi&#7843;i th&#432;&#7903;ng cho nh&#7919;ng c&aacute; nh&acirc;n v&agrave; t&#7853;p  th&#7875; &#273;&#7841;t gi&#7843;i. L&#7883;ch t&#7893;ng k&#7871;t v&agrave; trao gi&#7843;i s&#7869; &#273;&#432;&#7907;c th&ocirc;ng b&aacute;o tr&ecirc;n website c&#7911;a <span lang="fr" xml:lang="fr">T&#7893;ng c&#7909;c Du l&#7883;ch: </span><a href="http://vietnamtourism.gov.vn">http://vietnamtourism.gov.vn</a><a href="http://www.vietnamtourism.gov.vn"></a><span lang="fr" xml:lang="fr">; </span>B&aacute;o Thanh ni&ecirc;n: <a href="http://www.thanhnien.com.vn">www.thanhnien.com.vn</a>;<span lang="vi" sans-serif="sans-serif" xml:lang="vi">Tr&#432;&#7901;ng  Cao &#273;&#7859;ng V&#259;n h&oacute;a Ngh&#7879; thu&#7853;t v&agrave; Du l&#7883;ch S&agrave;i G&ograve;n: </span><a href="http://saigonact.edu.vn" >http://saigonact.edu.vn</a> v&agrave; th&ocirc;ng b&aacute;o tr&#7921;c ti&#7871;p cho ng&#432;&#7901;i &#273;&#7841;t gi&#7843;i  qua &#273;i&#7879;n tho&#7841;i (ho&#7863;c th&#432; &#273;i&#7879;n t&#7917; ho&#7863;c th&#432; th&#432;&#7901;ng qua d&#7883;ch v&#7909; b&#432;u ch&iacute;nh).<span lang="vi" sans-serif="sans-serif" xml:lang="vi"> </span></p>
      <p><span lang="vi" xml:lang="vi">5.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp;</span></span>&#272;&#7889;i v&#7899;i nh&#7919;ng th&iacute;  sinh &#7903; xa v&#7873; nh&#7853;n gi&#7843;i, Ban T&#7893; ch&#7913;c cu&#7897;c thi s&#7869; h&#7895; tr&#7907; kinh ph&iacute; &#273;i l&#7841;i v&agrave; &#259;n &#7903;  cho th&iacute; sinh &#273;&#7871;n nh&#7853;n gi&#7843;i trong L&#7877; t&#7893;ng k&#7871;t v&agrave; trao gi&#7843;i,<span lang="vi" sans-serif="sans-serif" xml:lang="vi"> </span></p>
      <p>6.<span font:7.0pt="" times="" new="" roman="roman"""="">&nbsp;&nbsp;&nbsp;&nbsp; </span>&#272;&#7889;i v&#7899;i th&iacute; sinh kh&ocirc;ng v&#7873; nh&#7853;n gi&#7843;i, Ban T&#7893; ch&#7913;c s&#7869; gi&#7919;  gi&#7843;i th&#432;&#7903;ng &#273;&oacute; trong v&ograve;ng 30 ng&agrave;y k&#7871; t&#7915; ng&agrave;y t&#7893; ch&#7913;c trao th&#432;&#7903;ng. Qu&aacute; th&#7901;i h&#7841;n  tr&ecirc;n, n&#7871;u th&iacute; sinh kh&ocirc;ng t&#7899;i nh&#7853;n gi&#7843;i th&#432;&#7903;ng ho&#7863;c kh&ocirc;ng &#7911;y quy&#7873;n cho ng&#432;&#7901;i  kh&aacute;c t&#7899;i nh&#7853;n gi&#7843;i th&igrave; gi&#7843;i th&#432;&#7903;ng &#273;&oacute; s&#7869; &#273;&#432;&#7907;c h&#7911;y b&#7887;.</p>
      <p align="center"><strong>T/M  BAN T&#7892; CH&#7912;C</strong></p>
      <p align="center"><strong>TR&#431;&#7900;NG  CAO &#272;&#7858;NG V&#258;N H&Oacute;A NGH&#7878; THU&#7852;T V&Agrave; DU L&#7882;CH S&Agrave;I G&Ograve;N</strong></p></td>
  </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
