<?php /* Smarty version Smarty-3.1.15, created on 2013-12-22 17:11:55
         compiled from ".\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31808529ad3c2621b80-75491149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '325c040ac3eb2e57c3cb2db39552570ef3cca8a8' => 
    array (
      0 => '.\\templates\\main.tpl',
      1 => 1387703511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31808529ad3c2621b80-75491149',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529ad3c267b967_30475569',
  'variables' => 
  array (
    'row' => 0,
    'i' => 0,
    'item' => 0,
    'loginn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529ad3c267b967_30475569')) {function content_529ad3c267b967_30475569($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<hr>
	<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 запись:
	<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<br><br>
	<?php echo $_smarty_tpl->tpl_vars['item']->value['body'];?>
<br><br>
	<?php if (isset($_smarty_tpl->tpl_vars['loginn']->value)) {?>
  	   <a href="index.php?id_news=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_news'];?>
">Редактировать запись</a>
  	   <a href="index.php?action=8&idnews=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_news'];?>
">Удалить запись</a>
	<?php }?>
	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
<?php } ?>
<?php }} ?>
