<?php /* Smarty version Smarty-3.1.19, created on 2016-12-01 19:08:17
         compiled from "/var/www/vhosts/konim.biz/ps_yazmart/modules/ph_simpleblog/views/templates/front/types/video/thumbnail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130196019358405901010a23-19541013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eae8cc266883fef25775c381351796aad4672997' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_yazmart/modules/ph_simpleblog/views/templates/front/types/video/thumbnail.tpl',
      1 => 1480236481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130196019358405901010a23-19541013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'blogLayout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_584059010571b6_87240855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584059010571b6_87240855')) {function content_584059010571b6_87240855($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['post']->value['banner'])&&Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL')) {?>
	<div class="post-thumbnail" itemscope itemtype="http://schema.org/ImageObject">
		<a href="#simpleblog-post-<?php echo intval($_smarty_tpl->tpl_vars['post']->value['id_simpleblog_post']);?>
-video" title="<?php echo smartyTranslate(array('s'=>'Permalink link to','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="contentUrl">
			<?php if ($_smarty_tpl->tpl_vars['blogLayout']->value=='full') {?>
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['banner_wide'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive" itemprop="thumbnailUrl" />
			<?php } else { ?>
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['banner_thumb'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive" itemprop="thumbnailUrl" />
			<?php }?>
		</a>
	</div>
<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['post']->value['video_code'];?>

<?php }?>

<div itemprop="video" id="simpleblog-post-<?php echo intval($_smarty_tpl->tpl_vars['post']->value['id_simpleblog_post']);?>
-video" style="display: none;">
	<?php echo $_smarty_tpl->tpl_vars['post']->value['video_code'];?>

</div><?php }} ?>
