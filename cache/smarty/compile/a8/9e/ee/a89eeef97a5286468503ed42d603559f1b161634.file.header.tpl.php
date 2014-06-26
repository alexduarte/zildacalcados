<?php /* Smarty version Smarty-3.1.14, created on 2014-06-26 09:54:19
         compiled from "C:\wamp\www\zildacalcados\themes\default-bootstrap\modules\homeslider\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3230453ac260b1243c8-16857170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a89eeef97a5286468503ed42d603559f1b161634' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\themes\\default-bootstrap\\modules\\homeslider\\header.tpl',
      1 => 1403618691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3230453ac260b1243c8-16857170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ac260b16fa60_71163294',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac260b16fa60_71163294')) {function content_53ac260b16fa60_71163294($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)){?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_loop'=>$_smarty_tpl->tpl_vars['homeslider']->value['loop']),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_width'=>$_smarty_tpl->tpl_vars['homeslider']->value['width']),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_speed'=>$_smarty_tpl->tpl_vars['homeslider']->value['speed']),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_pause'=>$_smarty_tpl->tpl_vars['homeslider']->value['pause']),$_smarty_tpl);?>

<?php }?><?php }} ?>