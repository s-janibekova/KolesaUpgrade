<?php

namespace Tests\Accepteance;

use AcceptanceTester;
use Page\Acceptance\SearchPage;

/**
 *  @group test
 */

class SearchCest
{
   /**
    * @group test
    * @param Example $data
    * @dataProvider getDataForSearchCarsBody
    
    */
    public function searchCarsByBodyType(AcceptanceTester $I, \Codeception\Example $data)
    { 
                $I->amOnPage('');
                $I->waitForElementClickable(SearchPage::$autoCarsLink);
                $I->click(SearchPage::$autoCarsLink);
                $I->waitForElementClickable(SearchPage::$optionalSearchLink);
                $I->click(SearchPage::$optionalSearchLink);
                $I->waitForElementClickable(SearchPage::$carBodyTypeField);
                $I->click(SearchPage::$carBodyTypeField);
                $I->click(sprintf(SearchPage::$carBodyType, $data['carBodyType']));
                $I->click(SearchPage::$searchButton);
                $I->seeInCurrentUrl($data['url']);

        
    }

    /**
     * @return array
     */
    protected function getDataForSearchCarsBody() // alternatively, if you want the function to be public, be sure to prefix it with `_`
    {
        return [
            ['carBodyType' => 'sedan', 'url' => 'sedan'],
            ['carBodyType' => 'station-wagon', 'url' => 'station-wagon']
        ];
    }
}