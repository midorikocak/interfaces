<?php

/**
 * Created by PhpStorm.
 * User: mtkocak
 * Date: 21/06/16
 * Time: 06:20
 */

namespace MidoriKocak\Common;

use MidoriKocak\Interfaces\ContentInterface;
use MidoriKocak\Interfaces\UserInterface;

class Content extends Item implements ContentInterface
{
    protected $author;
    protected $content;
    protected $title;

    public function getContent():string
    {
        return $this->content;
    }

    protected function setData(array $data):bool{
        parent::setData($data);
        $this->title = $data['title'];
        $this->content = $data['content'];
        return true;
    }

    public function getSummary(int $chars):string
    {
        return substr($this->getContent(), 0, $chars);
    }

    public function getAuthor():UserInterface
    {
        return $this->author;
    }

    public function __toString():string
    {
        $arrayToPrint = [];
        $arrayToPrint['id'] = $this->getId();
        $arrayToPrint['title'] = $this->getTitle();
        $arrayToPrint['content'] = $this->getContent();
        $arrayToPrint['updated'] = $this->getUpdated();
        $arrayToPrint['created'] = $this->getCreated();
        return json_encode($arrayToPrint, true);
    }

    public function getTitle():string
    {
        return $this->title;
    }
}