<?php
/* Smarty version 3.1.29, created on 2016-02-04 05:33:21
  from "/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/wxhistory.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b328f1850ec0_25999787',
  'file_dependency' => 
  array (
    '3736ac14ec0da0571ae1b9f356ecf935482ebd3f' => 
    array (
      0 => '/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/wxhistory.tpl',
      1 => 1366663734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/header.tpl' => 1,
    'file:includes/localdescrip.tpl' => 1,
    'file:nav/arealink.tpl' => 1,
    'file:includes/footer.tpl' => 1,
  ),
),false)) {
function content_56b328f1850ec0_25999787 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/wxcenter/httpdocs/dev/wxweb-master//includes/Smarty/plugins/modifier.capitalize.php';
ob_start();
echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['icao1x']->value);
$_tmp1=ob_get_clean();
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_tmp1." - 3 day weather history for ".((string)$_smarty_tpl->tpl_vars['wxhistory_place']->value)), 0, false);
?>



<div style="margin-left: auto; margin-right: auto; width: 100%;">

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:includes/localdescrip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:nav/arealink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<table id="history">
<tbody>
<tr class="trhead">
<th rowspan="3">D<br />a<br />t<br />e</th>
<th rowspan="3">Time</th>
<th rowspan="3">Wind<br />(mph)</th>
<th rowspan="3">Vis.<br />(mi.)</th>
<th rowspan="3">Weather</th>
<th rowspan="3">Sky Cond.</th>
<th colspan="6">Temperature (&deg;F)</th>
<th rowspan="3">Relative<br />Humidity</th>
<th colspan="2">Pressure</th>
<th colspan="3">Precipitation (in.)</th></tr>

<tr class="trhead">

<th rowspan="2">Air</th>
<th rowspan="2">Dwpt</th>
<th rowspan="2">WC</th>
<th rowspan="2">HI</th>
<th colspan="2">6 hour</th>
<th rowspan="2">altimeter<br />(in.)</th>
<th rowspan="2">sea level<br />(mb)</th>
<th rowspan="2">1 hr</th>
<th rowspan="2">3 hr</th>
<th rowspan="2">6 hr</th>

</tr><tr class="trhead">

<th>Max.</th>
<th>Min.</th>

</tr>

<?php if ($_smarty_tpl->tpl_vars['wxhistory_total']->value) {
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['wxhistory_total']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['wxhistory_total']->value-1)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 0, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;
if (!(1 & $_smarty_tpl->tpl_vars['x']->value)) {?>
<tr class="even">
<?php } else { ?>
<tr class="odd">
<?php }?>
    <td><?php echo $_smarty_tpl->tpl_vars['wxhistory_date']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['wxhistory_time']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['wxhistory_wind']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['wxhistory_vis']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['wxhistory_wx']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['wxhistory_skycond']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['wxhistory_temp']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['wxhistory_dwpt']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['wxhistory_wc']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['wxhistory_hi']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</td>
    <td></td>
    <td></td>
    <td><?php echo $_smarty_tpl->tpl_vars['wxhistory_rh']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['wxhistory_pressalt']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['wxhistory_pressmb']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['wxhistory_precipone']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['wxhistory_precipthree']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['wxhistory_precipsix']->value[$_smarty_tpl->tpl_vars['x']->value];?>
</td>
</tr>
<?php }
}
?>

<?php }?>
</table>












</div>















<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
