<?php 
include "vendor/autoload.php";
use AndyDune\CurrencyRateCbr\DailyRate;

class Hello {

    function privet($name="Антон")
    {
        return "Привет,".$name;
    } 
    
    
    function hello_par($name="John",$hello="Hi")
    {
        return $hello.",".$name."!";
    }

    function hello_dollar($name = "John")
    {
        return "Доброе утро, ".$name.". Курс доллара на текущий момент: ".$this->getCourse("usd");

    }
    function getCourse($name = "usd")
    {
        $rate = new DailyRate();
        $rate->setDate(new \DateTime()); // не обязательно - по умолчанию используется текущая дата 
        $isOk = $rate->retrieve(); // true если данные успешно получены
        
        // Извлекаем курс доллара 
        
        /** @var DailyRateItem $item */
        $item = $rate->get($name);
        return $item->getValue();
    }

}