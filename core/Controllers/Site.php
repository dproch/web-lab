<?php

namespace WebLab\Controllers;

class Site extends \WebLab\Controller {

    public function doIndex(){
        echo $this->app->getSiteName()."<br/>";
        echo "Hello world!";
    } 
    public function doAdmin(){
        echo $this->app->getSiteName()."<br/>";
        echo "Hello admin!";
    } 
    
}
