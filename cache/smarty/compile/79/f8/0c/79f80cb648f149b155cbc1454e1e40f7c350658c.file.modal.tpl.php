<?php /* Smarty version Smarty-3.1.14, created on 2014-06-21 08:50:38
         compiled from "C:\wamp\www\loja\admin6383\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1751853a57f9e711cc8-49368643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79f80cb648f149b155cbc1454e1e40f7c350658c' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\admin6383\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1403354772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1751853a57f9e711cc8-49368643',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a57f9e71a312_57232467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a57f9e71a312_57232467')) {function content_53a57f9e71a312_57232467($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>