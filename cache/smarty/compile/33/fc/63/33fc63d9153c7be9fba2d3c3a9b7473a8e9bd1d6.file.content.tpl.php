<?php /* Smarty version Smarty-3.1.14, created on 2014-06-26 07:45:31
         compiled from "C:\wamp\www\zildacalcados\admin6383\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2465753ac07db840fe8-14764504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33fc63d9153c7be9fba2d3c3a9b7473a8e9bd1d6' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\admin6383\\themes\\default\\template\\content.tpl',
      1 => 1403618636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2465753ac07db840fe8-14764504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ac07db8a7a92_58142266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac07db8a7a92_58142266')) {function content_53ac07db8a7a92_58142266($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>