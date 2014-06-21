<?php /* Smarty version Smarty-3.1.14, created on 2014-06-21 08:52:05
         compiled from "C:\wamp\www\loja\themes\default-bootstrap\modules\homefeatured\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2612853a57ff5dbc813-00246036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69082f7323241c143ba3fffbfd6ce3f400128565' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\themes\\default-bootstrap\\modules\\homefeatured\\tab.tpl',
      1 => 1403354794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2612853a57ff5dbc813-00246036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a57ff5de2c21_51052455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a57ff5de2c21_51052455')) {function content_53a57ff5de2c21_51052455($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp\\www\\loja\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>