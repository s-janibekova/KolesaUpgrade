<?php
namespace Page\Acceptance;

class MainPage
{
    // include url of current page
    public static $URL = '';


    /**
     * Селектор для катетогории Dresses в верхнем меню 
     */
    public static $topMenuLiDresses = '//*[@id="block_top_menu"]/ul/li[2]/a';

    /** 
     * Селектор для Summer Dresses в каталоге dresses 
     */
    public static $summerDressesLi = '//*[@id="block_top_menu"]/ul/li[2]/a';

    

    /**
     * Проверяет видна ли категория Dresses в верхнем каталоге
     */

     public function isDressesLiSeen(){

        $this->acceptanceTester->seeElement(self::$topMenuLiDresses);
        
        return $this;
     }


     /**
      * Наводит мышью на категорию SummerDresses 
      */

      public function mouseOverSummerDressesLi(){

       $this->acceptanceTester-> moveMouseOver(self::$summerDressesLi);

       return $this;
      }

      /** 
       * Кликает на категория SummerDresses
       */
      public function clickOnSummerDressesLi(){

        $this->acceptanceTester->click(self::$summerDressesLi);

      }


        /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }



    public static function route($param)
    {
        return static::$URL.$param;
    }


}
