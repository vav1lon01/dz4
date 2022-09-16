<?php
namespace  Test\Dz4;
class Money
{
   private $amount;
   private $currency;
   public function __construct( int $amount, Currency $currency)
   {
        $this->setCurrency($currency);
        $this->setAmount($amount);
   }
   private function setAmount(int $value)
   {
       $this->amount = $value;
   }
   private function setCurrency(Currency $value)
   {
       $this->currency = $value->getCurrency();
   }
   public function getAmount()
   {
       return $this->amount;
   }
   public function getCurrency()
   {
       return $this->currency;
   }
   public function equals(Money $money)
   {
       if ($money->getCurrency() === $this->getCurrency()){
           if ($money->getAmount() === $this->getAmount()){
               return true;
           }else{
               return false;
           }
       }else{
           return false;
       }
   }
   public function add(Money $money)
   {
       if ($this->currency === $money->getCurrency()){
           $this->amount += $money->getAmount();
       }else{
           throw Exception(' InvalidArgumentException');
       }
   }
}