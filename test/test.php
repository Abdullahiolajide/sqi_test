<?php
class Fruit{
    public $name = '';
    public $color = '';
    public $moredetail = '';
    public function __construct($name, $color, $moredetail)
    {
        $this->$name = $name;
        $this->$color = $color;
        $this->$moredetail = $moredetail;
        echo $this->$name.' is a fruit it is '.$this->$color.' in color'.$this->$moredetail;
        echo '<br/>'
;    }
}

$mango = new Fruit('Mango', 'yellow', ', it takes abour 2-3 years for a tree fo produce it and had only one seed');
$orange = new Fruit('Orange', 'orange', ', it has many seed and takes about 2-3 years to be produced');
$watermelon = new Fruit('watermelon', 'red', ', it does not grow on trees and takes about 3-6 months to be produced');
$apple = new Fruit('Mango', 'green', ', it grows on trees,this fruit cannot be grown in Nigeria and it also had many seeds');
$grape = new Fruit('Mango', 'purple', ', it doesnt grow in nigeria and take some months to be produced ');
?>