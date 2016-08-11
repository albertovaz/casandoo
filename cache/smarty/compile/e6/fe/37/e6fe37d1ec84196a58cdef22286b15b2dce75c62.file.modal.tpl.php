<?php /* Smarty version Smarty-3.1.19, created on 2016-08-11 14:50:48
         compiled from "C:\xampp\htdocs\cecyte12\admin12\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1762057acd7185d3213-51057388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6fe37d1ec84196a58cdef22286b15b2dce75c62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cecyte12\\admin12\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1470942931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1762057acd7185d3213-51057388',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57acd7185d7095_76420219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57acd7185d7095_76420219')) {function content_57acd7185d7095_76420219($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
