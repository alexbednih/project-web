<?php /* Smarty version Smarty-3.1.15, created on 2013-11-16 13:44:19
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11447184885274a75674bb72-17655818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1384584171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11447184885274a75674bb72-17655818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5274a7568430c3_21761654',
  'variables' => 
  array (
    'site_name' => 0,
    'names' => 0,
    'loginn' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5274a7568430c3_21761654')) {function content_5274a7568430c3_21761654($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>
</head>
<body>
		<div id="login">
			<br />
				<?php echo $_smarty_tpl->tpl_vars['names']->value;?>

			<br />
		</div>
		<div id="topmenu">
                  <?php if (isset($_smarty_tpl->tpl_vars['loginn']->value)) {?>
		  <a href="addst.php">Добавить запись</a>
                  <?php }?>
		</div>
		<div class="mainpanel" id="top-rsidebar">
		  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
                  
		</div>
		<div class="mainpanel" id="top-lsidebar">
			<ul>
				<li><a href="index.php">Главная</a>
				<li><a href="index.php?action=2">Обратная связь</a>
			</ul>
		</div>
		<div class="mainpanel" id="bottom-lsidebar">
			
		</div>
		<div class="mainpanel" id="main">
                  <?php echo $_smarty_tpl->getSubTemplate ("main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
		<div id="footer">
			<p>BledAks &copy</p>
		</div>
	</body>
</html>
<?php }} ?>
