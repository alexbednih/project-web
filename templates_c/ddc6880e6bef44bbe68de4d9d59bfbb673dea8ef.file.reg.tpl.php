<?php /* Smarty version Smarty-3.1.15, created on 2013-12-22 04:28:16
         compiled from ".\templates\reg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167952b5f737689a48-85241123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddc6880e6bef44bbe68de4d9d59bfbb673dea8ef' => 
    array (
      0 => '.\\templates\\reg.tpl',
      1 => 1387657611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167952b5f737689a48-85241123',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b5f7376d84f6_46807159',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b5f7376d84f6_46807159')) {function content_52b5f7376d84f6_46807159($_smarty_tpl) {?>    <h2>Регистрация</h2>
    <form action="index.php?action=41.php" method="post">
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
</p></form><?php }} ?>
