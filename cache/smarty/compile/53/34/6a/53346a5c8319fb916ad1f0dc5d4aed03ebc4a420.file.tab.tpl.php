<?php /* Smarty version Smarty-3.1.14, created on 2014-06-20 11:41:20
         compiled from "C:\wamp\www\zildacalcados\themes\default-bootstrap\modules\homefeatured\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2947853a43a002aea94-96663739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53346a5c8319fb916ad1f0dc5d4aed03ebc4a420' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\themes\\default-bootstrap\\modules\\homefeatured\\tab.tpl',
      1 => 1403185857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2947853a43a002aea94-96663739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a43a00362332_27209189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a43a00362332_27209189')) {function content_53a43a00362332_27209189($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp\\www\\zildacalcados\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>