<?php

use Page\Acceptance\MainPage;
use Page\Acceptance\SearchPage;

/**
 * Класс для проверки смены раскладки результатов поиска
 * 
 */

 class SearchCest 
 {
     /**
      * Проверяет моиск и смену отображения карточек при смене раскладки
      */
    public function checkCardListView(AcceptanceTester $I)
    {
      $mainPage = new MainPage($I);
      $searchPage = new SearchPage($I);        
      $I->amOnPage(MainPage::$URL);
      $mainPage ->isDressesLiSeen()
                ->mouseOverSummerDressesLi()
                ->clickOnSummerDressesLi();

      $I->seeCurrentUrlEquals($searchPage::$URL);
      $I->wait(3);

      $searchPage->isGridOptionOfActive()
                 ->clickListOptionOfView()
                 ->isListOptionSeleted();  
    }
 }