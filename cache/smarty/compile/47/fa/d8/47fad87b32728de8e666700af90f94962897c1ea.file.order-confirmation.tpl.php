<?php /* Smarty version Smarty-3.1.19, created on 2016-11-11 11:04:33
         compiled from "/var/www/vhosts/konim.biz/ps_roval/modules/paypal/views/templates/front/order-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67857598582589a1424d04-28277054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47fad87b32728de8e666700af90f94962897c1ea' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_roval/modules/paypal/views/templates/front/order-confirmation.tpl',
      1 => 1474137660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67857598582589a1424d04-28277054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'use_mobile' => 0,
    'HOOK_ORDER_CONFIRMATION' => 0,
    'HOOK_PAYMENT_RETURN' => 0,
    'order' => 0,
    'price' => 0,
    'reference_order' => 0,
    'is_guest' => 0,
    'link' => 0,
    'order_reference' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582589a14bc929_16859300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582589a14bc929_16859300')) {function content_582589a14bc929_16859300($_smarty_tpl) {?>

<?php if (@constant('_PS_VERSION_')<1.5&&isset($_smarty_tpl->tpl_vars['use_mobile']->value)&&$_smarty_tpl->tpl_vars['use_mobile']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./modules/paypal/views/templates/front/order-confirmation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Order confirmation','mod'=>'paypal'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if (@constant('_PS_VERSION_')<1.6) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
	<h1><?php echo smartyTranslate(array('s'=>'Order confirmation','mod'=>'paypal'),$_smarty_tpl);?>
</h1>

	<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value;?>


	<br />

	<?php if ($_smarty_tpl->tpl_vars['order']->value) {?>
	<p><?php echo smartyTranslate(array('s'=>'Total of the transaction (taxes incl.) :','mod'=>'paypal'),$_smarty_tpl);?>
 <span class="paypal-bold"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span></p>
	<p><?php echo smartyTranslate(array('s'=>'Your order ID is :','mod'=>'paypal'),$_smarty_tpl);?>
 
		<span class="paypal-bold">
		<?php if (@constant('_PS_VERSION_')>=1.5) {?>
			<?php if (isset($_smarty_tpl->tpl_vars['reference_order']->value)) {?>
				<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['reference_order']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

			<?php } else { ?>
				<?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>

			<?php }?>
		<?php } else { ?>
			<?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>

		<?php }?>
		</span>
	</p>
	<p><?php echo smartyTranslate(array('s'=>'Your PayPal transaction ID is :','mod'=>'paypal'),$_smarty_tpl);?>
 <span class="paypal-bold"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['id_transaction'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span></p>
	<?php }?>
	<br />
	
	<?php if ($_smarty_tpl->tpl_vars['is_guest']->value) {?>
		<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('guest-tracking.php',true), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
?id_order=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['order_reference']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Follow my order','mod'=>'paypal'),$_smarty_tpl);?>
" data-ajax="false">
			<?php if (@constant('_PS_VERSION_')<1.6) {?>
			<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
icon/order.gif" alt="<?php echo smartyTranslate(array('s'=>'Follow my order','mod'=>'paypal'),$_smarty_tpl);?>
" class="icon" />
			<?php } else { ?>
			<i class="icon-chevron-left"></i>
			<?php }?>
		</a>
		<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('guest-tracking.php',true), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
?id_order=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['order_reference']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Follow my order','mod'=>'paypal'),$_smarty_tpl);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Follow my order','mod'=>'paypal'),$_smarty_tpl);?>
</a>
	<?php } else { ?>
		<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history.php',true), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Back to orders','mod'=>'paypal'),$_smarty_tpl);?>
" data-ajax="false"><?php if (@constant('_PS_VERSION_')<1.6) {?>
			<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
icon/order.gif" alt="<?php echo smartyTranslate(array('s'=>'Follow my order','mod'=>'paypal'),$_smarty_tpl);?>
" class="icon" />
			<?php } else { ?>
			<i class="icon-chevron-left"></i>
			<?php }?></a>
		<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history.php',true), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Back to orders','mod'=>'paypal'),$_smarty_tpl);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Back to orders','mod'=>'paypal'),$_smarty_tpl);?>
</a>
	<?php }?>
<?php }?>
<?php }} ?>
