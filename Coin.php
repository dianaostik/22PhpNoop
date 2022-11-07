<?php
class Coin{

    private $country;
    private $value;
    private $year;
    private $madeFrom;
//country
    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getCountry()
    {
        return $this->country;
    }
//value
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
//year
    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }
//made from
    public function setMadeFrom($madeFrom)
    {
        $this->madeFrom = $madeFrom;
    }

    public function getMadeFrom()
    {
        return $this->madeFrom;
    }
}
?>