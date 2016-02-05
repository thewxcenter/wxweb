<?php
/* Smarty version 3.1.29, created on 2016-02-05 02:24:34
  from "/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/includes/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b44e32d8e087_94702526',
  'file_dependency' => 
  array (
    '1c58c22c3417dcbf08b3978b0a3ede3a0836c916' => 
    array (
      0 => '/var/www/wxcenter/httpdocs/dev/wxweb-master/includes/templates/includes/header.tpl',
      1 => 1454657060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56b44e32d8e087_94702526 ($_smarty_tpl) {
?>

<!DOCTYPE HTML>
<head>
	<meta name="robots" content="index" />
	<meta name="author" content="MichiganWxSystem/ByTheLakeWebDevelopment" />
    <meta charset="UTF-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</title>



<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['csspath']->value;?>
wxweb.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['csspath']->value;?>
tabular.css" />

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['csspath']->value;?>
rivers.css" />

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['csspath']->value;?>
radar.css" />











</head>
<body>

<div id="head">
		<div>

		
		<p class="title">WxWeb</p>
        
        
    <div style="text-align:right;">    
    <form action="<?php echo $_smarty_tpl->tpl_vars['wxurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
" method="get" class="searchform">
    <input type="hidden" value="daycast" name="run" />
	<input type="text" name="location" value=""/>
    <input type="submit" name="submit" value="Search" />
    </form>		
</div>
</div>

</div>
	

 

<div style="margin-left: auto; margin-right: auto; width:800px;">
<?php }
}
