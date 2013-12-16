<?php /* Smarty version Smarty-3.1.15, created on 2013-12-14 14:38:42
         compiled from ".\templates\loginb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:627052abfcf245fa82-98966249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2016165a2ff0e60119a7ebc54ef2b04106cfa3f' => 
    array (
      0 => '.\\templates\\loginb.tpl',
      1 => 1384587505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '627052abfcf245fa82-98966249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'loginn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52abfcf25cbea1_35617560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52abfcf25cbea1_35617560')) {function content_52abfcf25cbea1_35617560($_smarty_tpl) {?>Вы вошли на сайт, как <?php echo $_smarty_tpl->tpl_vars['loginn']->value;?>

<form action="vih.php" method="post">
<p><input type="submit" value="Выйти" name="submit"></p>
<?php }} ?>
