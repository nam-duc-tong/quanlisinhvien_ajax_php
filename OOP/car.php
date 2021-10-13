<?php
class car{
    public $name;
    public $color;
    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    public function running(){
        echo $this->name.'-color-'.$this->color.'- is running';
    }
    public function stopping(){
        echo $this->name. '- is stopping';

    }
}

?>