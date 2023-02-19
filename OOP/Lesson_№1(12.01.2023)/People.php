<?php


class People
{
    public $name;
    public $age;
//protected $age;/*если age делаем PROTECTED то смотри файл видео+ДЗ*/
//private $age;/*если age делаем PRIVATE то смотри файл видео+ДЗ*/

    /*есть возможность задать(проинициаизировать) переменные прям в классе*/
    //public $name="tom";
    //public $age=15;

    /*напишем конструктор*/
    public function __construct($name, $age)
        /*свойства которые хотим переопределить($name,$age)*/
    {
        $this->name = $name;/*входной элемент нашего коструктора*/;
        $this->age = $age;

    }

    public function go()
    {
        //echo "GO!";
        /*что бы обратиться к текущему экземпляру класса*/
        //return ++$this->age;/*возраст будет увеличиваться*/
        //return "name {$this->name}"; /*выводим имя стоит обратить внимание что name без нака $, птому что обращаемся ченрез текущий обьект!!!! */
        echo "name {$this->name}"; /*вывели методом echo*/
    }
}