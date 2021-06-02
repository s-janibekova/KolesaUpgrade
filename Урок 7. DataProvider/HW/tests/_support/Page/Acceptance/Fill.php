<?php
namespace Page\Acceptance;

class Fill
{
    // include url of current page
    public static $URL = '';
    /**
     * Блок домашнего задания 
     */

     /**
      * Локатор radio кнопки для заполнения Payment method
      */
      public static $paymentRadioInput = '//*[@id="input_32_paymentType_credit"]';
    
    /**
     * Локаторы поля имени в Payment
     */
    public static $paymentFirstName = '//*[@id="input_32_cc_firstName"]';

        /**
     * Локаторы поля номера карты в Payment
     */
    public static $paymentNumber = '//*[@id="input_32_cc_number"]';


    /**
     * Локаторы поля ccv карты в Payment
     */
    public static $paymentSecurityCode = '//*[@id="input_32_cc_ccv"]';

    /**
     * Локаторы поля месяца срока истечения карты в Payment
     */
    public static $paymentExpirationMonth = '//*[@id="input_32_cc_exp_month"]';

    
    /**
     * Локаторы поля год истечения карты в Payment
     */
    public static $paymentExpirationYear = '//*[@id="input_32_cc_exp_year"]';

    
    /**
     * Локатор для выбора январь месяца 
     * В дальнейшем нужно передать динамические параментры
     */
    public static $monthOptionJanuary = '//*[@id="input_32_cc_exp_month"]/option[2]';
    
        /**
     * Локатор для выбора  года  
     * В дальнейшем нужно передать динамические параментры
     */
    public static $yearOption = '//*[@id="input_32_cc_exp_year"]/option[2]';


    /**
     * Локаторы поля фамилии в Payment
     */
    public static $paymentLastName = '//*[@id="input_32_cc_lastName"]';
    /**
     * Локатор оплаты поля адреса
     */
    public static $streetAddress = '//*[@id="input_32_addr_line1"]';  
    /**
     * Локатор оплаты поля второго адреса
     */
    public static $streetAddressSecond = '//*[@id="input_32_addr_line2"]'; 
    /**
     * Локатор оплаты город
     */
    public static $paymentCity = '//*[@id="input_32_city"]';
    /**
     * Локатор оплаты раион
     */
    public static $paymentState = '//*[@id="input_32_state"]';
    /**
     * Локатор оплаты почтовый индекс
     */
    public static $paymentPostal = '//*[@id="input_32_postal"]';
    /**
     * Локатор оплаты страна
     */
    public static $paymentCountry = '//*[@id="input_32_country"]/option[102]';



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
