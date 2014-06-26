<?php /* Smarty version Smarty-3.1.14, created on 2014-06-26 10:36:29
         compiled from "C:\wamp\www\zildacalcados\themes\default-bootstrap\modules\blockwishlist\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:559453ac2fed826d15-22675100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e9d64a7de380cf6638d1a30ad6886ba4bf519f5' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\themes\\default-bootstrap\\modules\\blockwishlist\\my-account.tpl',
      1 => 1403618691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '559453ac2fed826d15-22675100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ac2fed8ae563_64315261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac2fed8ae563_64315261')) {function content_53ac2fed8ae563_64315261($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true));?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>