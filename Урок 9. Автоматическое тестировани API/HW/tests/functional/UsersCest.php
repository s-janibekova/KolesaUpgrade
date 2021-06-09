<?php


use function PHPUnit\Framework\assertFalse;

/**
 * Класс для работы с юзером
 */

 class UsersCest 
 
 { 
     /**
      * Обновление данных юзера
      * @group testUserUpdate
      * @after checkUserDelete
      */
     public function checkUserUpdate(\Step\Functional\UserStep $I){
      
      /**
       * Получает id пользователя и изменяет user job 
       * юзера получаю через Ownera , чтобы обеспечить незавивисмоть тестов 
       * можно и через createUser 
      */
      $userID = $I->createUser();
      $userJob = $I->getUserJob();
      $I -> sendPut(sprintf('human?_id=%s', $userID), ['job'=> 'QaEngineer']);
      $userJobAfter = $I->getUserJob();
      assertFalse($userJob==$userJobAfter);
      $I -> seeResponseContainsJson(["job"=> $userJobAfter ]);
     }


     /**
      * Удаление пользователя
      * @group testUserDelete
      */
      protected function checkUserDelete(\Step\Functional\UserStep $I){
       /**
        * Проверка запроса удаления пользователя по id
        */
        $userID = $I->getUserId();
        $I -> sendDelete(sprintf('human?_id=%s', $userID));
        $I -> seeResponseContainsJson(['n' => 1,'ok' => 1,'deletedCount' => 1]);
       }
  
 }