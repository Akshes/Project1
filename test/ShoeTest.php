<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ShoeTest extends TestCase
{


    public function testArray() {


        $shoe = new Nike();

        $ShoeColors= $shoe->shoeColor();
        $this->assertArrayHasKey('one', $ShoeColors);
        $this->assertArrayHasKey('two', $ShoeColors);
        $this->assertArrayHasKey('three', $ShoeColors);


    }
)