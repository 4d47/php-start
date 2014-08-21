<?php
namespace App;

class Hello extends \Http\Resource
{
    public static $path = '/(:name(.:format))';
    public $name;
    public $format;

    public function get()
    {
        if (empty($this->name)) {
            $this->lastModified = strtotime('2014-01-01 00:00:00');
        }
    }

    public function render()
    {
        switch($this->format) {
        case 'json':
            header('Content-Type: application/json');
            echo json_encode($this);
            break;
        case 'html-part':
            static::$layout = false;
            parent::render();
            break;
        case 'html':
            throw new \Http\MovedPermanently(static::link($this->name));
        default:
            parent::render();
        }
    }
}
