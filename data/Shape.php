<?php

namespace Data{
    class Shape
    {
        public function getCorner(){
            return 0;
        }
    }

    class Rectangle extends Shape
    {
        public function getCorner(){
            return 4;
        }

        /**
         * untuk mengakses fungcion yang ada di parrent, namum telah kita override 
         * kita bisa menggunakan keyword parent::
         */
        public function getParentCorner():int
        {
            return parent::getCorner();
        }
    }
}