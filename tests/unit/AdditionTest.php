<?php
/**
 * Created by PhpStorm.
 * User: Dziugas
 * Date: 12/14/2018
 * Time: 10:38 PM
 */



class AdditionTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function addsTwoInts()
    {

        $addition = new \App\Addition;

        $addition->setOperands([5,5]);

        $this->assertEquals(10, $addition->calc());
    }

}