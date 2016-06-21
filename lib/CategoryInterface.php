<?php
/**
 * Created by PhpStorm.
 * User: mtkocak
 * Date: 21/06/16
 * Time: 06:12
 */

namespace MidoriKocak\Interfaces;


interface CategoryInterface extends ItemInterface
{
    public function getDescription():string;
    public function addItem(ItemInterface $item):bool;
    public function removeItem(ItemInterface $item):bool;
}