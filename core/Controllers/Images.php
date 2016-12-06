<?php

namespace WebLab\Controllers;

use WebLab\Models\User as User;
use WebLab\Components\Menu as Menu;
use Intervention\Image\ImageManager;
use WebLab\Models\Image;

class Images extends \WebLab\Controller {

    public function doIndex() {
        $images = Image::all();
        $this->title = "Изображения";
        $this->render("images/index", ['images'=> $images ]);
    }
    public function doAdd() {
        $this->title = "Добавить | Изображение";
        if (isset($_POST['alt']) && isset($_FILES)) {
            $fname = time() . "_" . $_FILES['image']['name'];
            $model = new Image();
            $model->filename = $fname;
            $model->uri = "images/origin/" . $fname;
            $model->alt = $_POST["alt"];
            $model->title= $_POST["title"];
            // сохранение данных    
            if ($model->save()) {
                $fmanager = new ImageManager(array('driver' => 'imagick'));
                $image = $fmanager->make($_FILES['image']['tmp_name']);
                $image->save("./../web/images/origin/" . $fname);
                $image->resize(1024, 768);
                $image->save("./../web/images/middle/" . $fname);
                $image->resize(640, 480);
                $image->save("./../web/images/small/" . $fname);
                unlink($_FILES['image']['tmp_name']);    
                $this->redirect("images/index");
            }
        }
        $this->render("images/form");
    }
}
