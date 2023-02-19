<?php


class People
{
    public $name;
    public static $age = 19; /*можем сделать поле статическим (static),
 распространяется не на отдельный экземпляр а на класс в целом*/

    function __construct()
        /*свойства которые хотим переопределить пример:($name,$age)*/
    {
        //$this->name = $name;/*доступно свойство this - потому что нет параметра static*/;
       //$this->age = $age;

    }

    /*static - статический метод с экземпляром класса не работате!!!!!!!!!!!!!!!!!!!!!!!!!!!*/


    static function hello() /*на методы то же распространяеться static*/
    {
        // $this->name = $name /*не дает поставить this потому что static и еще this это ссылка на экземпляр класса!!!!*/
        echo "Hello!"; /*вывели методом echo*/
    }
}

/*ИНТЕРФЕЙС*/

interface A{
    public function hello();
    public function bye();
}


class B implements A{/*Создаем класс который подлкючиться к данному интерфейсу "A" */

    public function hello()
    {
        echo "hello B";
    }
    public function bye()
    {
        echo "bye B";
    }
}
class D implements A{
    public function hello()
    {
        echo "hello D";
    }
    public function bye()
    {
        echo "bye D";
    }
}
