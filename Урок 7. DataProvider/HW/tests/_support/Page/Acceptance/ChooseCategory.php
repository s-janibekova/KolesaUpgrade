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
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
