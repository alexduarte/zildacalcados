<?php /* Smarty version Smarty-3.1.14, created on 2014-06-19 19:33:12
         compiled from "C:\wamp\www\zildacalcados\admin8026\themes\default\template\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1835153a35718d24889-61989882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c132b4e01bc293a252b9bd5ad7a0ae28c4e8c1e6' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\admin8026\\themes\\default\\template\\footer.tpl',
      1 => 1403185832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1835153a35718d24889-61989882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_footer' => 0,
    'timer_start' => 0,
    'iso_is_fr' => 0,
    'php_errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53a35718e13a27_05073112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a35718e13a27_05073112')) {function content_53a35718e13a27_05073112($_smarty_tpl) {?>

	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['display_footer']->value){?>
<div id="footer" class="bootstrap hide">
	<div class="col-sm-2 hidden-xs">
		<a href="http://www.atsinformatica.com.br/" target="_blank">Resulth E-commerce</a>
		-
		<span id="footer-load-time"><i class="icon-time" title="<?php echo smartyTranslate(array('s'=>'Load time: '),$_smarty_tpl);?>
"></i> <?php echo number_format(microtime(true)-$_smarty_tpl->tpl_vars['timer_start']->value,3,'.','');?>
s</span>
	</div>
	<div class="col-sm-2 hidden-xs social-networks">
		<a class="link-social link-twitter" href="https://twitter.com/AtsInformatica" target="_blank" title="Twitter">
			<i class="icon-twitter"></i>
		</a>
		<a class="link-social link-facebook" href="https://www.facebook.com/ATSInformatica" target="_blank" title="Facebook">
			<i class="icon-facebook"></i>
		</a>
	<!--	<a class="link-social link-github" href="https://github.com/PrestaShop/PrestaShop/" target="_blank" title="Github">
			<i class="icon-github"></i>
		</a>-->
		<a class="link-social link-google" href="https://plus.google.com/+AtsinformaticaBr/" target="_blank" title="Google">
			<i class="icon-google-plus"></i>
		</a>
	</div>	

	<div class="col-sm-4 footer-contact">  
		<p>
			<!--<a href="http://www.prestashop.com/en/contact_us?utm_source=backoffice_footer" target="_blank" class="footer_link">
				<i class="icon-envelope"></i>
				<?php echo smartyTranslate(array('s'=>'Contact'),$_smarty_tpl);?>

			</a>-->
			<!--<a href="http://forge.prestashop.com/?utm_source=backoffice_footer" target="_blank" class="footer_link">
				<i class="icon-bug"></i>
				<?php echo smartyTranslate(array('s'=>'Bug Tracker'),$_smarty_tpl);?>

			</a>
			/&nbsp;
			<a href="http://www.prestashop.com/forums/?utm_source=backoffice_footer" target="_blank" class="footer_link">
				<i class="icon-comments"></i>
				<?php echo smartyTranslate(array('s'=>'Forum'),$_smarty_tpl);?>

			</a>
			/&nbsp;
			<a href="http://addons.prestashop.com/?utm_source=backoffice_footer" target="_blank" class="footer_link">
				<i class="icon-puzzle-piece"></i>
				<?php echo smartyTranslate(array('s'=>'Addons'),$_smarty_tpl);?>

			</a>
			/&nbsp;
			<a href="http://www.prestashop.com/en/training-prestashop?utm_source=backoffice_footer" target="_blank" class="footer_link">
				<i class="icon-book"></i>
				<?php echo smartyTranslate(array('s'=>'Training'),$_smarty_tpl);?>

			</a>-->
		</p>
		<?php if ($_smarty_tpl->tpl_vars['iso_is_fr']->value){?>
		<p>Questions • Renseignements • Formations : 
			<strong>+33 (0)1.40.18.30.04</strong>
		<p>
		<?php }?>
	</div>
	<div class="col-sm-4">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBackOfficeFooter"),$_smarty_tpl);?>

	</div>
	<div id="go-top" class="hide"><i class="icon-arrow-up"></i></div>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['php_errors']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ("error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
</body>
</html>
<?php }} ?>