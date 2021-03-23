<?php 

class Hello {

    function privet($name="Антон")
    {
        return "Привет,".$name;
    } 
    
    
    function hello_par($name="John",$hello="Hi")
    {
        return $hello.",".$name."!";
    }

}