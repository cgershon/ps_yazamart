<?php /* Smarty version Smarty-3.1.19, created on 2016-11-27 14:11:45
         compiled from "/var/www/vhosts/konim.biz/ps_yazmart/modules/ph_simpleblog/views/templates/front/comments/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:527106866583acd81957358-48297964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6803b5601b4547ec043c87f356df8b16c0f90058' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_yazmart/modules/ph_simpleblog/views/templates/front/comments/layout.tpl',
      1 => 1480236481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '527106866583acd81957358-48297964',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'comments' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583acd819caaf9_00732580',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583acd819caaf9_00732580')) {function content_583acd819caaf9_00732580($_smarty_tpl) {?>
<div id="simpleblog-post-comments" class="post-block">
	<h3 class="block-title"><?php echo smartyTranslate(array('s'=>'Comments','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->comments, ENT_QUOTES, 'UTF-8', true);?>
)</h3>

	<div class="post-comments-list">
		<?php if ($_smarty_tpl->tpl_vars['post']->value->comments) {?>
			<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
			<div class="post-comment post-comment-<?php echo intval($_smarty_tpl->tpl_vars['comment']->value['id']);?>
">
				<div class="post-comment-meta">
					<i class="fa fa-pencil"></i>
					<?php echo smartyTranslate(array('s'=>'Posted by','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 <span class="post-comment-author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span> <?php echo smartyTranslate(array('s'=>'on','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 <span class="post-comment-date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['date_add'], ENT_QUOTES, 'UTF-8', true);?>
</span>
				</div><!-- .post-comment-meta -->
				<div class="post-comment-content">
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['comment'], ENT_QUOTES, 'UTF-8', true);?>

				</div><!-- .post-comment-content -->
			</div><!-- .post-comment -->
			<?php } ?>
		<?php } else { ?>
			<div class="warning alert alert-warning">
				<?php echo smartyTranslate(array('s'=>'No comments at this moment','mod'=>'ph_simpleblog'),$_smarty_tpl);?>

			</div><!-- .warning -->
		<?php }?>
	</div><!-- .post-comments-list -->

	
	<?php echo $_smarty_tpl->getSubTemplate ("./form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><!-- #post-comments --><?php }} ?>
