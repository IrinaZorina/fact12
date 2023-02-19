<?php
/*решение через классы*/
class Figure
{
//    поле
    public $lengh;

//2 метода (периметр, площадь)
    public function perimeter()
    {
        return $this->lengh;
    }

    public function acreage()
    {
        return $this->lengh;
    }
}

class Square extends Figure
{
    public function perimeter()
    {
        return parent::perimeter() * 4;
    }
    public function acreage()
    {
        return parent::acreage()*parent::acreage();
    }
}

class Circle extends Figure
{
    private $pi=3.14;
    public function perimeter()
    {
        return parent::perimeter() * 2 *$this->pi;
    }
    public function acreage()
    {
        return parent::acreage()*parent::acreage()*$this->pi;
    }

}


///*реализация с помощью интерфейсов */
//
//interface A {
//    public function acreage();
//    public function perimeter();
//}
//
//class Square implements A
//{
//    public $lengh;
//    public function acreage()
//    {
//        return $this->lengh ** 2;
//
//    }
//
//    public function perimeter()
//    {
//        return $this->lengh * 4;
//
//    }
//
//}