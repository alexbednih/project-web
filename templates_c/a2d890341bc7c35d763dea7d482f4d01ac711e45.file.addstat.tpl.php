<?php /* Smarty version Smarty-3.1.15, created on 2013-12-22 17:23:49
         compiled from ".\templates\addstat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2403552b34001811c48-78447041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2d890341bc7c35d763dea7d482f4d01ac711e45' => 
    array (
      0 => '.\\templates\\addstat.tpl',
      1 => 1387704218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2403552b34001811c48-78447041',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b3400186adb3_95325527',
  'variables' => 
  array (
    'loginn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b3400186adb3_95325527')) {function content_52b3400186adb3_95325527($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['loginn']->value)) {?>
<p align="center">Добавление записи</p>
<br>
<form id="add" action="index.php?action=6" method="post">
    <p><label>Введите название записи</label></p>
    <p><input type="text" maxlength="25" size="20" name="name"></p>
    <p><label>Введите текст записи</label></p>
    <p><textarea cols="25" pows="20" name="body"></textarea></p>
    <p><input type="submit"  value="Добавить" name="submit"></p>
</form>
<?php } else { ?>
<p>Вы не авторизованы! Войдите или зарегистрируйтесь.</p>
<?php }?><?php }} ?>
