<?php /* Smarty version Smarty-3.1.14, created on 2014-06-19 19:33:11
         compiled from "C:\wamp\www\zildacalcados\admin8026\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2592253a35717ea1924-96509886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '523ee58e0780854d838fbe944bbe3ff5afc484ee' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\admin8026\\themes\\default\\template\\content.tpl',
      1 => 1403185831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2592253a35717ea1924-96509886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a35717edd1e1_44526246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a35717edd1e1_44526246')) {function content_53a35717edd1e1_44526246($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>