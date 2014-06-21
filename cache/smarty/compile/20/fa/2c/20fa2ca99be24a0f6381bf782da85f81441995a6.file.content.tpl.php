<?php /* Smarty version Smarty-3.1.14, created on 2014-06-21 08:50:48
         compiled from "C:\wamp\www\loja\admin6383\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1123953a57fa86f9e30-28219299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20fa2ca99be24a0f6381bf782da85f81441995a6' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\admin6383\\themes\\default\\template\\content.tpl',
      1 => 1403354770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1123953a57fa86f9e30-28219299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a57fa870d307_10146906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a57fa870d307_10146906')) {function content_53a57fa870d307_10146906($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>