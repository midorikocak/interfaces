<?php

namespace MidoriKocak\Interfaces;

/**
 * Interface ProductInterface.
 */
interface ProductInterface extends ItemInterface
{
    /**
     * We can have currency, amount and tax percentage.
     *
     * @return PriceInterface
     */
    public function getPrice():PriceInterface;

    public function getContent():ContentInterface;

    public function getSKU():string;
}
