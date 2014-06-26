<?php /* Smarty version Smarty-3.1.14, created on 2014-06-26 07:45:55
         compiled from "C:\wamp\www\zildacalcados\admin6383\themes\default\template\helpers\kpi\row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2062253ac07f3494888-20221855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aff44a9727d9f0717d02af07b9b46c7d3a7a6fa' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\admin6383\\themes\\default\\template\\helpers\\kpi\\row.tpl',
      1 => 1403618637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2062253ac07f3494888-20221855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'kpi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ac07f34ab6e7_33099289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac07f34ab6e7_33099289')) {function content_53ac07f34ab6e7_33099289($_smarty_tpl) {?>
<div class="panel kpi-container">
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['kpi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kpi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kpis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kpi']->key => $_smarty_tpl->tpl_vars['kpi']->value){
$_smarty_tpl->tpl_vars['kpi']->_loop = true;
?>
		<div class="col-sm-6 col-lg-3">
			<?php echo $_smarty_tpl->tpl_vars['kpi']->value;?>

		</div>			
		<?php } ?>
	</div>
</div><?php }} ?>