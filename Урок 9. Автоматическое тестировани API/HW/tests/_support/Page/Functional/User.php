<?php
namespace Page\Functional;


class User
{
    // include url of current page
    public static $URL = '';
    

    /**
     * урл для создания пользователя
     */
    public static $userCreateUrl = 'human';
    
    /**
     * урл для получения данных о пользователе 
     */
    public const getUsersUrl = 'people';


    /**
     * Схема пользователя для проверки создания пользователя
     */

    public static $defaultSchema = [
        'job'        => 'string',
        '_id'        => 'string',
        'email'      => 'string',
        'superhero'  => 'boolean',
        'name'       => 'string',
        'owner'      => 'string'
        ];

    
    
    /**
     * @var \AcceptanceTester;
     */
    protected $functionalTester;

    public function __construct(\FunctionalTester $I, )
    {
        $this->functionalTester = $I;
      
        
    }

}
