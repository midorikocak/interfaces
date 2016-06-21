<?php
/**
 * Created by PhpStorm.
 * User: mtkocak
 * Date: 21/06/16
 * Time: 04:44
 */

namespace MidoriKocak\Interfaces;


/**
 * Interface PriceInterface
 * @package MidoriKocak
 */
interface PriceInterface
{
    /**
     * @return string
     */
    public function getCurrency():string;

    /**
     * Is integer, the smallest amount is used. Like Cents.
     * TODO: We are going to use Money/money library soon.
     *
     * @return int
     */
    public function getAmount():int;

    /**
     * Is the percentage used for taxation.
     *
     * @return int
     */
    public function getTax():int;
}