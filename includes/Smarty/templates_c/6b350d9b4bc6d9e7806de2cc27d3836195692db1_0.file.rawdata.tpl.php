<?php
/* Smarty version 3.1.29, created on 2016-02-04 05:23:18
  from "/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/rawdata.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b32696520987_26876600',
  'file_dependency' => 
  array (
    '6b350d9b4bc6d9e7806de2cc27d3836195692db1' => 
    array (
      0 => '/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/rawdata.tpl',
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
function content_56b32696520987_26876600 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/var/www/wxcenter/httpdocs/dev/wxweb-master//includes/Smarty/plugins/modifier.capitalize.php';
ob_start();
echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['locname']->value);
$_tmp1=ob_get_clean();
ob_start();
echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['rawtitle']->value);
$_tmp2=ob_get_clean();
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_tmp1.", ".((string)$_smarty_tpl->tpl_vars['state']->value)." ".$_tmp2), 0, false);
?>



<div style="margin-left: auto; margin-right: auto; width: 100%;">

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:includes/localdescrip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:nav/arealink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div id="rawdata">
<pre><?php echo $_smarty_tpl->tpl_vars['rawdata']->value;?>
</pre>






</div>















</div>


<!--  -->

















<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
