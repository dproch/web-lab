<?php

namespace WebLab\Controllers;

class Site extends \WebLab\Controller {

    public function doIndex(){
       $this->title = "URA!";
       $this->render("site/index",['content'=>$this->app->getBaseUrl()]);       
    } 
    public function doAdmin(){
        echo $this->app->getSiteName()."<br/>";
        echo "Hello admin!";
    } 
    
}
