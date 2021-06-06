<?php
namespace Page\Acceptance;

class LoginPage
{
    // include url of current page
    public static $URL = '';

    /**
     * Текст в урл для аккаунта пользователя
     */
    public const myAccountTextOnUrl = "my-account";
    

    /**
     *  Селектор для заполнения поля email
     */
    public static $emailField = '//input[@id="email"]';

    /**
     * Селектор для заполнения поля password
     */
    public static $passwordField = '//input[@id="passwd"]';

    /**
     * Селектор для кнопки submit при логине 
     */
    public static $submitLoginButton = '//button[@id="SubmitLogin"]';


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
