
<?php
    
class SearchCest
{
/**
 * Проверить поиск по тексту и наличие соответствующего текста Blouse
 */

    public function checkSearchByText(AcceptanceTester $I)
    
    {
        /**
        * HW - 5 Написание селекторов CSS и XPath 
        */
        $centerColumnCss = '#center_column';
        $centerColumnXPath = "//div[@id='center_column']";
        
        //Quic View
        $HomefeatureLiCss = '#homefeatured>li:nth-child(2)';
        $HomefeaturedLiXPath = "//ul[@id='homefeatured']/li[2]";
        
        $IfameCSS = '.fancybox-iframe';
        $IfameXPath = "//iframe[@class='fancybox-iframe']";



        // Тест hw - 4
        $I->amOnPage('');
        $I->waitForElementVisible("#center_column");
        $I->moveMouseOver( '#homefeatured > li:nth-child(2) > div' );
        $I->waitForElementVisible( '#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
        $I->wait(5);
        $I->switchToIFrame('.fancybox-iframe');
        $I->waitForElementVisible('#product > div');
        $I->grabTextFrom('#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1');
    }
}
