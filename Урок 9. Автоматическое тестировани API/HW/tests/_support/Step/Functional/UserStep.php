<?php
namespace Step\Functional;

use Page\Functional\User;

/**
 * Класс для вспомогательных функций для пользователя
 */

class UserStep extends \FunctionalTester


{   
    /**
     * Создание пользователя через Faker
     */
    public function createUser() {

        $I = $this;
        $userData = [
            "email" => $I->getFaker()->email ,
            "name"  => $I->getFaker()->userName,
            "owner" => 'Saltanat',
            "job"   => $I->getFaker()->company
            ]; 
        $I -> haveHttpHeader('Content-Type', 'application/json');
        $I -> sendPost(User::$userCreateUrl, $userData);
        $I -> seeResponseCodeIsSuccessful();
        $I -> seeResponseContainsJson(['status' => 'ok']);
        $I -> sendGet(User::getUsersUrl, $userData);
        $I -> canSeeResponseMatchesJsonType(User::$defaultSchema);
        $userId = $I->grabDataFromResponseByJsonPath("0._id")[0];
        return $userId;
        
    }

    public function getUserId() {
        /**
         * Получение id пользовтеля по Id
         */
        $I = $this;
        $I -> haveHttpHeader('Content-Type', 'application/json');
        $I -> sendGet('people?owner=',['owner'=>'Saltanat']);
        $userId = $I->grabDataFromResponseByJsonPath("0._id")[0];
        return $userId;
    }

    public function getUserJob() {
        /**
         * Получение job пользователя через ул owner
         */
        $I = $this;
        $I -> haveHttpHeader('Content-Type', 'application/json');
        $I -> sendGet('people?owner=',['owner'=>'Saltanat']);
        $userId = $I->grabDataFromResponseByJsonPath("0.job")[0];
        return $userId;
    }

}