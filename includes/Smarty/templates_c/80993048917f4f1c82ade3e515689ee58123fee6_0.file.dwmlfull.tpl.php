<?php
/* Smarty version 3.1.29, created on 2016-02-05 02:24:35
  from "/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/includes/dwmlfull.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b44e33679811_13209281',
  'file_dependency' => 
  array (
    '80993048917f4f1c82ade3e515689ee58123fee6' => 
    array (
      0 => '/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/includes/dwmlfull.tpl',
      1 => 1454657060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56b44e33679811_13209281 ($_smarty_tpl) {
?>


<table class="inner">
<?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['DayCount']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['DayCount']->value-1)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 0, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;
if (!(1 & $_smarty_tpl->tpl_vars['x']->value)) {?>
    <tr class="even">
    <?php } else { ?>
    <tr class="odd">
    <?php }?>
<td class="date">
<?php echo $_smarty_tpl->tpl_vars['DayNameFormal']->value[$_smarty_tpl->tpl_vars['x']->value];?>
<br/>
<?php echo $_smarty_tpl->tpl_vars['DayDateFormal']->value[$_smarty_tpl->tpl_vars['x']->value];?>
<br />
<?php if ($_smarty_tpl->tpl_vars['Dayhi']->value[$_smarty_tpl->tpl_vars['x']->value]) {?>
<span style="color:red; font-size:.85em;">H: <?php echo $_smarty_tpl->tpl_vars['Dayhi']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</span>
<?php }
if ($_smarty_tpl->tpl_vars['Daylo']->value[$_smarty_tpl->tpl_vars['x']->value]) {?>
<span style="color:blue; font-size:.85em;">L: <?php echo $_smarty_tpl->tpl_vars['Daylo']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</span>
<?php }?>
</td>
<td class="daycast">
<?php echo $_smarty_tpl->tpl_vars['Daycast']->value[$_smarty_tpl->tpl_vars['x']->value];?>

</td></tr>
<?php }
}
?>




</table>
<?php }
}
