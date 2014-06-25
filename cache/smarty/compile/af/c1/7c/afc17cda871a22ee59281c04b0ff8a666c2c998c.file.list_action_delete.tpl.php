<?php /* Smarty version Smarty-3.1.14, created on 2014-06-21 08:50:56
         compiled from "C:\wamp\www\loja\admin6383\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92153a57fb0937c20-32396096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afc17cda871a22ee59281c04b0ff8a666c2c998c' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\admin6383\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1403354772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92153a57fb0937c20-32396096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a57fb0967ee1_48504013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a57fb0967ee1_48504013')) {function content_53a57fb0967ee1_48504013($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="delete">
	<i class="icon-trash"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>