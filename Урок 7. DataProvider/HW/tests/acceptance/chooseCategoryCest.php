<?php

namespace Tests\Accepteance;

use AcceptanceTester;
use Page\Acceptance\ChooseCategory;

/**
 *  @group test
 * Проверяет функционал выбора категории статей 
 */

class chooseCategoryCest
{
   /**
    * @group test
    * @param Example $data
    * @dataProvider getRandomArticles

    */
    public function chooseRandomCategory(AcceptanceTester $I, \Codeception\Example $data)
    { 
        /**
         * Тест кликает на категорию статей 
         */
                $I->amOnPage('');
                $I->waitForElementClickable(sprintf(ChooseCategory::$articlesCategoryLink, $data['categoryType']));
                $I->click(sprintf(ChooseCategory::$articlesCategoryLink, $data['categoryType']));
                var_dump($I->grabFromCurrentUrl());
    }

    /**
     * @return array
     */
    protected function getRandomArticles() 
    { $data = [
        ['categoryType' => 1, 'url' => 'ru/feed'],
        ['categoryType' => 2, 'url' => 'ru/top'],
        ['categoryType' => 3, 'url' => 'ru/develop'],
        ['categoryType' => 4, 'url' => 'ru/admin'],
        ['categoryType' => 5, 'url' => 'flows/design'],
        ['categoryType' => 6, 'url' => 'ru/flows/management'],
        ['categoryType' => 7, 'url' => 'ru/flows/margeting'],
        ['categoryType' => 8, 'url' => 'ru/flows/popsci'],
    ];  
    $random_number = random_int(2,8);
 
    return array_slice($data,$random_number,$random_number-1);
    }
}