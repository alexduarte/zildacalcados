<?php /* Smarty version Smarty-3.1.14, created on 2014-06-20 10:39:38
         compiled from "C:\wamp\www\zildacalcados\modules\themeconfigurator\views\templates\admin\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2685353a42b8a465270-58534541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09dd71b35df37b979131da1583842061eec59b4a' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\modules\\themeconfigurator\\views\\templates\\admin\\messages.tpl',
      1 => 1403185856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2685353a42b8a465270-58534541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'text' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a42b8a50ac14_56196478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a42b8a50ac14_56196478')) {function content_53a42b8a50ac14_56196478($_smarty_tpl) {?>

<div id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-response" <?php if (!isset($_smarty_tpl->tpl_vars['text']->value)){?>style="display:none;"<?php }?> class="message alert alert-<?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value=='error'){?>danger<?php }else{ ?>success<?php }?>">
	<div><?php if (isset($_smarty_tpl->tpl_vars['text']->value)){?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></div>
</div><?php }} ?>