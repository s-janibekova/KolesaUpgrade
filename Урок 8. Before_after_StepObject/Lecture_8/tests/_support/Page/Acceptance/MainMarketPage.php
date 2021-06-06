<?php
namespace Page\Acceptance;
/**
 * class with elements and methods on MainPage
 */
class MainMarketPage
{
    /***
     * урл главной страницы
     */
    public static $url = '';
    
    /**
     * Селектор иконки категории работа
     */
    public static $workCategoryIcon = '//span[contains(@class,"rabota")]';

        /**
     * Селектор иконки категории работа
     */
    public static $propertyCategoryIcon = '//span[contains(@class,"nedvizhimost")]';

    /**
     * селктор блока с геолокацией
     */
    public static $geoLocationBlock = '//div[contains(@class,"region-auto modal")]';

    /**
     * кнопка подтверждения выбора геолокции
     */
    public static $confirmGeoButton = '//div[contains(@class,"confirm")]/a[@data-confirm="1"]';

}