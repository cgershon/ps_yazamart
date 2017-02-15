<?php /* Smarty version Smarty-3.1.19, created on 2016-11-16 13:35:23
         compiled from "/var/www/vhosts/konim.biz/ps_pazart/adminKO/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1212927929582c447b4ffa57-38184804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5415c1d450e508e253c725043f61ab6787f4d24c' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_pazart/adminKO/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1479200162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1212927929582c447b4ffa57-38184804',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582c447b502d13_79159646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c447b502d13_79159646')) {function content_582c447b502d13_79159646($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
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
