<?php
namespace Page\Acceptance;

use AcceptanceTester;

/**
 * Класс для проверки сттаницы авторизации 
 */

class SearchPage
{
    // include url of current page
    public static $URL = '/index.php?id_category=8&controller=category';
    

    /** 
     * Селектор для отображения в виде grid с классом seleted 
     * (selected class - указывает что текущее отображение товаров в виде grid)
     */
    public static $gridViewOfGoodsSelected = '//li[@id="grid"][@class="selected"]';


    /**
     * Селектор для отображения в виде списка(li)
     */
    public static $listViewOfGoods = '//li[@id="list"]';


    /**
     * Селектор для отображения в виде списка с классом selected
     * (selected class - указывает что текущее отображение товаров в виде grid)
     */
    public static $listViewOfGoodsSeleted = '//li[@id="list"][@class="selected"]';


    /**
     * Объект тестера 
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Метод конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Проверяет активна ли в данный момент опция grid 
     * основываясь на классе seleted 
     */

    public function isGridOptionOfActive(){

        $this->acceptanceTester->seeElement(self::$gridViewOfGoodsSelected);

        return $this;
    }

    /**
     * Кликает на опцию list для отображения товаров в виде списка 
     */
     public function clickListOptionOfView(){

        $this->acceptanceTester->click(self::$listViewOfGoods);

        return $this;
     }
    

     /**
      * Проверяет что текущее отображения в виде List
      * основываясь на классе seleted
      */
      public function isListOptionSeleted(){

        $this->acceptanceTester->seeElement(self::$listViewOfGoodsSeleted);

        return $this;
      }
   




}
