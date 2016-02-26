<?php

namespace WebLab\Controllers;

use WebLab\Models\User as User;
use WebLab\Components\Menu as Menu;

class Site extends \WebLab\Controller {

    public function doIndex() {
        $this->title = "Главная";
        $this->render("site/index", ['content' => $this->app->getBaseUrl()]);
    }

    public function doAdmin() {
        echo $this->app->getSiteName() . "<br/>";
        echo "Hello admin!";
    }

    public function doUsers() {
        $users = User::all();
        $this->title = "Пользователи";
        $this->render("site/users", ["users" => $users]);
    }

}
