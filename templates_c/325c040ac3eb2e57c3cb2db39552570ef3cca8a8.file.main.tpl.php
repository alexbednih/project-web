<?php /* Smarty version Smarty-3.1.15, created on 2013-12-01 14:14:26
         compiled from ".\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31808529ad3c2621b80-75491149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '325c040ac3eb2e57c3cb2db39552570ef3cca8a8' => 
    array (
      0 => '.\\templates\\main.tpl',
      1 => 1384583224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31808529ad3c2621b80-75491149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'temp' => 0,
    'row' => 0,
    'item' => 0,
    'loginn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529ad3c267b967_30475569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529ad3c267b967_30475569')) {function content_529ad3c267b967_30475569($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['temp']->value==2) {?>
	<p>Сайт разработал Бедных Алексей Олегович</p>
	<p>Телефон: +7-950-333-14-40</p>
	<p>e-mail: alexbednih@gmail.com</p>
<?php } elseif ($_smarty_tpl->tpl_vars['temp']->value==4) {?>
	<h2>Регистрация</h2>
    	<form action="index.php?action=5" method="post">
	   <p>
    	      <label>Ваш логин:<br></label>
    	      <input name="login" type="text" size="15" maxlength="15">
    	   </p>
	   <p>
    	      <label>Ваш пароль:<br></label>
    	      <input name="password" type="password" size="15" maxlength="15">
    	   </p>
	   <p>
    	      <input type="submit" name="submit" value="Зарегистрироваться">
	   </p>
	</form>
<?php } else { ?>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<hr><?php echo $_smarty_tpl->tpl_vars['item']->value['id_news'];?>
 запись: 
	<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<br><br>
	<?php echo $_smarty_tpl->tpl_vars['item']->value['body'];?>
<br><br>
	<?php if (isset($_smarty_tpl->tpl_vars['loginn']->value)) {?>
  	   <a href="editst.php?id_news=$news">Редактировать запись</a><a href="delst.php">Удалить запись</a>
	<?php }?>
<?php } ?>
<?php }?>
<?php }} ?>
