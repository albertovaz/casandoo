<?php /* Smarty version Smarty-3.1.19, created on 2016-08-11 21:23:12
         compiled from "C:\xampp\htdocs\cecyte12\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3121557acd0a02f9378-71978454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc0260e06c17e1a61061a5b2f93fd4cb68e0f4d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cecyte12\\admin\\themes\\default\\template\\content.tpl',
      1 => 1470942923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3121557acd0a02f9378-71978454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57acd0a0324307_48635382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57acd0a0324307_48635382')) {function content_57acd0a0324307_48635382($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
