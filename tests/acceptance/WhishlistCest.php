<?php

use Page\Acceptance\AccountPage;
use Page\Acceptance\LoginPage;
use Page\Acceptance\MainPage;
use Page\Acceptance\WishlistPage;

use function PHPUnit\Framework\assertEquals;

/**
 * Тест на добавление товаров в избранное 
 */

class WhishlistCest {

    public const loginEmail = 's.t.janibekova@gmail.com';
    public const loginPassword = 'codeception';
    public const PRODUCT_NUM = 2;

    /**
     * 
     * @group favorites
     * @before login
     * @after cleanWishlist
     * @after logout
     */
    public function checkWhishlist(\Step\Acceptance\WishlistStep $I){
     
     $mainPage = new MainPage($I);
     $myAccountPage = new AccountPage($I);
     $wishListPage = new WishlistPage($I);
     
     $I-> addProductsToWishlist();
     $mainPage -> goToMyAccount();
     $myAccountPage -> goToWishlist();
     $number_of_items = $wishListPage->getNumberOfItems();
     
     assertEquals(self::PRODUCT_NUM,$number_of_items);
    }



    /**
     *  Логин пользователя и email и password 
     */
    protected function login(\AcceptanceTester $I) {
        $I->amOnPage(MainPage::$URL); 
        $I->click(MainPage::$loginLinkOnNav);
        $I->fillField(LoginPage::$emailField, self::loginEmail);
        $I->fillField(LoginPage::$passwordField, self::loginPassword);
        $I->click(LoginPage::$submitLoginButton);
        $I->seeInCurrentUrl(LoginPage::myAccountTextOnUrl);
        $I->click(MainPage::$LogoOnHeader);
    }

    /**
     * Очищение wishlist от выбранных товаров 
     * Выполняется после добавления товаров 
     */
    protected function cleanWishlist(\AcceptanceTester $I) {
        $I->click(WishlistPage::$deleteWishlistProducts);
        $I->seeInPopup(WishlistPage::popUpTextToDelete);
        $I->acceptPopup();
    }

    protected function logout (\AcceptanceTester $I){
        $I->click(MainPage::$logoutOnNav);
    }

}


