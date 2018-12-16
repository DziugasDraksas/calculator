<?php
/**
 * Created by PhpStorm.
 * User: Dziugas
 * Date: 12/14/2018
 * Time: 10:38 PM
 */



class DivideTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function multTwoInts()
    {

        $divide = new \App\Divide;

        $divide->setOperands([5,5]);

        $this->assertEquals(1, $divide->calc());
    }

}