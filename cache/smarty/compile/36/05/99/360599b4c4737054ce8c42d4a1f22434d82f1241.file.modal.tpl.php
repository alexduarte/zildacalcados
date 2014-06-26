<?php /* Smarty version Smarty-3.1.14, created on 2014-06-26 07:45:31
         compiled from "C:\wamp\www\zildacalcados\admin6383\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2091953ac07dbca5114-74335931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '360599b4c4737054ce8c42d4a1f22434d82f1241' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\admin6383\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1403618637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2091953ac07dbca5114-74335931',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ac07dbcb1c29_95848146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac07dbcb1c29_95848146')) {function content_53ac07dbcb1c29_95848146($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
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