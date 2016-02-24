<?php

namespace WebLab;

use \WebLab\Core as Core;

class Controller {

    /**
     * Core instance
     * @var Core 
     */
    protected $app;
    protected $menu = [];
    protected $title = "";

    /**
     * Init $app property
     * @param Core $core
     */
    public function init(Core $core) {
        $this->app = $core;
    }

    public function render($name, $data = array(), $return = false) {
        $twig = $this->app->getTwig();
        $res = $twig->render("$name.tpl.php", array_merge(["title" => $this->title], $data));
        if ($return) {
            return $res;
        }
        echo $res;
    }

}
