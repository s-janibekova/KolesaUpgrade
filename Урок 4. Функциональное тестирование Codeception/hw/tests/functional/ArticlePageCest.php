<?php

class ArticlePageCest
{

    // tests
    public function ArticlePageThroughTheList(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#navbar-links > li:nth-child(2) > a');
        $I->click('#navbar-links > li:nth-child(2) > a');
        $I->seeElement('#post_555562 > article > h2 > a');

        codecept_debug($I->grabTextFrom('#post_555562 > article > h2 > a'));

        $I->click('#post_555562 > article > h2 > a');
        $I->seeElement('#post_555562 > div.post__wrapper');
    }
}
