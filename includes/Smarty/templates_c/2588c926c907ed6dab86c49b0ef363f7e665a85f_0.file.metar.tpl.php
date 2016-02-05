<?php
/* Smarty version 3.1.29, created on 2016-02-05 02:24:35
  from "/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/includes/metar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b44e33228761_38971415',
  'file_dependency' => 
  array (
    '2588c926c907ed6dab86c49b0ef363f7e665a85f' => 
    array (
      0 => '/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/includes/metar.tpl',
      1 => 1454657060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56b44e33228761_38971415 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/wxcenter/httpdocs/dev/wxweb-master//includes/Smarty/plugins/modifier.capitalize.php';
?>

<div id="metar">
<table style="width:100%; text-align:center;">
<tr><td class="sechead" colspan="3">
<?php echo $_smarty_tpl->tpl_vars['mname1x']->value;?>

</td></tr>

<tr>
<td class="tdname">
Dew Point:&nbsp;</td>
<td class="tdvalue">
<?php echo $_smarty_tpl->tpl_vars['metardew_f']->value;?>
&deg;F
</td>


<td class="tdname" rowspan="10">
<img src="<?php echo $_smarty_tpl->tpl_vars['imgpath']->value;?>
/wxicons/metar/<?php echo $_smarty_tpl->tpl_vars['metarwx_icon']->value;?>
" alt="" /><br/>
<?php echo $_smarty_tpl->tpl_vars['metarclouds_condition']->value;?>
<br/>
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['metarweather_condition']->value);?>
<br/>

<span class="temp"><?php echo $_smarty_tpl->tpl_vars['metartemp_f']->value;?>
&deg;F</span>
</td>


</tr>
<tr>

<td class="tdname">
Wind Speed:&nbsp;
</td>
<td class="tdvalue">
<?php echo $_smarty_tpl->tpl_vars['metarwind_mph']->value;?>

</td>

</tr>
<tr>

<td class="tdname">
Wind Direction:&nbsp;</td>
<td class="tdvalue">
<?php echo $_smarty_tpl->tpl_vars['metarwind_eng']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['metarwind_deg']->value;?>
&deg;)
</td>

</tr>
<tr>

<td class="tdname">
Wind Gusts:&nbsp;</td>
<td class="tdvalue">
<?php echo $_smarty_tpl->tpl_vars['metarwind_gust_mph']->value;?>

</td>

</tr>
<tr>

<td class="tdname">
Humidity:&nbsp;</td>
<td class="tdvalue">
<?php echo $_smarty_tpl->tpl_vars['metarrel_humidity']->value;?>
%
</td>

</tr>
<tr>

<td class="tdname">
Feels Like:&nbsp;</td>
<td class="tdvalue">
<?php echo $_smarty_tpl->tpl_vars['metarfeelslike_f']->value;?>
&deg;F
</td>

</tr>
<tr>

<td class="tdname">
Visibility:&nbsp;</td>
<td class="tdvalue">
<?php echo $_smarty_tpl->tpl_vars['metarvisibility_miles']->value;?>
mile(s)
</td>

</tr>
<tr>

<td class="tdname">
Pressure:&nbsp;</td>
<td class="tdvalue">
<?php echo $_smarty_tpl->tpl_vars['metarinhg']->value;?>
" (<?php echo $_smarty_tpl->tpl_vars['metarhpa']->value;?>
)
</td>

</tr>
<tr>

<td class="tdname">
Station:&nbsp;</td>
<td class="tdvalue">
<?php echo $_smarty_tpl->tpl_vars['metaricao']->value;?>

</td>

</tr>



<tr><td class="tdname">
Updated:&nbsp;</td>
<td class="tdvalue">
<?php echo $_smarty_tpl->tpl_vars['metarupdate']->value;?>

</td></tr></table>
</div><?php }
}
