<?php /* Smarty version Smarty-3.1.14, created on 2014-06-19 19:47:07
         compiled from "C:\wamp\www\zildacalcados\admin8026\themes\default\template\helpers\tree\tree_toolbar_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2716353a35a5b6f3ab5-74726098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12a935665aad3928ce15dcbfcc2cd534f5c9023d' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\admin8026\\themes\\default\\template\\helpers\\tree\\tree_toolbar_link.tpl',
      1 => 1403185832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2716353a35a5b6f3ab5-74726098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'action' => 0,
    'id' => 0,
    'icon_class' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a35a5b76aba1_10727664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a35a5b76aba1_10727664')) {function content_53a35a5b76aba1_10727664($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)){?> onclick="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['id']->value)){?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?> class="btn btn-default">
	<?php if (isset($_smarty_tpl->tpl_vars['icon_class']->value)){?><i class="<?php echo $_smarty_tpl->tpl_vars['icon_class']->value;?>
"></i><?php }?>
	<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl);?>

</a><?php }} ?>