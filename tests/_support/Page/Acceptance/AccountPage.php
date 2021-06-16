<?php
namespace Page\Acceptance;

class AccountPage
{
    // include url of current page
    public static $URL = '';


    /**
     * Селектор копки wishlist на странице аккаунта
     */
    public static $wishListButtonOnAccount = "//li[@class='lnk_wishlist']//a";

    
    public function goToWishlist() {
        $this ->acceptanceTester->click(AccountPage::$wishListButtonOnAccount);
        $this->acceptanceTester->seeInCurrentUrl(WishlistPage::textOnUrl);
        return $this;
    }
    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
