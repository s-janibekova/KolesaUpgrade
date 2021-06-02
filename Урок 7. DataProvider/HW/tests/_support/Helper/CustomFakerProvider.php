<?php
namespace Helper;
use Faker\Provider\Base;

class CustomFakerProvider extends Base 
{
    protected $phoneCodes = [
        '701',
        '702',
        '775',
        '778'
    ];
    /**
     * Возвращает рандомный казахстанский номер 
     */
    public function getPhoneKz()
    {
        return sprintf(
            '7%d%d%d%d',
            $this-> phoneCodes[array_rand($this->phoneCodes)],
            random_int(100, 999),
            random_int(10, 99),
            random_int(10, 99)       
        );
    }

       /**
     * Возвращает рандомный номер карты
     */
    public function getCardNumber()
    {
        return sprintf(
            '1234567891011%d',
             range(0,13)
      
        );
    }

}
