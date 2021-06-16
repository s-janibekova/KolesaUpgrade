<?php
namespace Step\Acceptance;

use Page\Acceptance\MainPage;

/**
 * Добавляет продукты из главной страцицы в wishlist по по одному 
 */

class WishlistStep extends \AcceptanceTester
{
    public const PRODUCT_NUM = 2;
    

    public function addProductsToWishlist(){
        $I = $this;

        for ($i=1; $i<=self::PRODUCT_NUM; $i++) {
            $I->moveMouseOver(sprintf( MainPage::$product, $i));
            $I->waitForElementVisible( sprintf(MainPage::$quickViewProduct, $i));
            $I->click(sprintf(MainPage::$quickViewProduct, $i));
            $I->wait(5);
            $I->switchToIFrame(MainPage::$iFrameClass);
            $I->waitForElementClickable(MainPage::$wishlistButton);
            $I->click(MainPage::$wishlistButton); 
            $I->waitForElementVisible(MainPage::$closeSuceessAdd);
            $I->click(MainPage::$closeSuceessAdd);
            $I->switchToIFrame();
            $I->waitForElementVisible(MainPage::$closeQuickView );
            $I->click(MainPage::$closeQuickView);
         }
    }


}