# Набор функций для приветствия
## автор: Валерий
### версия 1.0.0

## Возможности библиотеки
1. функция hello() возвращает "привет" любому переданному имени
2. hello_par() состоит из двух параметров 1)имя, 2) слово приветствия

# Установка

Установка через composer
```
composer require walerij/hello
```
-------------------------------

или отредактировать composer.json
```
"require":
{
    "walerij/hello":"*"
}

```
и запустить команду
```
composer update
```

# Быстрый старт
```php
require "vendor\autoload.php";

$h= new Hello();

echo $h->hello("Денис"); //Привет, Денис

echo $h->hello_par("Виктор","Добрый день"); //Добрый день, Виктор!
```