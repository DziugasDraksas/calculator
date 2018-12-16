<?php
/**
 * Created by PhpStorm.
 * User: Dziugas
 * Date: 12/14/2018
 * Time: 11:00 PM
 */

namespace App;


class Substraction
{
    private $operands;

    public function calc(){
        $result = 0;
        $first = true;
        foreach($this->getOperands() as $operand){
            if ($first){
                $first = false;
                $result = $operand;
            }else{
                $result = $result - $operand;
            }

        }
        return $result;
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
     * @return Substraction
     */
    public function setOperands($operands)
    {
        $this->operands = $operands;
        return $this;
    }


}