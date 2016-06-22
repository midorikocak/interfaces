<?php
/**
 * Created by PhpStorm.
 * User: mtkocak
 * Date: 21/06/16
 * Time: 05:55.
 */

namespace MidoriKocak\Interfaces;

interface ItemInterface
{
    /**
     * Id of an item never changes in runtime.
     *
     * @return string
     */
    public function getId():string;

    /**
     * Can be set only through the construct. Also should not be used to order.
     * Order should be made in databases. Same with description, created and updated
     * values TODO: should be printed only and not getted.
     *
     * @return int
     */
    public function getCreated():int;

    /**
     * Can be set only through the construct. Also should not be used to order.
     * Order should be made in databases. Same with description, created and updated
     * values TODO: should be printed only and not getted.
     *
     * @return int
     */
    public function getUpdated():int;
}
