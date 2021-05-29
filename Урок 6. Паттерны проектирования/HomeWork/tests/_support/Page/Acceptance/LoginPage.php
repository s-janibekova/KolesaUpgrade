<?php
namespace Page\Acceptance;
/**
 * Класс для проверки сттаницы авторизации 
 */

class LoginPage
{
    // include url of current page
    public static $URL = '';
    /**
     * LOCKED OUT юзер
     */
    public const LOCKED_OUT_USERNAME = 'locked_out_user';

    /** 
     * Стандартный пароль
     */
    public const PASSWORD = 'secret_sauce';

    /**
     * Селектор поля ввода для логина 
     */
    public static $loginInput = '//input[@id="user-name"]';

    /** 
     * Селектор поля ввода для пароля 
     */
    public static $passwordInput = '//input[@id="password"]';

    /** 
     * Селектор кнопки авторизации 
    */
    public static $loginButton = '//input[@id="login-button"]';

    /**
     * Селектор для блока ошибки
     */
    public static $errorMessageContainer = '//div[@class="error-message-container error"]';

    /**
     * Селектор для кнопки ошибки 
    */

    public static $errorButton = '//button[@class="error-button"]';


    /**
     * Объект тестера 
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Метод конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
    /**
     * Заполняет поле ввода логином
     */
    public function fillUsernameField()
    {
      $this->acceptanceTester->fillField(self::$loginInput, self::LOCKED_OUT_USERNAME);
      
      return $this;
    }

        /**
     * Заполняет поле ввода пароля
     */
    public function fillPasswordField()
    {
      $this->acceptanceTester->fillField(self::$passwordInput, self::PASSWORD);

      return $this;
    }

    /**
     * Кликает на кнопку логина
     */
    public function clickSubmit(){
        
        $this->acceptanceTester->click(self::$loginButton);
        
        return $this;
    }

    /** 
     * Проверяет виден ли блок ошибки 
     */
    public function isSeenErrorContainer(){
     
        $this->acceptanceTester->seeElement(self::$errorMessageContainer);

        return $this;
    }

    /** 
     * Кликает на кнопку из блока ошибки
     */

    public function clickErrorButton(){
     
        $this->acceptanceTester->click(self::$errorButton);

        return $this;
     
    }


    /** Проверяет успешное изчезновение блока ошибки */
    public function isNotSeenErrorContainer(){
    
        $this->acceptanceTester->dontSeeElement(self::$errorMessageContainer);

        return $this;
    }






}
