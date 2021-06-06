<?php
namespace Step\Acceptance;

use Page\Acceptance\ProductsPage;

class ShoppingStep extends \AcceptanceTester
{        
    public const PRODUCT_NBM = 3; 
    
    public function addProductToCard(){
        $I = $this;

        for ($i = 1; $i<=self::PRODUCT_NBM; $i++) {
            $I -> moveMouseOver(sprintf(ProductsPage::$listProductCard, $i));
            $I -> moveMouseOver(sprintf(ProductsPage::$addToCartButton, $i));
            $I -> click(sprintf(ProductsPage::$addToCartButton, $i));
            $I -> waitForElementVisible(ProductsPage::$addSuccessModal);
            $I -> waitForText(ProductsPage::$successMessage);
            $I -> click(ProductsPage::$goBackShoppingButton);
            $I -> wait(3);
        }
        
    }
    

}