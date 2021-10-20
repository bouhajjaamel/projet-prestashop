<?php
/* Smarty version 3.1.39, created on 2021-09-30 13:51:44
  from '/opt/lampp/htdocs/prestashop3/themes/zFlower/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155b2e04f17d5_67277427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ce2f47a3e74e5b82d8dfec8a1bcffaadc61f6e8' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop3/themes/zFlower/templates/_partials/footer.tpl',
      1 => 1633006177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6155b2e04f17d5_67277427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
  <div class="top-footer clearfix">
    <div class="row">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12871481216155b2e04e57e0_48103985', 'hook_footer_before');
?>

    </div>
  </div>

  <div class="footer-container">
      <div class="row">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7296938696155b2e04e75f2_56861835', 'hook_footer');
?>

      </div>
      <div class="row">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8447618376155b2e04e90d7_47840085', 'hook_footer_after');
?>

      </div>
  </div>
  <div class="bottom-footer">
    <div class="row">
      <div class="col-md-12">
        <p class="text-sm-center">
		  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_828036616155b2e04eba24_39003071', 'copyright_link');
?>

        </p>
      </div>
    </div>
  </div>
</div><?php }
/* {block 'hook_footer_before'} */
class Block_12871481216155b2e04e57e0_48103985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_12871481216155b2e04e57e0_48103985',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_7296938696155b2e04e75f2_56861835 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_7296938696155b2e04e75f2_56861835',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_8447618376155b2e04e90d7_47840085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_8447618376155b2e04e90d7_47840085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_828036616155b2e04eba24_39003071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_828036616155b2e04eba24_39003071',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <a class="_blank" href="http://www.prestashop.com" target="_blank">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

			  </a> - Designed by Zerotheme.com
		  <?php
}
}
/* {/block 'copyright_link'} */
}
