<?php /* Smarty version Smarty-3.1.14, created on 2014-06-20 11:41:20
         compiled from "C:\wamp\www\zildacalcados\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2109653a43a0015f112-66180635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5b2a9387c6afa8a01f389529787d5f879595f03' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1403185848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2109653a43a0015f112-66180635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a43a0017b4e3_10286137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a43a0017b4e3_10286137')) {function content_53a43a0017b4e3_10286137($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!=''){?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>