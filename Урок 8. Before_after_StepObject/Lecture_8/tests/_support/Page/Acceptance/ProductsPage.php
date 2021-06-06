<?php
namespace Page\Acceptance;

class ProductsPage
{
     /**
     * Страница c платьями
     *
     * @var string
     */
    public static $dressesUrl = 'index.php?id_category=8&controller=category';

    /**
     * Селектор с блоком товаров
     *
     * @var string
     */
    public static $firstProductCard = '//ul[contains(@class,"product_list")]//li[1]';




        /**
     * Селектор со всеми товаров
     *
     * @var string
     */
    public static $listProductCard = '//ul[contains(@class,"product_list")]//li[%d]';
    /**
     * Селектор кнопки добавления товара в корзину
     *
     * @var string
     */
    public static $addToCartButton = '//*[@id="center_column"]/ul/li[%d]/div/div[2]/div[2]/a[1]/span';
    

    /**
     * Селектор модалки с сообщением об успешном добавлении товара
     *
     * @var string
     */
    public static $addSuccessModal= '//*[@id="layer_cart"]';

    /**
     * Селектор кнопки возвращения к покупкам
     *
     * @var string
     */
    public static $goBackShoppingButton = '//span[@title="Continue shopping"]';

    /**
     * success сообщение после добавления товара в корзину
     *
     * @var string
     */
    public static $successMessage = 'Product successfully added to your shopping cart';

      /**
       * Селектор кнопки корзины на странице товаров
       *
       * @var string
       */
    public static $cartListButton = '//a[@title="View my shopping cart"]';

}
