<?php
/**
 * Created by PhpStorm.
 * User: mtkocak
 * Date: 21/06/16
 * Time: 05:14
 */

namespace MidoriKocak\Interfaces;


interface ContentInterface extends ItemInterface
{
    /**
     * We can ask to object it's title only.
     *
     * @return string
     */
    public function getTitle():string;
    public function getContent():string;
    public function getSummary(int $chars):string;
    public function getAuthor():UserInterface;
}