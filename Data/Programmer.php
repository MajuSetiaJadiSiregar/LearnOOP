<?php

class Programmer {
    public string $name;
     
    public function __construct(string $name){
        $this->name = $name;
    }
}

class BackendPro extends Programmer {

}
class FrontendPro extends Programmer {

}

class Company {
    public Programmer $programmer;
}