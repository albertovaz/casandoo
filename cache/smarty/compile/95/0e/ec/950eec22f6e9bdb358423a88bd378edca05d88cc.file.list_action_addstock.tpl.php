<?php /* Smarty version Smarty-3.1.19, created on 2016-08-11 21:23:17
         compiled from "C:\xampp\htdocs\cecyte12\admin\themes\default\template\helpers\list\list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1984857acd0a56d6ab9-57427195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '950eec22f6e9bdb358423a88bd378edca05d88cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cecyte12\\admin\\themes\\default\\template\\helpers\\list\\list_action_addstock.tpl',
      1 => 1470942931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1984857acd0a56d6ab9-57427195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57acd0a56de7c1_47745234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57acd0a56de7c1_47745234')) {function content_57acd0a56de7c1_47745234($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-circle-arrow-up"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
