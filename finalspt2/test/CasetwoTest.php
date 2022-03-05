<?php
require_once __DIR__ . '/../src/Casetwo.php';

class CasetwoTest extends \PHPUnit\Framework\TestCase
{
    public function testGetngalan() //1st test case
    {
        $simple2 = new Casetwo();
        $simple2->setngalan('Haeil');
        $this->assertEquals($simple2->getngalan(), 'Haeil');
    }

    public function testGetedad()
    {
        $simple2 = new Casetwo();
        $simple2->setedad(20);
        $this->assertEquals($simple2->getedad(), 20);
    }

    public function testfavcolor()
    {
        $simple2 = new Casetwo();
        $simple2->setfavcolor('Violet');
        $this->assertEquals($simple2->getfavColor(), 'Violet');
    }

    public function testGetngalanCheckString()
    {
        $simple2 = new Casetwo();
        $simple2 ->setngalan('Haeil');
        $this->assertIsString($simple2->getngalan(), 'Haeil');
    }

    public function testGetedadCheckInt()
    {
        $simple2 = new Casetwo();
        $simple2->setedad(20);
        $this->assertIsInt($simple2->getedad(), 20);
    }

    public function testGetedadCheckNumeric()
    {
        $simple2 = new Casetwo();
        $simple2->setedad(20);
        $this->assertIsNumeric($simple2->getedad(), 20);
    }
    
    public function testfavcolorCheckString()
    {
        $simple2 = new Casetwo();
        $simple2->setfavColor('Violet');
        $this->assertIsString($simple2->getfavcolor(), 'Violet');
    }

    public function testGetcombIn()
    {
        $simple2 = new Casetwo();
        $simple2->setcombIn('Haeil', 20, 'Violet');
        $this->assertEquals($simple2->getcombIn(), 'Haeil', 20, 'Violet');
    }

}