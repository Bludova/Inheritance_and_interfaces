<?php
abstract class Product
{
    private $title;
    private $price;
    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function getTitle()
    {
        return '"' . $this->title . '"';
    }

    public function getPrice()
    {
        return $this->price;
    }

    abstract protected function getDescription();

    public function getFullDescription()
    {
        return "Цена товара {$this->price}. <br />" . $this->getDescription();
    }

}

// interface BeginMove
// {
//   public function move() ;
// }


// trait CurrentSpeed
// {
//     private $currentSpeed;

//     public function getCurrentSpeed()
//     {
//         return $this->currentSpeed;
//     }

//     public function setCurrentSpeed($pages)
//     {
//         $this->currentSpeed = $currentSpeed;

//         return $this;
//     }

// }

class Car extends Product  //implements BeginMove
{
    // use CurrentSpeed;
    private $color;
    private $year;
    private $currentSpeed;
    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    protected function getDescription()
    {
        return "Издан {$this->getYear()} году";
    }


    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;

        return $this;
    }
}




class Televisions extends Product
{
    private $color;
    private $year;

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    protected function getDescription()
    {
        return "Издан {$this->getYear()} году";
    }

}


class Pens extends Product
{
    private $color;
    private $year;

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    protected function getDescription()
    {
        return "Издана {$this->getYear()}";
    }

}

class Birds extends Product
{
    private $color;
    private $year;

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    protected function getDescription()
    {
        return "Возраст {$this->getYear()} год";
    }

}


class Goods extends Product
{
    private $color;
    private $year;

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    protected function getDescription()
    {
        return "Срок годности {$this->getYear()}";
    }

}


$bmwX5 = new Car('BMW X5', '2 799 000 руб');
$bmwX5
    ->setCurrentSpeed('0')
    ->setColor('Черная')
    ->setYear('2015');
    
$audiTt = new Car('Audi TT', '2 408 000 руб');
$audiTt
    ->setCurrentSpeed('0')
    ->setColor('Белая')
    ->setYear('2012');

$samsung = new Televisions('Samsung', '25000 руб');
$samsung
->setColor('Черный')
->setYear('2017');

$pilot = new Pens('Pilot', '50 руб');
$pilot
->setColor('Синий')
->setYear('2017');

$duck = new Birds('Bashkir Colored', '250 руб');
$duck
->setColor('Colored')
->setYear('1');

$tea = new Goods('Greenfield', '120 руб');
$tea
->setColor('Зеленый')
->setYear('1 год');

$milk = new Goods('Буренка', '80 руб');
$milk
->setColor('Белый')
->setYear('7 дней');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Наследование и интерфейсы</title>
</head>
<body>
<h1>Наследование и интерфейсы</h1>
<p><i>Полиморфизм</i> - это способность классов предоставлять единый программный интерфейс при различной реализации.</p>
<p>При помощи механизма наследования мы можем создать новые типы данных не "с нуля", 
а взяв за основу некоторый уже существующий класс, который в этом случии будет называться суперклассом.</p>
<p> Интерфейс описывает свойства. Абстрактный класс же описывает сущность. 
Интерфейсы надо использовать, когда классы, которые должны предоставлять 
один и тот же интерфейс, не должны быть (или не могут быть) связаны иерархически.
Кроме того, если нужно предоставить несколько интерфейсов</p>
<?php
echo 'Наш автомобиль:'. $bmwX5->getTitle().'<br />';
echo $bmwX5->getFullDescription() . '<br />';
echo 'Цвет: '. $bmwX5->getColor().'<br />';
echo 'Текущая скорость: '. $bmwX5->getCurrentSpeed().'<br />';
echo '<hr>';

echo 'Наш автомобиль:'. $audiTt->getTitle().'<br />';
echo $audiTt->getFullDescription() . '<br />';
echo 'Цвет: '. $audiTt->getColor().'<br />';
echo 'Текущая скорость: '. $audiTt->getCurrentSpeed().'<br />';
echo '<hr>';

echo 'Наш телевизор:'. $samsung->getTitle().'<br />';
echo $samsung->getFullDescription() . '<br />';
echo 'Цвет: '. $samsung->getColor().'<br />';
echo '<hr>';

echo 'Наша ручка:'.$pilot->getTitle().'<br />';
echo $pilot->getFullDescription() . '<br />';
echo 'Цвет: '. $pilot->getColor().'<br />';
echo '<hr>';

echo 'Наша птица:'.$duck->getTitle().'<br />';
echo $duck->getFullDescription() . '<br />';
echo 'Цвет: '. $duck->getColor().'<br />';
echo '<hr>';

echo 'Наш продукт:'.$tea->getTitle().'<br />';
echo $tea->getFullDescription() . '<br />';
echo 'Цвет: '. $tea->getColor().'<br />';
echo '<hr>';

echo 'Наш продукт:'.$milk->getTitle().'<br />';
echo $milk->getFullDescription() . '<br />';
echo 'Цвет: '. $milk->getColor().'<br />';
?>
</body>
</html>
