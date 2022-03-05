<?php

class Casetwo
{
    private $ngalan;
    private $edad;
    private $favcolor;

    public function setngalan($ngalan)
    {
        $this->ngalan = $ngalan;
    }

    public function setedad($edad)
    {
        $this->edad = $edad;
    }

    public function setfavcolor($favcolor)
    {
        $this->favcolor = $favcolor;
    }

    public function setcombIn($ngalan,$edad,$favcolor)
    {
        $this->ngalan = $ngalan;
        $this->edad = $edad;
        $this->favcolor = $favcolor;

    }


    public function getngalan()
    {
        if(!ctype_alpha($this->ngalan))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->ngalan;
    }

    

    public function getedad()
    {
        if(!is_numeric($this->edad))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->edad;
    }
      
    public function getfavcolor()
    {
        if(!ctype_alpha($this->favcolor))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->favcolor;
    }

    public function getcombIn()
    {
        return $this->ngalan;
        return $this->edad;
        return $this->favcolor;
    }

}