<?php


class QuadraticEquation
{
    private $a;
    private $b;
    private $c;
    public function __construct($newA,$newB,$newC)
    {
        $this->a = $newA;
        $this->b = $newB;
        $this->c = $newC;
    }

    public function getA()
    {
        return $this->a;
    }


    public function setA($value)
    {
        $this->a = $value;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }


    public function setB($value)
    {
        $this->b = $value;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }

    public function setC($value)
    {
        $this->c = $value;
    }
    function getDiscriminant(){
         return ($this->b*$this->b) - (4 * $this->a * $this->c);

    }
    function getRoot1(){
        return ((-$this->b + sqrt($this->getDiscriminant()))/(2*$this->a));
    }
    function getRoot2(){
        return ((-$this->b - sqrt($this->getDiscriminant()))/(2*$this->a));

    }

}