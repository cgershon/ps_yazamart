<?php /* Smarty version Smarty-3.1.19, created on 2016-11-11 10:55:49
         compiled from "/var/www/vhosts/konim.biz/ps_roval/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35363055258258795bb12d9-23306521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0904c02a4713ca2a9673f1c9a80a410bdb472b5c' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_roval/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment.tpl',
      1 => 1474137661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35363055258258795bb12d9-23306521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58258795bd42b3_25448607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58258795bd42b3_25448607')) {function content_58258795bd42b3_25448607($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
		<p class="payment_module">
			<a class="bankwire" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>
</span>
			</a>
		</p>
	</div>
</div>
<?php }} ?>
