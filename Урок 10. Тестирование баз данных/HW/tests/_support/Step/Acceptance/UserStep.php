<?php
namespace Step\Acceptance;
use Page\Acceptance\User;

class UserStep extends \AcceptanceTester
{  
    public const numberOfUsers = 10;
    /**
     * Создание пользователя через Faker 
     */
    public function createUser() {
        /**
         * Сохранение пользователей faker в базу данных
         */

        $I = $this;
        for ($i = 1; $i <= self::numberOfUsers; $i++) {
            $faker = $I->getFaker();
            $this -> data = [
                "job"               => $faker -> company,
                "superhero"         => $faker ->boolean(),
                "skill"             => $faker -> word,
                "email"             => $faker -> email,
                "name"              => $faker -> name,
                "DOB"               => $faker -> date("Y-m-d"),
                "avatar"            => $faker -> imageUrl(),
                "canBeKilledBySnap" => $faker -> boolean(),
                'created_at'        => $faker -> date("Y-m-d"), 
                "owner"             => "SJ",
                
            ];
            $I->haveInCollection(User::$dbCollection, $this->data);
            $key = $this -> data['name'];
            $value =$this -> data['job'];
            $generatedUsers[ $key] =  $value;
            $this -> data["canBeKilledBySnap"]==true ? $killedBySnapUsersTrue[$key] = $this -> data["name"] : NULL;
       
            
    }
    # для оптимизации сохраним данные для дальшнешей проверки опреденных пользователей
    return [$this->data, $generatedUsers, $killedBySnapUsersTrue];
}


    /**
     * Получение пользователей на UI 
     */
    public function getCreatedUsers() {
        $I = $this;
        for ($i = 1; $i <= self::numberOfUsers; $i++) {
            $key = $I -> grabTextFrom(sprintf(User::$userNameText, $i));
            $value = $I -> grabTextFrom(sprintf(User::$userJobText, $i));
            $createdUsesList[ $key] =  $value ;
           
          };
        return $createdUsesList;
    }

    /**
     * Проверка исчезновение пользователей(killedBySnapUsers = True) из UI 
     */
    public function usersNotSeenAfterSnap($killedBySnapUsersTrue) {

        $I = $this;
        foreach  ($killedBySnapUsersTrue as &$value) {
            $I -> dontSee($value);
            $I->dontSeeInCollection(User::$dbCollection, array('name' => $value));
        }
        
    }

}