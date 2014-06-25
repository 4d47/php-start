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
            $this->lastModified = '2014-01-01 00:00:00';
        }
        return $this;
    }

    public function render($data)
    {
        switch($this->format) {
        case 'json':
            header('Content-Type: application/json');
            echo json_encode($data);
            break;
        case 'html-part':
            static::$layout = false;
            parent::render($data);
            break;
        case 'html':
            throw new \Http\MovedPermanently(static::link(array('name' => $this->name)));
        default:
            parent::render($data);
        }
    }
}
