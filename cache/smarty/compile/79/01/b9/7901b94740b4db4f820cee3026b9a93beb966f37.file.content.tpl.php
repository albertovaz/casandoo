<?php /* Smarty version Smarty-3.1.19, created on 2016-08-11 14:51:16
         compiled from "C:\xampp\htdocs\cecyte12\admin12\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282057acd73416a365-56082185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7901b94740b4db4f820cee3026b9a93beb966f37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cecyte12\\admin12\\themes\\default\\template\\content.tpl',
      1 => 1470942923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282057acd73416a365-56082185',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57acd734172075_32517360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57acd734172075_32517360')) {function content_57acd734172075_32517360($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
