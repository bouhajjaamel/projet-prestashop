<?php
/* Smarty version 3.1.39, created on 2021-09-30 15:22:39
  from 'module:psfeaturedproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155c82f9da4a2_66133678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:psfeaturedproductsviewste',
      1 => 1633006177,
      2 => 'module',
    ),
    '509c1f719dde145f3b929c13fe8682461d59a14d' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop3/themes/zFlower/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1633006177,
      2 => 'file',
    ),
    '6906078435d9e8f2ed4338f5d93f67d0c8e2ae0c' => 
    array (
      0 => '/opt/lampp/htdocs/prestashop3/themes/zFlower/templates/catalog/_partials/customize/button-cart.tpl',
      1 => 1633006177,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6155c82f9da4a2_66133678 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="featured-products clearfix">
  <h1 class="h1 products-section-title text-uppercase ">
    Produits populaires
  </h1>
  <div class="products">
    
              <div class="row">
      
      
<div class="col-xs-12 col-sm-6 col-md-3">
  <article class="product-miniature js-product-miniature" data-id-product="22" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
    <div class="thumbnail-container">
      
		<div class=" portfolio-box">
			<img
				src = "http://localhost/prestashop3/24-home_default/pontalon.jpg"
				alt = "Pontalon"
				data-full-size-image-url = "http://localhost/prestashop3/24-large_default/pontalon.jpg"
			>
			<div class="portfolio-box-caption">
				<div class="portfolio-box-caption-content">
					
					  <a href="#" class="button button_quick-view quick-view" data-link-action="quickview">
					    Aperçu rapide
					  </a>
					
				</div>
			</div>
		</div>
      

      <div class="product-description">
        
          <h1 class="h3 product-title" itemprop="name"><a href="http://localhost/prestashop3/fr/accueil/22-pontalon.html">Pontalon</a></h1>
        

        
                      <div class="product-price-and-shipping">
                              

				<span class="sr-only">Prix de base</span>
                <span class="regular-price">111,860 TND</span>
                                  <span class="discount-percentage">-20%</span>
                              
              

			  <span class="sr-only">Prix</span>
              <span itemprop="price" class="price">89,488 TND</span>

              

            
          </div>
              

	  <div class="button-group">
          
<div class="product-add-to-cart">
      
		  
		  <form action="http://localhost/prestashop3/fr/panier" method="post" id="add-to-cart-or-refresh">
               
				<div class="product-quantity" style="display:none;">
				 <input type="hidden" name="token" value="798061f062ce6afdfe51b0274b69019c">
                <input type="hidden" name="id_product" value="22" id="product_page_product_id">
                <input type="hidden" name="id_customization" value="0" id="product_customization_id">
                <input type="hidden" name="qty" id="quantity_wanted" value="1" class="input-group"  min="1"  />
				</div>
                 <a href="javascript:void(0);" class="button ajax_add_to_cart_button add-to-cart btn-default" data-button-action="add-to-cart">
					<span>Ajouter au panier</span>
					
				  </a>

            </form>
    
  </div>
      </div>
	  
      
        
<div class="product-list-reviews" data-id="22" data-url="http://localhost/prestashop3/fr/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>


      
    </div>
	  
	
      <a class="product-flags">
                  <span class="product-flag on-sale">Promo !</span>
                  <span class="product-flag discount">-20%</span>
                  <span class="product-flag new">Neuf</span>
              </a>
    


  </article>
</div>


                             
              </div>
      </div>
  <a class="all-product-link float-xs-left float-md-right h4" href="http://localhost/prestashop3/fr/2-accueil">
    Tous les produits<i class="material-icons">&#xE315;</i>
  </a>
</section>
<?php }
}
