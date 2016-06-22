<?php
/**
 * Created by PhpStorm.
 * User: mtkocak
 * Date: 21/06/16
 * Time: 08:09.
 */

namespace MidoriKocak\Common;

use MidoriKocak\Interfaces\CategoryInterface;
use MidoriKocak\Interfaces\ItemInterface;

class Category extends Item implements CategoryInterface
{
    protected $title;
    protected $description;
    protected $items;

    protected function setData(array $data):bool
    {
        parent::setData($data);
        $this->title = $data['title'];
        // description is optional, but is always set
        $this->description = $data['description'] ?? '';

        return true;
    }

    protected function getData():array
    {
        $data = parent::getData();
        $data['title'] = $this->title;
        $data['description'] = $this->description;

        if (isset($this->items)) {
            foreach ($this->items as $id => $item) {
                $data[$id] = $item->getData();
            }
        }

        return $data;
    }

    public function getTitle():string
    {
        return $this->title;
    }

    public function getDescription():string
    {
        return $this->description;
    }

    public function addItem(ItemInterface $item):bool
    {
        if (!isset($this->items)) {
            $this->items = [];
        }
        if (!isset($this->items[$item->getId()])) {
            $this->items[$item->getId()] = $item;

            return true;
        }

        return false;
    }

    public function removeItem(ItemInterface $item):bool
    {
        if (isset($this->items[$item->getId()])) {
            unset($this->items[$item->getId()]);

            return true;
        }

        return false;
    }
}
