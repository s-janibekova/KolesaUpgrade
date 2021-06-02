<?php
namespace Page\Acceptance;

class ChooseCategory
{
    // include url of current page
    public static $URL = '';


    /**
     * Локатор для выбора категории статьи в навлинке
     */

     public static $articlesCategoryLink = '//*[@id="navbar-links"]/li[%d]/a';
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
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
