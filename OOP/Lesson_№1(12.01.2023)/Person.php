<!--делаем класс наследуемыми от класса People-->
<?php


class Person extends People
{
    /*задаем наследнику новые свойства*/
    public $surname;

    public function __construct($name, $age, $surname)/* добавили параметр $surname*/
    {
        // $this->name = $name;
        // $this->age = $age;
        /*можно было определить параметры age и name так*/
        parent::__construct($name, $age);
        $this->surname = $surname;/* это пример полиморфизма*/
        /*а можно сослаться на родителя, ссылаемся на родительский класс*/
    }

    /*переопределяем метод go()*/
    public function go()
    {
        echo parent:: go() . "surname {$this->surname}";
    }

}