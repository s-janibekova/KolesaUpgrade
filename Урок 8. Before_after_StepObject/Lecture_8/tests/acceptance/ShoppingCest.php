<?php

use Page\Acceptance\ProductsPage;
use Page\Acceptance\ShoppingListPage;

/**
 * Класс для покупки товаров 
 */

 class ShoppingCest
 {
    public const PRODUCT_NBM = 3; 
    /**
     * @group shopping_cest
     */
     public function checkTotalAmout(Step\Acceptance\ShoppingStep  $I){
         $I -> amOnPage(ProductsPage::$dressesUrl);
         $I -> waitForElement((ProductsPage::$firstProductCard));
         $I -> moveMouseOver((ProductsPage::$firstProductCard));
         $I -> comment("Добавляю товары в корзину");
        
         $I -> addProductToCard();

        $I -> click(ProductsPage::$cartListButton);
        $I -> seeInCurrentUrl(ShoppingListPage::$ordersUrl);

        for ($i = 1; $i<=self::PRODUCT_NBM; $i++){
            $I -> waitForElementVisible(ShoppingListPage::getOrderPriceByIndex($i));
        }
   
        $totalSum  =preg_replace('/[$]/', '',$I -> grabTextFrom(ShoppingListPage::$totalSum));
        $sum = $this -> getSumOfPrices($I);

        $I->assertEquals($totalSum, $sum, 'checks that total sum ');
        }


        protected function getSumOfPrices(\AcceptanceTester $I){
              
        for($i = 1; $i <= self::PRODUCT_NBM; $i++){
            $sum = 0;
            $price =preg_replace('/[$]/', '', $I->grabTextFrom(ShoppingListPage::getOrderPriceByIndex($i)));
            $sum += $price;
            }

            return $this;
        }
 }

