<?php /* Smarty version Smarty-3.1.14, created on 2014-06-26 07:48:19
         compiled from "C:\wamp\www\zildacalcados\admin6383\themes\default\template\helpers\list\list_action_enable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2732353ac0883b5f364-66747143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0553a3c31fd40644d737c8b081636e51aa4b2ff3' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\admin6383\\themes\\default\\template\\helpers\\list\\list_action_enable.tpl',
      1 => 1403618637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2732353ac0883b5f364-66747143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajax' => 0,
    'enabled' => 0,
    'url_enable' => 0,
    'confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ac0883bb08b2_93942869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac0883bb08b2_93942869')) {function content_53ac0883bb08b2_93942869($_smarty_tpl) {?>
<a class="list-action-enable <?php if (isset($_smarty_tpl->tpl_vars['ajax']->value)&&$_smarty_tpl->tpl_vars['ajax']->value){?>ajax_table_link<?php }?> <?php if ($_smarty_tpl->tpl_vars['enabled']->value){?>action-enabled<?php }else{ ?>action-disabled<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['url_enable']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');"<?php }?> title="<?php if ($_smarty_tpl->tpl_vars['enabled']->value){?><?php echo smartyTranslate(array('s'=>'Enabled'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Disabled'),$_smarty_tpl);?>
<?php }?>">
	<i class="icon-check<?php if (!$_smarty_tpl->tpl_vars['enabled']->value){?> hidden<?php }?>"></i>
	<i class="icon-remove<?php if ($_smarty_tpl->tpl_vars['enabled']->value){?> hidden<?php }?>"></i>
</a>
<?php }} ?>