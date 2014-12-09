<?php 
    class Breed extends Eloquent{
        public $timestamps = false;//Deshabilita el timestamp field

        public function cats(){
            return $this->hasMany('Cat');
        }
    }
 ?>