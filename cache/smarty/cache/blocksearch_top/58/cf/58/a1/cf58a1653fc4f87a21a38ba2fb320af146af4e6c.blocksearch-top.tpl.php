<?php /*%%SmartyHeaderCode:272953ac260b281591-53591765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf58a1653fc4f87a21a38ba2fb320af146af4e6c' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1403618690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272953ac260b281591-53591765',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ac36100115b6_37828008',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ac36100115b6_37828008')) {function content_53ac36100115b6_37828008($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="http://localhost/zildacalcados/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Busca" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Busca</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>