<?php 

namespace Tests\Accepteance;

use Page\Acceptance\Fill;
use Faker\Factory;
use Helper\CustomFakerProvider;

/** 
 * Класс для тестирования форм
 */
class fillFieldsCest 
    /**
     * Тест на проверку заполнения полей с помощью фейкера
     * @group test2
     */
{
    public function checkFillField(\AcceptanceTester $I) {

        $faker = Factory::create('kk_KZ');
        $faker -> addProvider(new CustomFakerProvider($faker));


        // Fake data 
        $name = $faker->firstName;
        $lastName = $faker->lastname;
        $email = $faker->email;
        $phoneNumber = $I-> getFaker() -> getPhoneKz();
        var_dump($phoneNumber);
        $address = $faker -> address;
        $city = $faker->city;
        $state = $faker->region;
        $postal = $faker->postcode;

        /**
         * Main form
         */
        $I->amOnPage('');
        $I->fillField(Fill::$firstName,$name );
        $I->fillField(Fill::$lastName, $lastName);
        $I->fillField(Fill::$email,$email);
        $I->fillField(Fill::$phoneNumber, $phoneNumber);
        $I->fillField(Fill::$address, $address);
        $I->fillField(Fill::$city, $city);
        $I->fillField(Fill::$state, $state);
        $I->fillField(Fill::$postal, $postal);

        /**
         * Заполнение Payment method 
         */
        //Fake payment data 
        $fakeCardNumber = $faker-> getCardNumber();


         $I->click(Fill::$paymentRadioInput);
         $I->fillField(Fill::$paymentFirstName,$name );
         $I->fillField(Fill::$paymentLastName, $lastName);
         $I->fillField(Fill::$paymentNumber,$fakeCardNumber);
         $I->fillField(Fill::$paymentSecurityCode, 222);
         $I->click(Fill::$paymentExpirationMonth);
         $I->click(Fill::$monthOptionJanuary);
         $I->click(Fill::$yearOption);
         $I->fillField(Fill::$streetAddress, $address);
         $I->fillField(Fill::$streetAddressSecond, $address);
         $I->fillField(Fill::$paymentCity, $city);
         $I->fillField(Fill::$paymentState, $state);
         $I->fillField(Fill::$paymentPostal, $postal);
         $I->click(Fill::$paymentCountry);

        $I->click(Fill::$registreButton);
        $I->waitForText('Good job');

    }
}