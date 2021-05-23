
<?php
    
class SearchCest
{
/**
 * Проверить поиск по тексту и наличие соответствующего текста Blouse
 */

    public function checkSearchByText(AcceptanceTester $I)
    
    {
        
        $I->amOnPage('');
        $I->waitForElementVisible('#search_query_top');
        $I->click('#search_query_top');
        $I->fillField('#search_query_top','Blouse');
        $I->pressKey('#search_query_top', \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->waitForElementVisible( '#center_column > ul > li' );
        $I->moveMouseOver( '#center_column > ul > li' );
        $I->waitForElementVisible( '#center_column > ul > li > div > div.left-block > div > a.quick-view');
        $I->click('#center_column > ul > li > div > div.left-block > div > a.quick-view');
        $I->waitForJS("return $.active == 0;",10);
        $I->see('Blouse'); // label containing name
   
    }
}
