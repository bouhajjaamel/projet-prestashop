<?php
/* Smarty version 3.1.39, created on 2021-09-30 13:51:44
  from '/opt/lampp/htdocs/prestashop3/themes/zFlower/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155b2e001f269_99407857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '356e1a0cea886168be91f33ff4f9755d0c1ac84c' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop3/themes/zFlower/templates/index.tpl',
      1 => 1633006177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6155b2e001f269_99407857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20586782426155b2e0017187_15705726', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_439234846155b2e0018349_87810775 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_12387893196155b2e001ae08_96745536 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_16427208506155b2e0019b42_91277675 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12387893196155b2e001ae08_96745536', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20586782426155b2e0017187_15705726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_20586782426155b2e0017187_15705726',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_439234846155b2e0018349_87810775',
  ),
  'page_content' => 
  array (
    0 => 'Block_16427208506155b2e0019b42_91277675',
  ),
  'hook_home' => 
  array (
    0 => 'Block_12387893196155b2e001ae08_96745536',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_439234846155b2e0018349_87810775', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16427208506155b2e0019b42_91277675', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
