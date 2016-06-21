<?php
/**
 * Created by PhpStorm.
 * User: mtkocak
 * Date: 21/06/16
 * Time: 06:21
 */

namespace MidoriKocak\Common;


use MidoriKocak\Interfaces\ItemInterface;

class Item implements ItemInterface
{
    protected $id;
    protected $created;
    protected $updated;

    public function __construct(array $data)
    {
        $this->setData($data);
    }

    protected function setData(array $data):bool
    {
        $this->id = $data['id'];
        $this->created = $data['created'];
        $this->updated = $data['updated'];
        return true;
    }

    protected function getData():array
    {
        $data = [];
        $data['id'] = $this->getId();
        $data['updated'] = $this->getUpdated();
        $data['created'] = $this->getCreated();
        return $data;
    }

    public function getId():string
    {
        return $this->id;
    }

    public function getCreated():int
    {
        return $this->created;
    }

    public function getUpdated():int
    {
        return $this->updated;
    }

    public function __toString():string
    {
        return json_encode($this->getData(), true);
    }
}