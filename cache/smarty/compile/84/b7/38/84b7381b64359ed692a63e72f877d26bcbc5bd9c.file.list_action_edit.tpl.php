<?php /* Smarty version Smarty-3.1.14, created on 2014-06-19 19:40:49
         compiled from "C:\wamp\www\zildacalcados\admin8026\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1446853a358e1678181-96850330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84b7381b64359ed692a63e72f877d26bcbc5bd9c' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\admin8026\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1403185832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1446853a358e1678181-96850330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a358e16e92e1_69021437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a358e16e92e1_69021437')) {function content_53a358e16e92e1_69021437($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>