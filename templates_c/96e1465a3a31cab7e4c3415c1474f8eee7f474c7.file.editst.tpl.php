<?php /* Smarty version Smarty-3.1.15, created on 2013-12-22 16:00:58
         compiled from ".\templates\editst.tpl" */ ?>
<?php /*%%SmartyHeaderCode:314552b685afa76174-49123191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96e1465a3a31cab7e4c3415c1474f8eee7f474c7' => 
    array (
      0 => '.\\templates\\editst.tpl',
      1 => 1387699237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314552b685afa76174-49123191',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b685afac2157_48558077',
  'variables' => 
  array (
    'idnews' => 0,
    'name' => 0,
    'body' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b685afac2157_48558077')) {function content_52b685afac2157_48558077($_smarty_tpl) {?><p align="center">Редактирование записи</p>
<br>
<form id="add" action="index.php?action=7&idnews=<?php echo $_smarty_tpl->tpl_vars['idnews']->value;?>
" method="post">
    <p><label>Название записи</label></p>
    <p><input type="text" maxlength="25" size="20" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></p>
    <p><label>Текст записи</label></p>
    <p><textarea cols="25" pows="20" name="body"><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</textarea></p>
    <p><input type="submit"  value="Редактировать" name="submit"></p>
</form><?php }} ?>
