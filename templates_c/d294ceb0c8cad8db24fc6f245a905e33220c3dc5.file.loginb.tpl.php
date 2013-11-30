<?php /* Smarty version Smarty-3.1.15, created on 2013-11-16 14:38:32
         compiled from "./templates/loginb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16117022755287201c9488e7-98541658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd294ceb0c8cad8db24fc6f245a905e33220c3dc5' => 
    array (
      0 => './templates/loginb.tpl',
      1 => 1384587505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16117022755287201c9488e7-98541658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5287201c953a91_35620227',
  'variables' => 
  array (
    'loginn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5287201c953a91_35620227')) {function content_5287201c953a91_35620227($_smarty_tpl) {?>Вы вошли на сайт, как <?php echo $_smarty_tpl->tpl_vars['loginn']->value;?>

<form action="vih.php" method="post">
<p><input type="submit" value="Выйти" name="submit"></p>
<?php }} ?>
