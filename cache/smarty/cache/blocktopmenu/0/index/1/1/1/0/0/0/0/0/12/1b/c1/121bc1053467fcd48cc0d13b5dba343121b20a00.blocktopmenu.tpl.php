<?php /*%%SmartyHeaderCode:690453a5993f993f66-53405168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '121bc1053467fcd48cc0d13b5dba343121b20a00' => 
    array (
      0 => 'C:\\wamp\\www\\zildacalcados\\themes\\default-bootstrap\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1403618691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '690453a5993f993f66-53405168',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53aab10863e330_12909299',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53aab10863e330_12909299')) {function content_53aab10863e330_12909299($_smarty_tpl) {?>	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title">Categorias</div>
		<ul class="sf-menu clearfix menu-content">
			<li><a href="http://localhost/zildacalcados/3-chinelo" title="CHINELO">CHINELO</a><ul><li><a href="http://localhost/zildacalcados/4-feminino" title="FEMININO">FEMININO</a></li><li><a href="http://localhost/zildacalcados/5-masculino" title="MASCULINO">MASCULINO</a></li><li id="category-thumbnail"></li></ul></li><li><a href="http://localhost/zildacalcados/6-sapatenis" title="SAPATENIS">SAPATENIS</a></li><li><a href="http://localhost/zildacalcados/7-tenis" title="TENIS">TENIS</a></li>
							<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="http://localhost/zildacalcados/search" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="" />
						</p>
					</form>
				</li>
					</ul>
	</div>
	<!--/ Menu -->
<?php }} ?>