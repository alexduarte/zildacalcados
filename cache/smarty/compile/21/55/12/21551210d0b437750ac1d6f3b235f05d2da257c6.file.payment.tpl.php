<?php /* Smarty version Smarty-3.1.14, created on 2014-06-21 08:55:30
         compiled from "C:\wamp\www\loja\modules\pagseguro\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1754353a580c250aeb3-36888622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21551210d0b437750ac1d6f3b235f05d2da257c6' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\modules\\pagseguro\\views\\templates\\hook\\payment.tpl',
      1 => 1403354790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1754353a580c250aeb3-36888622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a580c2524d75_40421076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a580c2524d75_40421076')) {function content_53a580c2524d75_40421076($_smarty_tpl) {?><p class="payment_module">
	<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
index.php?fc=module&module=pagseguro&controller=payment" title="<?php echo smartyTranslate(array('s'=>'Pague com PagSeguro e parcele em até 18 vezes','mod'=>'pagseguro'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo smartyTranslate(array('s'=>'Pague com PagSeguro e parcele em até 18 vezes','mod'=>'pagseguro'),$_smarty_tpl);?>
" />
		<?php echo smartyTranslate(array('s'=>'Pague com PagSeguro e parcele em até 18 vezes','mod'=>'pagseguro'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>