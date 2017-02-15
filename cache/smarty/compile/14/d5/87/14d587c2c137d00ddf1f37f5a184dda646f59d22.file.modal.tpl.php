<?php /* Smarty version Smarty-3.1.19, created on 2016-11-12 21:29:50
         compiled from "/var/www/vhosts/konim.biz/ps_roval/adminKO/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35716383858276dae7d1ba4-63101382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14d587c2c137d00ddf1f37f5a184dda646f59d22' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_roval/adminKO/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1474137652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35716383858276dae7d1ba4-63101382',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58276dae7d86e5_00701817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58276dae7d86e5_00701817')) {function content_58276dae7d86e5_00701817($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
