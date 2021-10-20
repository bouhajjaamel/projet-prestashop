<?php
/* Smarty version 3.1.39, created on 2021-10-01 10:01:15
  from '/opt/lampp/htdocs/prestashop3/themes/zFlower/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6156ce5b0c5ee5_59483024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '994b3d1c2ad9acffc2e72266281fc81166c0fd52' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop3/themes/zFlower/templates/page.tpl',
      1 => 1633006177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6156ce5b0c5ee5_59483024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5577914166156ce5b0879b1_76755555', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_456984376156ce5b08ba10_08459871 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_17254399356156ce5b089850_94097292 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_456984376156ce5b08ba10_08459871', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_17308203236156ce5b0bc4c2_15793845 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_2494269716156ce5b0be665_25871911 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1390516076156ce5b0bb2f8_87350273 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17308203236156ce5b0bc4c2_15793845', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2494269716156ce5b0be665_25871911', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_16453935916156ce5b0c2530_89127677 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_17420222646156ce5b0c1108_53157483 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16453935916156ce5b0c2530_89127677', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_5577914166156ce5b0879b1_76755555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5577914166156ce5b0879b1_76755555',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_17254399356156ce5b089850_94097292',
  ),
  'page_title' => 
  array (
    0 => 'Block_456984376156ce5b08ba10_08459871',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1390516076156ce5b0bb2f8_87350273',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17308203236156ce5b0bc4c2_15793845',
  ),
  'page_content' => 
  array (
    0 => 'Block_2494269716156ce5b0be665_25871911',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_17420222646156ce5b0c1108_53157483',
  ),
  'page_footer' => 
  array (
    0 => 'Block_16453935916156ce5b0c2530_89127677',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17254399356156ce5b089850_94097292', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1390516076156ce5b0bb2f8_87350273', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17420222646156ce5b0c1108_53157483', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
