<?php /* Smarty version Smarty-3.1.15, created on 2013-12-14 14:41:30
         compiled from ".\templates\logina.tpl" */ ?>
<?php /*%%SmartyHeaderCode:453152abfd9a33a339-33735204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4076b6c956de63295e5ba70d45e5dac947c26a6c' => 
    array (
      0 => '.\\templates\\logina.tpl',
      1 => 1384586404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '453152abfd9a33a339-33735204',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52abfd9a392ae0_60699670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52abfd9a392ae0_60699670')) {function content_52abfd9a392ae0_60699670($_smarty_tpl) {?><form action="index.php?action=3" method="post">
<input type="hidden" name="seenform" value="y">
<label>Авторизация</label>
<p><strong>Логин:</strong></p>
<p><input type="text" maxlength="25" size="20" name="login"></p>
<p><strong>Пароль:</strong></p>
<p><input type="password" maxlength="25" size="20" name="password"></p>
<p><input type="submit" value="Войти" name="submit"></p>
<a href="index.php?action=4">Зарегистрироваться</a> 
</form>
<?php }} ?>
