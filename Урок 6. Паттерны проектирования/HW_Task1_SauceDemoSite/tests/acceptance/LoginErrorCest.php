<?php

use Page\Acceptance\LoginPage;

/**
 * Класс для проверки попытки авторизации locked out юзера 
 * 
 */

 class LoginErrorCest 
 {
     /**
      * Проверяет появление ошибки и успешное закрытие блока ошибки
      */
    public function checkLoginErrorGone(AcceptanceTester $I)
    {
        $loginPage = new LoginPage($I);
        $I->amOnPage(LoginPage::$URL);
        
        $loginPage->fillUsernameField()
                  ->fillPasswordField()
                  ->clickSubmit()
                  ->IsSeenErrorContainer()
                  ->clickErrorButton()
                  ->isNotSeenErrorContainer();
    }
 }