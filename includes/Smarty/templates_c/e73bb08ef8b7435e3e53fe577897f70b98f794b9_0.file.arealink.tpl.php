<?php
/* Smarty version 3.1.29, created on 2016-02-05 02:17:09
  from "/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/nav/arealink.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b44c75ad0481_49168903',
  'file_dependency' => 
  array (
    'e73bb08ef8b7435e3e53fe577897f70b98f794b9' => 
    array (
      0 => '/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/nav/arealink.tpl',
      1 => 1454656577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav/nav_local_radar.tpl' => 1,
    'file:nav/stateextra.tpl' => 1,
  ),
),false)) {
function content_56b44c75ad0481_49168903 ($_smarty_tpl) {
?>
<div id="arealink">
<div class="tabsarealink">
<ul>


<li <?php if ($_smarty_tpl->tpl_vars['run']->value == 'daycast') {?> class="active" <?php } else { ?> class="silent"<?php }?>>
<a href="<?php echo $_smarty_tpl->tpl_vars['wxurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
?run=daycast&amp;location=<?php echo $_smarty_tpl->tpl_vars['url_location']->value;?>
&amp;state=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['state']->value, 'UTF-8');?>
">Forecast</a>
</li>


<li <?php if ($_smarty_tpl->tpl_vars['run']->value == 'warnings') {?> class="active" <?php } else { ?> class="silent"<?php }?>>
<a href="<?php echo $_smarty_tpl->tpl_vars['wxurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
?run=warnings&amp;location=<?php echo $_smarty_tpl->tpl_vars['url_location']->value;?>
&amp;state=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['state']->value, 'UTF-8');?>
">Advisories</a>
</li>

<li <?php if ($_smarty_tpl->tpl_vars['run']->value == 'text') {?> class="active" <?php } else { ?> class="silent"<?php }?>>
<a href="<?php echo $_smarty_tpl->tpl_vars['wxurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
?run=discussion&amp;location=<?php echo $_smarty_tpl->tpl_vars['url_location']->value;?>
&amp;state=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['state']->value, 'UTF-8');?>
">Discussion</a>
</li>

<li <?php if ($_smarty_tpl->tpl_vars['run']->value == 'history') {?> class="active" <?php } else { ?> class="silent"<?php }?>>
<a href="<?php echo $_smarty_tpl->tpl_vars['wxurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
?run=wxhistory&amp;location=<?php echo $_smarty_tpl->tpl_vars['url_location']->value;?>
&amp;state=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['state']->value, 'UTF-8');?>
">3 Day History</a>
</li>

<li <?php if ($_smarty_tpl->tpl_vars['run']->value == 'nwsradarlite') {?> class="active" <?php } else { ?> class="silent"<?php }?>>
<a href="<?php echo $_smarty_tpl->tpl_vars['wxurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
?run=nwsradarlite&amp;location=<?php echo $_smarty_tpl->tpl_vars['url_location']->value;?>
&amp;state=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['state']->value, 'UTF-8');?>
">Local Radar</a>
</li>

<li <?php if ($_smarty_tpl->tpl_vars['run']->value == 'nwsradarliteloop') {?> class="active" <?php } else { ?> class="silent"<?php }?>>
<a href="<?php echo $_smarty_tpl->tpl_vars['wxurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
?run=nwsradarliteloop&amp;location=<?php echo $_smarty_tpl->tpl_vars['url_location']->value;?>
&amp;state=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['state']->value, 'UTF-8');?>
">Local Radar Loop</a>
</li>
</ul>
</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['run']->value == 'nwsradar') {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:nav/nav_local_radar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:nav/stateextra.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
}
