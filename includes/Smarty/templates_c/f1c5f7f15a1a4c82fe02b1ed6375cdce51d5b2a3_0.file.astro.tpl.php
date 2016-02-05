<?php
/* Smarty version 3.1.29, created on 2016-02-05 02:24:35
  from "/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/includes/astro.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b44e335415c6_42074347',
  'file_dependency' => 
  array (
    'f1c5f7f15a1a4c82fe02b1ed6375cdce51d5b2a3' => 
    array (
      0 => '/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/includes/astro.tpl',
      1 => 1454657060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56b44e335415c6_42074347 ($_smarty_tpl) {
?>

<div id="astro">
<table style="width:100%; text-align:center;">
<tr><td class="sechead">
Astro Data
</td></tr>
<tr><td>


<table style="width:100%;">
<tr>
<td class="tdname">
Sunrise:&nbsp;
</td>
<td class="tdvalue">
<?php echo $_smarty_tpl->tpl_vars['sunrise']->value;?>

</td>
<td rowspan="4" style="text-align:center; vertical-align:top;">
<img src="<?php echo $_smarty_tpl->tpl_vars['imgpath']->value;?>
/moon/<?php echo $_smarty_tpl->tpl_vars['moon_image']->value;?>
" height="40" width="40" alt="" />
<br />
<span class="tdvalue">
<?php echo $_smarty_tpl->tpl_vars['moon_phase']->value;?>

</span>
</td>



</tr><tr>

<td class="tdname">
Dawn:&nbsp;</td>
<td class="tdvalue">
<?php echo $_smarty_tpl->tpl_vars['nautical_twilite_start']->value;?>

</td>

</tr><tr>

<td class="tdname">
Sunset:&nbsp;
</td>
<td class="tdvalue">
<?php echo $_smarty_tpl->tpl_vars['sunset']->value;?>

</td>
</tr><tr>
<td class="tdname">
Dusk:&nbsp;</td>
<td class="tdvalue">
<?php echo $_smarty_tpl->tpl_vars['nautical_twilite_end']->value;?>

</td>




</table>

</td></tr>
<tr>
<td class="sechead">

</td></tr></table>

</div><?php }
}
