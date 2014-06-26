<?php /* Smarty version Smarty-3.1.14, created on 2014-06-26 10:50:11
         compiled from "C:\wamp\www\zildacalcados\pdf\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:624153ac33238cbcd7-00267252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c2e0b0dd25154f9e0451203a4cfbf5cfd6e8d25' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\pdf\\header.tpl',
      1 => 1403695507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '624153ac33238cbcd7-00267252',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo_path' => 0,
    'shop_name' => 0,
    'date' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ac33239d1a72_59984116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac33239d1a72_59984116')) {function content_53ac33239d1a72_59984116($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\zildacalcados\\tools\\smarty\\plugins\\modifier.date_format.php';
?><<<<<<< HEAD
<br /><br />
<table style="width: 100%">
<tr>
	<td style="width: 50%">
		<?php if ($_smarty_tpl->tpl_vars['logo_path']->value){?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['logo_path']->value;?>
" style="height:55px;" />
		<?php }?>
	</td>
	<td style="width: 50%; text-align: right;">
		<table style="width: 100%">
			<tr>
				<td style="font-weight: bold; font-size: 14pt; color: #444; width: 100%"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
			</tr>
			<tr>
				<td style="font-size: 14pt; color: #9E9F9E"><?php echo mb_convert_encoding(htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%d-%m-%Y "), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
			</tr>
			<tr>
				<td style="font-size: 14pt; color: #9E9F9E"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
			</tr>
		</table>
	</td>
</tr>
=======
<br /><br />
<table style="width: 100%">
<tr>
	<td style="width: 50%">
		<?php if ($_smarty_tpl->tpl_vars['logo_path']->value){?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['logo_path']->value;?>
" style="height:55px;" />
		<?php }?>
	</td>
	<td style="width: 50%; text-align: right;">
		<table style="width: 100%">
			<tr>
				<td style="font-weight: bold; font-size: 14pt; color: #444; width: 100%"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
			</tr>
			<tr>
				<td style="font-size: 14pt; color: #9E9F9E"><?php echo mb_convert_encoding(htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%d-%m-%Y "), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
			</tr>
			<tr>
				<td style="font-size: 14pt; color: #9E9F9E"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
			</tr>
		</table>
	</td>
</tr>
>>>>>>> f2715e34e995550843b564d7cb90b4c1408c2c4a
</table><?php }} ?>