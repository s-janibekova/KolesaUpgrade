<?php

use Page\Acceptance\User;
 class UsersCest 
{
   public const numberOfUsers = 10;
        /**
         * @group webPage
         */
        public function checkSnapPeopleOnPage(\Step\Acceptance\UserStep $I) {
          # генерация данных
          $data                    =  $I ->  createUser();
          $generatedUsers          = $data[1];
          $killedBySnapUsersTrue   = $data[2];
          
          # Проверка того что пользователи создались
          $I -> amOnPage(User::$URL); 
          $I -> waitForElementVisible(User::$firstUser);
          $createdUsesList = $I -> getCreatedUsers();
          $I -> assertTrue($generatedUsers == $createdUsesList); 
         
          # Удаление пользователей killedBySnap через клик
          $I -> click(User::$snapButton);
          $I -> wait(3);
          
          # Проверяем что пользователей нет на сайте
          $I-> usersNotSeenAfterSnap($killedBySnapUsersTrue);
  }
}
