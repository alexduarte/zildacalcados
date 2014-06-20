<?php /* Smarty version Smarty-3.1.14, created on 2014-06-19 19:34:41
         compiled from "C:\wamp\www\zildacalcados\themes\default-bootstrap\modules\homefeatured\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1214453a3577185f750-81310458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1214453a3577185f750-81310458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a3577188bfd8_09996845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a3577188bfd8_09996845')) {function content_53a3577188bfd8_09996845($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp\\www\\zildacalcados\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>