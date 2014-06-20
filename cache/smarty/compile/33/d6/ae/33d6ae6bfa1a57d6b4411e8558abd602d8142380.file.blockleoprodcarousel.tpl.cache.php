<?php /* Smarty version Smarty-3.1.14, created on 2014-06-19 19:34:41
         compiled from "C:\wamp\www\zildacalcados\modules\blockleoprodcarousel\blockleoprodcarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3254653a35771481754-07470410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33d6ae6bfa1a57d6b4411e8558abd602d8142380' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\modules\\blockleoprodcarousel\\blockleoprodcarousel.tpl',
      1 => 1390395324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3254653a35771481754-07470410',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a357714eb561_36832251',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a357714eb561_36832251')) {function content_53a357714eb561_36832251($_smarty_tpl) {?>

<!-- MODULE Block specials -->
<div id="leoprodcarousel" class="block products_block exclusive blockleoprodcarousel">
	<h3><?php echo smartyTranslate(array('s'=>'Latest Products','mod'=>'blockleoprodcarousel'),$_smarty_tpl);?>
</h3>
	<div class="block_content">	
		<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)){?>
			<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable("leoproductcarousel", null, 0);?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['product_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 
		<?php }?>
	</div>
</div>
<!-- /MODULE Block specials -->
<script>
$(document).ready(function() {
    $('.blockleoprodcarousel').each(function(){
        $(this).carousel({
            pause: true,
            interval: false
        });
    });
	 
});
</script>
 <?php }} ?>