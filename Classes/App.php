<?php
namespace Classes;
final class App {
    public function randomViewAction($random_Class){
        return $random_Class->viewAction();

    }
}