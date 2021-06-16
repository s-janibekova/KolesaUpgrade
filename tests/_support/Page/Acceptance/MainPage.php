<?php
namespace Page\Acceptance;

class MainPage
{
    // include url of current page
    public static $URL = '';

    /**
     * Селектор товара  
     */
    public static $product = '//ul[@id="homefeatured"]//li[%d]';

    /**
     * Селекторв quick view товара 
     */
    public static $quickViewProduct = '//ul[@id="homefeatured"]//li[%d]//a[@class="quick-view"]';

    /**
    * IFrame класс 
    */
    public static $iFrameClass = '.fancybox-iframe';

    /**
     * Селектор добавления товара в избранное
    */
    public static $wishlistButton = '//*[@id="wishlist_button"]';

    /**
     * Селектор для закрытия плашки об успешном добавлении товара 
     * в избранное
     */

    public static $closeSuceessAdd = "//a[@title='Close']";

    /**
    * Селектор закрытия окна quick View
    */

    public static $closeQuickView = "//a[@class='fancybox-item fancybox-close']";
    
    /**
     * Селектор кноки login на навигационном окне 
     */
    public static $loginLinkOnNav = '//a[@class="login"]';


    /**
     * Селектор логоттипа  который возвращает в mainPage
     */
    public static $LogoOnHeader = "//div[@id='header_logo']";

    /**
     * Селектор для перехода на страницу аккаунта пользователя
     */
    public static $myAccountOnNav = "//div[@class='header_user_info']/a[@class='account']";

    /**
     * Селектор для логаута
     */

     public static $logoutOnNav = '//*[@id="header"]//a[@class="logout"]';


    /**
     * Переход на wishlist пользователя 
     */

     public function goToMyAccount(){

        $this->acceptanceTester->waitForElementVisible(MainPage::$myAccountOnNav);
        $this->acceptanceTester->click(MainPage::$myAccountOnNav);

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
