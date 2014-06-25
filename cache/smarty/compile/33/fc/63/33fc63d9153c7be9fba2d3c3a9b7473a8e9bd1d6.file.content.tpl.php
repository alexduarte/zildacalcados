<?php /* Smarty version Smarty-3.1.14, created on 2014-06-24 10:08:50
         compiled from "C:\wamp\www\zildacalcados\admin6383\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:517153a5992645cf62-55118914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '517153a5992645cf62-55118914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a59926470de8_44600595',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a59926470de8_44600595')) {function content_53a59926470de8_44600595($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>