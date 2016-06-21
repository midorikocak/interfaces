<?php
/**
 * Created by PhpStorm.
 * User: mtkocak
 * Date: 21/06/16
 * Time: 05:26
 */

namespace MidoriKocak;


interface ProductListInterface
{
    public function addProduct(ProductInterface $product, int $amount);
    public function removeProduct(ProductInterface $product, int $amount = 1);
    public function getCreated():int;
    public function getUpdated():int;
}