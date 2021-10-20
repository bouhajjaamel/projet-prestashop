<?php
/* Smarty version 3.1.39, created on 2021-09-30 15:25:51
  from '/opt/lampp/htdocs/prestashop3/admin050va9rys/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155c8ef22f1a5_61782846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1deabf09602c29ae97a39bbafb6d541a8e50b282' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop3/admin050va9rys/themes/default/template/content.tpl',
      1 => 1631177245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6155c8ef22f1a5_61782846 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
