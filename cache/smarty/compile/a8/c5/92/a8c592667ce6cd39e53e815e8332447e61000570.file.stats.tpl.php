<?php /* Smarty version Smarty-3.1.19, created on 2016-11-11 11:51:34
         compiled from "/var/www/vhosts/konim.biz/ps_roval/adminKO/themes/default/template/controllers/stats/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1633921745582594a6a831f9-56931144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8c592667ce6cd39e53e815e8332447e61000570' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_roval/adminKO/themes/default/template/controllers/stats/stats.tpl',
      1 => 1474137652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1633921745582594a6a831f9-56931144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582594a6a93319_59091840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582594a6a93319_59091840')) {function content_582594a6a93319_59091840($_smarty_tpl) {?>

		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'Module not found'),$_smarty_tpl);?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.'),$_smarty_tpl);?>
</h3>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>
