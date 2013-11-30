<?php /* Smarty version Smarty-3.1.15, created on 2013-11-16 03:30:44
         compiled from "./templates/avtoriz.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6588432965286759b4a80a8-94630443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b8f89b3ae3f2676a3740738bd5bbaf5e6cd357f' => 
    array (
      0 => './templates/avtoriz.tpl',
      1 => 1384547441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6588432965286759b4a80a8-94630443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5286759b4ad6a1_64177907',
  'variables' => 
  array (
    'avtorizac' => 0,
    'loginn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5286759b4ad6a1_64177907')) {function content_5286759b4ad6a1_64177907($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['avtorizac']->value==0) {?>
<form action="index.php?action=3" method="post">
<input type="hidden" name="seenform" value="y">
<label>Авторизация</label>
<p><strong>Логин:</strong></p>
<p><input type="text" maxlength="25" size="20" name="login"></p>
<p><strong>Пароль:</strong></p>
<p><input type="password" maxlength="25" size="20" name="password"></p>
<p><input type="submit" value="Войти" name="submit"></p>
<a href="index.php?action=4">Зарегистрироваться</a> 
</form>
Вы вошли на сайт, как гость
<?php } else { ?>
Вы вошли на сайт, как <?php echo $_smarty_tpl->tpl_vars['loginn']->value;?>

<form action="vih.php" method="post">
    <p><input type="submit" value="Выйти" name="submit"></p>
<?php }?>
<?php }} ?>
