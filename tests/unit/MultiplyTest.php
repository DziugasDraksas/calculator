<?php
/**
 * Created by PhpStorm.
 * User: Dziugas
 * Date: 12/14/2018
 * Time: 10:38 PM
 */



class MultiplyTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function multTwoInts()
    {

        $multiply = new \App\Multiply;

        $multiply->setOperands([5,5]);

        $this->assertEquals(25, $multiply->calc());
    }

}