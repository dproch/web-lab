<?php
namespace WebLab\Models;
/**
 * @property integer $id
 * @property string $uri
 * @property string $filename
 * @property string $title
 * @property string $alt
 */
class Image extends \WebLab\Model {
    protected $fillable = array('alt', 'title');
}