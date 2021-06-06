<?php

use Page\Acceptance\MainMarketPage;

/**
 * Класс для проверки по категории
 */

 class categorySearchCest 
 {

   protected function setRegionCookie (\AcceptanceTester $I){
        $I->amOnPage(MainMarketPage::$url);
        $I->setCookie('regAutoToggle', '1');
        $I->reloadPage();

   }
     /**
      * @group test1
      * @before setRegionCookie 
      * Проверяет категорию работы
      */
     public function checkJobCategory(\AcceptanceTester $I) {

        $I->waitForElementVisible(MainMarketPage::$workCategoryIcon);
        $I->click(MainMarketPage::$workCategoryIcon);
        $I->seeInCurrentUrl('/rabota/');
     }


          /**
      * @group test2 
      * @before setRegionCookie 
      * Проверяет категорию работы
      */
      public function checkPropertyCategory(\AcceptanceTester $I) {
        $I->waitForElementVisible(MainMarketPage::$propertyCategoryIcon);
        $I->click(MainMarketPage::$propertyCategoryIcon);
        $I->seeInCurrentUrl('/nedvizhimost/');
     }
 }

