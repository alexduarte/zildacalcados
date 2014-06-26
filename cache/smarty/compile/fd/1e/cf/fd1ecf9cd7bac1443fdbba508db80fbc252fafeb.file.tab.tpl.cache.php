<?php /* Smarty version Smarty-3.1.14, created on 2014-06-26 09:54:21
         compiled from "C:\wamp\www\zildacalcados\themes\default-bootstrap\modules\blockbestsellers\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2541653ac260db69043-57982047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd1ecf9cd7bac1443fdbba508db80fbc252fafeb' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\themes\\default-bootstrap\\modules\\blockbestsellers\\tab.tpl',
      1 => 1403618690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2541653ac260db69043-57982047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ac260dc19347_37920425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac260dc19347_37920425')) {function content_53ac260dc19347_37920425($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp\\www\\zildacalcados\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#blockbestsellers" class="blockbestsellers"><?php echo smartyTranslate(array('s'=>'Best Sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a></li><?php }} ?>