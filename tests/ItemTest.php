<?php

use \MidoriKocak\Common;

class ItemTest extends \PHPUnit_Framework_TestCase
{
    public function setup()
    {
    }

    public function testCreateItem()
    {
        $data = ['id' => 1, 'created' => time(), 'updated' => time()];
        $item = new MidoriKocak\Common\Item($data);
        $this->assertTrue($item != null);
    }

    public function testPrint()
    {
        $time = time();
        $data = ['id' => 1, 'created' => $time, 'updated' => $time];
        $item = new Common\Item($data);
        $string = '{"id":"1","updated":'.$time.',"created":'.$time.'}';
        ob_start();
        echo $item;
        $output = ob_get_clean();
        $this->assertEquals($output, $string);
    }
}
