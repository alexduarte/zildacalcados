<?php /* Smarty version Smarty-3.1.14, created on 2014-06-21 08:53:47
         compiled from "C:\wamp\www\loja\themes\default-bootstrap\modules\blockwishlist\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2540353a5805b828f35-98684723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca5387d6d2229ee693467874244ec8855be1e506' => 
    array (
      0 => 'C:\\wamp\\www\\loja\\themes\\default-bootstrap\\modules\\blockwishlist\\my-account.tpl',
      1 => 1403354794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2540353a5805b828f35-98684723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a5805b86d816_77336418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a5805b86d816_77336418')) {function content_53a5805b86d816_77336418($_smarty_tpl) {?>

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