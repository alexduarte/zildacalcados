<?php /* Smarty version Smarty-3.1.14, created on 2014-06-19 19:47:16
         compiled from "C:\wamp\www\zildacalcados\admin8026\themes\default\template\controllers\products\textarea_lang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3070553a35a64116772-55008209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14168634261ce3ce34f3c93288a7c0fd7add591e' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\admin8026\\themes\\default\\template\\controllers\\products\\textarea_lang.tpl',
      1 => 1403185832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3070553a35a64116772-55008209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'input_name' => 0,
    'class' => 0,
    'input_value' => 0,
    'max' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a35a642407b8_12594863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a35a642407b8_12594863')) {function content_53a35a642407b8_12594863($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
	<div class="col-lg-9">
<?php }?>
		<textarea
			id="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
			name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
			class="<?php if (isset($_smarty_tpl->tpl_vars['class']->value)){?><?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php }else{ ?>textarea-autosize<?php }?>"><?php if (isset($_smarty_tpl->tpl_vars['input_value']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']])){?><?php echo smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['input_value']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]);?>
<?php }?></textarea>
    <span class="counter" max="<?php if (isset($_smarty_tpl->tpl_vars['max']->value)){?><?php echo $_smarty_tpl->tpl_vars['max']->value;?>
<?php }else{ ?>none<?php }?>"></span>
<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
	</div>
	<div class="col-lg-2">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
			<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
			<?php } ?>
		</ul>
	</div>
</div>
<?php }?>
<?php } ?>

<script type="text/javascript">
	$(".textarea-autosize").autosize();
</script><?php }} ?>