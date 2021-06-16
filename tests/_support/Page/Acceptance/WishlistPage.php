<?php
namespace Page\Acceptance;

class WishlistPage
{
    // include url of current page
    public static $URL = '';

    /**
     * Текст в урл wishlist
     */
    public const textOnUrl = "mywishlist";

    /**
     * Текст алерта для подтверждения удаления товаров из wishlist
     */
    public const popUpTextToDelete = 'Do you really want to delete this wishlist ?';

    /**
     * Селектор для ячейка количества товаров в wishlist
     */
    public static $wishListQty = '//tr[contains(@id,"wishlist")]//td[2]';

    /**
     * Селектор для удаления товаров из избранного 
     */

     public static $deleteWishlistProducts = '//tr[contains(@id,"wishlist")]//td[6]/a';


     /**
      * Получение количества продуктов в wishlist
      */

      public function getNumberOfItems(){
        $this->acceptanceTester->waitForElementVisible(WishlistPage::$wishListQty);
        $number_of_items = $this->acceptanceTester->grabTextFrom(WishlistPage::$wishListQty);
         return $number_of_items ;
      }


    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
