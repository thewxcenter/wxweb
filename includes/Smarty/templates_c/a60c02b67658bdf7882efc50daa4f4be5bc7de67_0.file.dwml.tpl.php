<?php
/* Smarty version 3.1.29, created on 2016-02-04 04:52:21
  from "/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/dwml.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b31f55eeaa57_59072780',
  'file_dependency' => 
  array (
    'a60c02b67658bdf7882efc50daa4f4be5bc7de67' => 
    array (
      0 => '/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/dwml.tpl',
      1 => 1366663734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/header.tpl' => 1,
    'file:includes/localdescrip.tpl' => 1,
    'file:nav/arealink.tpl' => 1,
    'file:includes/metar.tpl' => 1,
    'file:includes/astro.tpl' => 1,
    'file:includes/dwmlall.tpl' => 1,
    'file:includes/dwmlfull.tpl' => 1,
    'file:includes/googleforecast.tpl' => 1,
    'file:includes/footer.tpl' => 1,
  ),
),false)) {
function content_56b31f55eeaa57_59072780 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/wxcenter/httpdocs/dev/wxweb-master//includes/Smarty/plugins/modifier.capitalize.php';
if (!is_callable('smarty_function_runner')) require_once '/var/www/wxcenter/httpdocs/dev/wxweb-master//includes/Smarty/plugins/function.runner.php';
?>

<?php ob_start();
echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['locname']->value);
$_tmp1=ob_get_clean();
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_tmp1.", ".((string)$_smarty_tpl->tpl_vars['state']->value)." Forecast"), 0, false);
?>




<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:includes/localdescrip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:nav/arealink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table style="width:100%; borderspacing:1px;">
<tr><td style="width:50%;">

<?php echo smarty_function_runner(array('run'=>"metar",'locname'=>((string)$_smarty_tpl->tpl_vars['locname']->value),'state'=>((string)$_smarty_tpl->tpl_vars['state']->value),'dpp'=>"1"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:includes/metar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</td>
<td style="width:50%;">
<?php echo smarty_function_runner(array('run'=>"astro",'locname'=>((string)$_smarty_tpl->tpl_vars['locname']->value),'state'=>((string)$_smarty_tpl->tpl_vars['state']->value)),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:includes/astro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</td></tr>
</table>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:includes/dwmlall.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="dwmlfull">
<div class="sechead">
<?php echo $_smarty_tpl->tpl_vars['for_date']->value;?>

</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:includes/dwmlfull.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:includes/googleforecast.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>






<!--  -->

















<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
