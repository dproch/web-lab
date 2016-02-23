<?php
namespace WebLab;

use \WebLab\Core as Core;
class Controller {
    /**
     * Core instance
     * @var Core 
     */
    protected $app;
    
    /**
     * Init $app property
     * @param Core $core
     */
    public function init(Core $core ){
         $this->app = $core;
    }
    
}

