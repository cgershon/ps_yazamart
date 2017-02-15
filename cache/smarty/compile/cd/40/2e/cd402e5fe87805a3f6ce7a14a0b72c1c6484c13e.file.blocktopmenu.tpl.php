<?php /* Smarty version Smarty-3.1.19, created on 2016-12-01 19:08:15
         compiled from "/var/www/vhosts/konim.biz/ps_yazmart/themes/default-bootstrap/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1412771994584058ff819e99-10214029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd402e5fe87805a3f6ce7a14a0b72c1c6484c13e' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_yazmart/themes/default-bootstrap/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1480424138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1412771994584058ff819e99-10214029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
    'PS_REWRITING_SETTINGS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_584058ff8cb5c3_09974822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584058ff8cb5c3_09974822')) {function content_584058ff8cb5c3_09974822($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title"><?php echo smartyTranslate(array('s'=>"Menu",'mod'=>"blocktopmenu"),$_smarty_tpl);?>
</div>
		<ul class="sf-menu clearfix menu-content">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
						</p>
					</form>
				</li>
			<?php }?>
       
           <?php if ($_smarty_tpl->tpl_vars['PS_REWRITING_SETTINGS']->value==1) {?> <!-- ADDED YGPC -->
             <li>
        
 				<a href="blog">Blog</a>
           	 </li>
           <?php } else { ?>
			  <li>
        	<a href="http://yazmart.konim.biz/index.php?fc=module&module=ph_simpleblog&controller=list&id_lang=1" title="<?php echo smartyTranslate(array('s'=>'Blog','mod'=>'blockBlog'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Blog','mod'=>'blockBlog'),$_smarty_tpl);?>
</a>

             </li>
           <?php }?>
		</ul>
	</div>
	<!--/ Menu -->
<?php }?><?php }} ?>
