<?php
namespace Page\Acceptance;



class User
{
    // include url of current page
    public static $URL = '/?owner=SJ';

    /**
     * коллекция пользователей
     */
    public static $dbCollection = 'people';

    /**
     * Селектор для выбора первого элемента карточки пользователя
     */
    public static $firstUser = "//li[@class='user-card'][1]//b";

    /**
     * Cелектор получения юзернейма
     */

    public static $userNameText = "//li[@class='user-card'][%d]//b";

    /**
     * Селектор получения текста job пользователя
     */
    public static $userJobText = "//li[@class='user-card'][%d]//p";


    /**
     * Селектор кнопки удаления пользователей с полем killedbBySnap = True
     */
    public static $snapButton = "//button[@id='snap']";
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
