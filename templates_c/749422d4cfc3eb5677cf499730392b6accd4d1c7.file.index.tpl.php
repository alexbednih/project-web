<?php /* Smarty version Smarty-3.1.15, created on 2013-12-22 14:21:56
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27587529ad3c24f8e27-19911782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1387692659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27587529ad3c24f8e27-19911782',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529ad3c2599093_14274762',
  'variables' => 
  array (
    'site_name' => 0,
    'names' => 0,
    'loginn' => 0,
    'content' => 0,
    'comtent' => 0,
    'editstat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529ad3c2599093_14274762')) {function content_529ad3c2599093_14274762($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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
		            <a href="index.php?action=5">Добавить запись</a>
                <?php }?>
		</div>
		<div class="mainpanel" id="top-rsidebar">
		  <?php if (isset($_smarty_tpl->tpl_vars['loginn']->value)) {?>
                Вы вошли на сайт как <?php echo $_smarty_tpl->tpl_vars['loginn']->value;?>

		  <?php }?>
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
			<?php echo $_smarty_tpl->tpl_vars['comtent']->value;?>

			<?php echo $_smarty_tpl->tpl_vars['editstat']->value;?>

		</div>
		<div id="footer">
			<p>BledAks &copy</p>
		</div>
	</body>
</html>
<?php }} ?>
