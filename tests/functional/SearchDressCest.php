<?php

class SearchDressCest
{
/**
 * Проверить поиск по тексту и наличие соответствующего текста Printed dress
 * убедиться что было найдено 5 результатов
 */
    public function SearchDressThroughTheList(FunctionalTester $I)
    {
        /**
        * HW - 5 Написание селекторов CSS и XPath 
        */
        $SearchQueryTopCss = '#searchbox';
        $SearchQueryTopXPath = "//form[@id='searchbox']";
        
        
        $SearchboxCss = '#searchbox > button';
        $SearchboxXPath = "//form[@id='searchbox']/button";
        
        # Список с поиска Printed Dress
        $CenterColumnliCSS = '#center_column > ul >li';
        $CenterColumnliXPath = "//div[@id='center_column']/ul/li";

        // Тест hw - 4
        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->click('#search_query_top');
        $I->fillField('#search_query_top','Printed dress');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('#center_column > ul > li',5);
    }
}
