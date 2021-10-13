<?php
    class hinhhoc{
        var $tenhinh;
        var $socanh;
        public function nhap(){
            $this->tenhinh = 'Ten Hinh';
            $this->socanh = 0;
        }
        public function inKQ(){
            echo $this->tenhinh.'<br>';
            echo $this->socanh.'<br>';
        }
    }
?>