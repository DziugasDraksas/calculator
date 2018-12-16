<?php
/**
 * Created by PhpStorm.
 * User: Dziugas
 * Date: 12/14/2018
 * Time: 11:00 PM
 */

namespace App;


class Addition
{
    private $operands;

    public function calc(){
        return array_sum($this->operands);
    }

    /**
     * @return mixed
     */
    public function getOperands()
    {
        return $this->operands;
    }

    /**
     * @param mixed $operands
     * @return Addition
     */
    public function setOperands($operands)
    {
        $this->operands = $operands;
        return $this;
    }


}