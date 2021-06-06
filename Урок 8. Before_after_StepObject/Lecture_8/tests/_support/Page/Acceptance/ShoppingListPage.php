<?php
namespace Page\Acceptance;


class ShoppingListPage
{
     /**
     * Страница c покупками
     *
     * @var string
     */
    public static $ordersUrl = 'index.php?controller=order';

    /**
     * Селектор итоговой суммы заказа
     *
     * @var string
     */
    public static $totalSum = '#total_product';

    /**
     * Возвращает i- ый селектор продукта в корзине
     *
     * @param  string $index
     * @var string
     */
    public static function getOrderSelectorByIndex($index){
        return "//tr[contains(@id,'product')][$index]";
    }

    /**
     * Возвращает i- ый селектор стоимости продукта в корзине
     *
     * @param  string $index
     * @var    string
     */
    public static function getOrderPriceByIndex($index){
        return "//tr[contains(@id,'product')][$index]//td[@class='cart_total']//span[@class='price']";
    }

}
