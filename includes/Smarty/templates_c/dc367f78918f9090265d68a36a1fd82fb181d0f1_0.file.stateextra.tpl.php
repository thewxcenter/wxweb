<?php
/* Smarty version 3.1.29, created on 2016-02-05 02:17:09
  from "/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/nav/stateextra.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b44c75b79880_55745650',
  'file_dependency' => 
  array (
    'dc367f78918f9090265d68a36a1fd82fb181d0f1' => 
    array (
      0 => '/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/nav/stateextra.tpl',
      1 => 1454656577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56b44c75b79880_55745650 ($_smarty_tpl) {
?>
<div id="stateextra">
<div class="stateextraclass">
<ul>
<li class="silent"><a href="<?php echo $_smarty_tpl->tpl_vars['wxurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
?run=discussion&amp;location=<?php echo $_smarty_tpl->tpl_vars['url_location']->value;?>
&amp;state=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['state']->value, 'UTF-8');?>
" >Forecast Discussion</a></li>
<li class="silent"><a href="<?php echo $_smarty_tpl->tpl_vars['wxurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
?run=fireweather&amp;location=<?php echo $_smarty_tpl->tpl_vars['url_location']->value;?>
&amp;state=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['state']->value, 'UTF-8');?>
">Fire Planning</a></li>
<li class="silent"><a href="<?php echo $_smarty_tpl->tpl_vars['wxurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
?run=public&amp;location=<?php echo $_smarty_tpl->tpl_vars['url_location']->value;?>
&amp;state=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['state']->value, 'UTF-8');?>
">Public Information</a></li>
<li class="silent"><a href="<?php echo $_smarty_tpl->tpl_vars['wxurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
?run=record&amp;location=<?php echo $_smarty_tpl->tpl_vars['url_location']->value;?>
&amp;state=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['state']->value, 'UTF-8');?>
">Record Report</a></li>
<li class="silent"><a href="<?php echo $_smarty_tpl->tpl_vars['wxurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
?run=hydro&amp;location=<?php echo $_smarty_tpl->tpl_vars['url_location']->value;?>
&amp;state=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['state']->value, 'UTF-8');?>
">Hydrologic</a></li>


</ul>
</div>


</div>
<?php }
}
