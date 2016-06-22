<?php

use \MidoriKocak\Common;

class ContentTest extends \PHPUnit_Framework_TestCase
{
    public function setup()
    {
    }

    public function testCreateItem()
    {
        $data = [
            'id' => 1,
            'created' => time(),
            'updated' => time(),
            'content' => 'myContent',
            'title' => 'myTitle',
        ];
        $content = new Common\Content($data);
        $this->assertTrue($content != null);
    }
}
