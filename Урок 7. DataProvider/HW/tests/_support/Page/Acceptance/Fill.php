<?php
namespace Page\Acceptance;

class Fill
{
    // include url of current page
    public static $URL = '';


    /**
     * Локатор поля имени 
     */

    public static $firstName = "//*[@id = 'firstName']";
        /**
     * Локатор поля фамилии
     */

    public static $lastName = "//*[@id = 'lastName']";

    /**
     * Локатор поля email 
     */

    public static $email = "//*[@type = 'email']";

    /**
     * Локатор поля телефона 
     */

    public static $phoneNumber = "//*[@id = 'phoneNumber']";

    /**
     * Локатор поля адрес 
     */

    public static $address = "//*[@id = 'address']";

    /**
     * Локатор города
     */
    public static $city = "//*[@id = 'city']";

    /**
     * Локатор поля региона 
     */
    public static $state = "//*[@id = 'state']";

    /**
     * Локатор поля почтового индекса 
     */
    public static $postal = "//*[@id = 'postal']";


    /**
     * Локатор поля кнопки регистрации 
     */
    public static $registreButton = "//*[@type = 'submit']";


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
