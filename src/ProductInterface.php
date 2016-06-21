<?php

namespace MidoriKocak;


/**
 * Interface ProductInterface
 * @package MidoriKocak
 */
interface ProductInterface
{
    /**
     * We can have currency, amount and tax percentage.
     *
     * @return PriceInterface
     */
    public function getPrice():PriceInterface;

    public function getTitle():string;
    public function getDescription():string;
    public function getSKU():string;
    public function getId():string;
}