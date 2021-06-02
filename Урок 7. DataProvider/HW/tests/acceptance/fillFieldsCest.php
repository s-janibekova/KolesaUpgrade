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
        $name = $faker->name;
        $lastName = $faker->lastname;
        $email = $faker->email;
        $phoneNumber = $I-> getFaker() -> getPhoneKz();
        var_dump($phoneNumber);
        $address = $faker -> address;
        $city = $faker->city;
        $state = $faker->region;
        $postal = $faker->postcode;


        $I->amOnPage('');
        $I->fillField(Fill::$firstName,$name );
        $I->fillField(Fill::$lastName, $lastName);
        $I->fillField(Fill::$email,$email);
        $I->fillField(Fill::$phoneNumber, $phoneNumber);
        $I->fillField(Fill::$address, $address);
        $I->fillField(Fill::$city, $city);
        $I->fillField(Fill::$state, $state);
        $I->fillField(Fill::$postal, $postal);
        $I->click(Fill::$registreButton);
        $I->waitForText('Good job');

    }
}