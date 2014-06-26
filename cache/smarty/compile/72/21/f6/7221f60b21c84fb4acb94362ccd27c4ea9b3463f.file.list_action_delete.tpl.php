<?php /* Smarty version Smarty-3.1.14, created on 2014-06-26 10:58:43
         compiled from "C:\wamp\www\zildacalcados\admin6383\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1961053ac3523687a72-55094314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7221f60b21c84fb4acb94362ccd27c4ea9b3463f' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\admin6383\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1403618637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1961053ac3523687a72-55094314',
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
  'unifunc' => 'content_53ac3523761b48_15660031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac3523761b48_15660031')) {function content_53ac3523761b48_15660031($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="delete">
	<i class="icon-trash"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>