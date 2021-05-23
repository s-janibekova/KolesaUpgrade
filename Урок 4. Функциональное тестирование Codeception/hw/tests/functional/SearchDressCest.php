<?php

class SearchDressCest
{
/**
 * Проверить поиск по тексту и наличие соответствующего текста Printed dress
 * убедиться что было найдено 5 результатов
 */
    public function SearchDressThroughTheList(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->click('#search_query_top');
        $I->fillField('#search_query_top','Printed dress');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('#center_column > ul > li',5);
    }
}
