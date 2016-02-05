<?php
/* Smarty version 3.1.29, created on 2016-02-05 02:24:34
  from "/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/includes/localdescrip.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b44e32e06363_97825421',
  'file_dependency' => 
  array (
    '4727610788649257e88d7c434cb2136c01f086f6' => 
    array (
      0 => '/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/includes/localdescrip.tpl',
      1 => 1454657060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56b44e32e06363_97825421 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/wxcenter/httpdocs/dev/wxweb-master//includes/Smarty/plugins/modifier.capitalize.php';
?>
<div id="topinfo">
<div>
<span class="name">
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['location']->value);?>
, <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['state_full']->value);?>
&nbsp;&nbsp;&nbsp;</span>
<span class="info">
<?php if ($_smarty_tpl->tpl_vars['county']->value) {?> | <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['county']->value);?>
 <?php if ($_smarty_tpl->tpl_vars['state']->value == 'LA') {?>Parish<?php } else { ?>County<?php }
}
if ($_smarty_tpl->tpl_vars['zipcode']->value) {?> | <?php echo $_smarty_tpl->tpl_vars['zipcode']->value;
}
if ($_smarty_tpl->tpl_vars['dlat']->value) {?> | <?php echo $_smarty_tpl->tpl_vars['dlat']->value;
}
if ($_smarty_tpl->tpl_vars['dlon']->value) {?> | <?php echo $_smarty_tpl->tpl_vars['dlon']->value;
}
if ($_smarty_tpl->tpl_vars['icao1x']->value) {?> | <?php echo $_smarty_tpl->tpl_vars['icao1x']->value;
}
if ($_smarty_tpl->tpl_vars['distance']->value) {?> | <?php echo $_smarty_tpl->tpl_vars['distance']->value;?>
 Miles from clicked<?php }?>
</span>
</div>
</div><?php }
}
