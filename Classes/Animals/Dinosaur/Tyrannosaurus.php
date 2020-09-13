<?php

namespace Classes\Animals\Dinosaur;

class Tyrannosaurus{

    public function viewAction(){
        return get_class($this);
    }
}

