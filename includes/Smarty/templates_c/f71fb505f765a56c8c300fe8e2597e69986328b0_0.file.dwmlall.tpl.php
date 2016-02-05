<?php
/* Smarty version 3.1.29, created on 2016-02-05 02:24:35
  from "/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/includes/dwmlall.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b44e3362acb2_15751532',
  'file_dependency' => 
  array (
    'f71fb505f765a56c8c300fe8e2597e69986328b0' => 
    array (
      0 => '/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/includes/dwmlall.tpl',
      1 => 1454657060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56b44e3362acb2_15751532 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/wxcenter/httpdocs/dev/wxweb-master//includes/Smarty/plugins/modifier.capitalize.php';
?>
<div id="dwmlall">
<div style="text-align:center;">
<table style="width:100%; border-spacing:1px;">
<tr>
<?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['DayCount']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['DayCount']->value-1)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 0, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?>
<td style="width:60px; text-align:center; vertical-align:baseline;">
<span class="daytitles">
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['DayNames']->value[$_smarty_tpl->tpl_vars['x']->value]);?>

</span>
</td>
<?php }
}
?>


</tr><tr>

<?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['DayCount']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['DayCount']->value-1)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 0, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?>
<td style="width:60px; text-align:center; vertical-align:baseline;">
<img src="<?php echo $_smarty_tpl->tpl_vars['NWSicon']->value[$_smarty_tpl->tpl_vars['x']->value];?>
" alt="" width="50" height="50" />
</td>
<?php }
}
?>



</tr><tr>

<?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['DayCount']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['DayCount']->value-1)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 0, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?>
<td style="width:60px; text-align:center; vertical-align:baseline;">
<span class="daywx"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['Daywx']->value[$_smarty_tpl->tpl_vars['x']->value]);?>
</span>
</td>
<?php }
}
?>



</tr><tr>

<?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['DayCount']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['DayCount']->value-1)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 0, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?>
<td style="width:60px; text-align:center; vertical-align:baseline;">
<?php if ($_smarty_tpl->tpl_vars['Dayhi']->value[$_smarty_tpl->tpl_vars['x']->value]) {?>
<span style="color:red; font-size:.75em;">H: <?php echo $_smarty_tpl->tpl_vars['Dayhi']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</span>
<?php }
if ($_smarty_tpl->tpl_vars['Daylo']->value[$_smarty_tpl->tpl_vars['x']->value]) {?>
<span style="color:blue; font-size:.75em;">L: <?php echo $_smarty_tpl->tpl_vars['Daylo']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</span>
<?php }
if ($_smarty_tpl->tpl_vars['Daypop']->value[$_smarty_tpl->tpl_vars['x']->value]) {?>
<br /><span style="color:green; font-size:.75em;">Pop: <?php echo $_smarty_tpl->tpl_vars['Daypop']->value[$_smarty_tpl->tpl_vars['x']->value];?>
%</span>
<?php }?>
</td>
<?php }
}
?>


</tr>
</table>

</div>
</div><?php }
}
