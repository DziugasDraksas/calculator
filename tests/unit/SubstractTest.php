<?php
/**
 * Created by PhpStorm.
 * User: Dziugas
 * Date: 12/14/2018
 * Time: 10:38 PM
 */



class SubstractionTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function subTwoInts()
    {

        $substraction = new \App\Substraction;

        $substraction->setOperands([5,5]);

        $this->assertEquals(0, $substraction->calc());
    }

}