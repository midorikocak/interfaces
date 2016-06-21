<?php
/**
 * Created by PhpStorm.
 * User: mtkocak
 * Date: 21/06/16
 * Time: 05:14
 */

namespace MidoriKocak;


interface ContentInterface
{
    public function getId():string;
    public function getTitle():string;
    public function getContent():string;
    public function getSummary():string;
    public function getDescription():string;
    public function getCreated():int;
    public function getUpdated():int;
}