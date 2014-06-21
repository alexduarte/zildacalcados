<?php /* Smarty version Smarty-3.1.14, created on 2014-06-21 09:24:58
         compiled from "C:\wamp\www\loja\modules\themeconfigurator\views\templates\admin\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2537653a587aaa73858-73075824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97ca430e7c3ad4c54247977423ca7d1916b26ef7' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\modules\\themeconfigurator\\views\\templates\\admin\\messages.tpl',
      1 => 1403354793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2537653a587aaa73858-73075824',
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
  'unifunc' => 'content_53a587aaada9f3_84773415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a587aaada9f3_84773415')) {function content_53a587aaada9f3_84773415($_smarty_tpl) {?>

<div id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-response" <?php if (!isset($_smarty_tpl->tpl_vars['text']->value)){?>style="display:none;"<?php }?> class="message alert alert-<?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value=='error'){?>danger<?php }else{ ?>success<?php }?>">
	<div><?php if (isset($_smarty_tpl->tpl_vars['text']->value)){?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></div>
</div><?php }} ?>