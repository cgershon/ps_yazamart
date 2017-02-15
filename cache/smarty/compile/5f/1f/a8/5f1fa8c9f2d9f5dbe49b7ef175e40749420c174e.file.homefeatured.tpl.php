<?php /* Smarty version Smarty-3.1.19, created on 2016-11-15 02:41:00
         compiled from "/var/www/vhosts/konim.biz/ps_roval/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1953430642582a599c3ef5a8-43913523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f1fa8c9f2d9f5dbe49b7ef175e40749420c174e' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_roval/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl',
      1 => 1474137661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1953430642582a599c3ef5a8-43913523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582a599c457782_53407196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582a599c457782_53407196')) {function content_582a599c457782_53407196($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
