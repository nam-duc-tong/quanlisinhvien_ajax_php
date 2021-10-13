<?php
    class hcn extends hinhhoc{
        var $a;
        var $b;
        public function nhap(){
            $this->tenhinh = 'Hinh chu nhat';
            echo $this->tenhinh."<br>";
            $this->socanh = 4;
            $this->a = 5;
            $this->b = 4;
        }
        public function tinhchuvi(){
            echo 'chu vi hcn '.(2*($this->a+$this->b)).' cm';
        }
        public function dientich(){
            echo 'dien tich hcn '.($this->a*$this->b).'cm^2';
        }
    }
?>