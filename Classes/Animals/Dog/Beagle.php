<?php

namespace Classes\Animals\Dog;

class Beagle{
    public function viewAction(){
        return get_class($this);
    }


}