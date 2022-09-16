<?php
namespace Test\Dz4;
class Currency
{
    private $isoCode;
    public function __construct(string $iso)
    {
                $this->setCurrency($iso);
    }
    private function valid(string $iso){
        if (iconv_strlen($iso) == 3){
            if (strtoupper($iso) === $iso){
                return true;
            }else{
                throw Exception(' InvalidArgumentException');
            }
        }else{
            throw Exception(' InvalidArgumentException');
        }
    }
    private function setCurrency(string $iso)
    {
            if ($this->valid($iso)){
                $this->isoCode = $iso;
            }
    }
    public function getCurrency()
    {
        return $this->isoCode;
    }
    public function equals(Currency $iso)
    {
        if ($iso->getCurrency() === $this->isoCode){
            return true;
        }else{
            return false;
        }
    }
}
