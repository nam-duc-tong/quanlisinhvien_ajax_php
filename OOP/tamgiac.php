<?php
    class tamgiac extends hinhhoc{
        var $a;
        var $b;
        var $c;
        public function nhap(){
            $this->tenhinh = 'Hinh tam giac';
            echo $this->tenhinh."<br>";
            $this->socanh = 3;
            echo $this->socanh."<br>";
            $this->a = 5;
            $this->b = 7;
            $this->c = 8;
        }
        public function tinhchuvi(){
            echo 'chu vi tam giac '.($this->a+$this->b+$this->c)."<br>";
        }
        public function dientich(){
            echo 'dien tich tam giac ';
        }
    }
?>