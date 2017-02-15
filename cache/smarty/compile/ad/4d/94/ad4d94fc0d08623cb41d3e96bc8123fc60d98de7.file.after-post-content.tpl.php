<?php /* Smarty version Smarty-3.1.19, created on 2016-11-27 14:11:45
         compiled from "/var/www/vhosts/konim.biz/ps_yazmart/modules/ph_simpleblog/views/templates/hook/after-post-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:542019085583acd818f6989-14669555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad4d94fc0d08623cb41d3e96bc8123fc60d98de7' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_yazmart/modules/ph_simpleblog/views/templates/hook/after-post-content.tpl',
      1 => 1480236481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '542019085583acd818f6989-14669555',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583acd8192cfe5_73586305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583acd8192cfe5_73586305')) {function content_583acd8192cfe5_73586305($_smarty_tpl) {?><?php if (Configuration::get('PH_BLOG_DISPLAY_SHARER')) {?>
<div class="post-block simpleblog-socialshare">
	<h3 class="block-title"><?php echo smartyTranslate(array('s'=>'Share this post','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</h3>

	<div class="simpleblog-socialshare-icons">
		<button data-type="twitter" type="button" class="btn btn-default btn-twitter">
			<i class="fa fa-twitter"></i> <?php echo smartyTranslate(array('s'=>"Tweet",'mod'=>'ph_simpleblog'),$_smarty_tpl);?>

		</button>
		<button data-type="facebook" type="button" class="btn btn-default btn-facebook">
			<i class="fa fa-facebook"></i> <?php echo smartyTranslate(array('s'=>"Share",'mod'=>'ph_simpleblog'),$_smarty_tpl);?>

		</button>
		<button data-type="google-plus" type="button" class="btn btn-default btn-google-plus">
			<i class="fa fa-google-plus"></i> <?php echo smartyTranslate(array('s'=>"Google+",'mod'=>'ph_simpleblog'),$_smarty_tpl);?>

		</button>
		<button data-type="pinterest" type="button" class="btn btn-default btn-pinterest">
			<i class="fa fa-pinterest"></i> <?php echo smartyTranslate(array('s'=>"Pinterest",'mod'=>'ph_simpleblog'),$_smarty_tpl);?>

		</button>
	</div><!-- simpleblog-socialshare-icons. -->
</div><!-- .simpleblog-socialshare -->
<?php }?><?php }} ?>
