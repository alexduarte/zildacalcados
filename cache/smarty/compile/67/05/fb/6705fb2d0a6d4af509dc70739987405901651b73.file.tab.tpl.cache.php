<?php /* Smarty version Smarty-3.1.14, created on 2014-06-21 08:52:05
         compiled from "C:\wamp\www\loja\themes\default-bootstrap\modules\blockbestsellers\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128953a57ff5ef32d7-65694685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6705fb2d0a6d4af509dc70739987405901651b73' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\themes\\default-bootstrap\\modules\\blockbestsellers\\tab.tpl',
      1 => 1403354793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128953a57ff5ef32d7-65694685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a57ff5f16152_86817838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a57ff5f16152_86817838')) {function content_53a57ff5f16152_86817838($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp\\www\\loja\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#blockbestsellers" class="blockbestsellers"><?php echo smartyTranslate(array('s'=>'Best Sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a></li><?php }} ?>