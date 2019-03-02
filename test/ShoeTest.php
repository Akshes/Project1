<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CarTest extends TestCase
{


    public function testArray() {


        $car = new Nike();

        $CarColors = $car->shoeColor();
        $this->assertArrayHasKey('one', $shoeColors);
        $this->assertArrayHasKey('two', $shoeColors);
        $this->assertArrayHasKey('three', $shoeColors);


    }

    public function testCanCreateNike(): void
    {
        $shoe = new Nike();

        $this->assertInstanceOf(Nike::class, $shoe);
    }

    public function testCanCreateUnderarmour(): void
    {
        $shoe = new Underarmour();

        $this->assertInstanceOf(Underarmour::class, $shoe);
    }

    public function testCanCreateBalenciaga(): void
    {
        $shoe = new Balenciaga();

        $this->assertInstanceOf(Balenciaga::class, $shoe);
    }

    public function testShoeMenOrWomen(): void
    {
        $this->assertTrue(
            method_exists(shoe::class, 'MenOrWomen')
        );
    }

    public function testTypeOfShoe(): void
    {
        $this->assertTrue(
            method_exists(shoe::class, 'TypeOfShoe')
        );
    }

    public function testNikeMenOrWomen(): void
    {
        $Nike = new Nike();

        $this->assertEquals(1, $Nike->MenOrWomen());

    }

    public function testNikeTypeOfShoe(): void
    {
        $Nike= new Nike();

        $this->assertEquals(-1, $Nike->TypeOfShoe());

    }

    public function testUnderarmourMenOrWomen(): void
    {
        $Underamour = new Underamour();

        $this->assertEquals(1, $Underamour->MenOrWomen());

    }

    public function testUnderarmourTypeOfShoe(): void
    {
        $Underarmour = new Underarmour();

        $this->assertEquals(-1, $Underarmour->TypeOfShoe());

    }
    public function testBalenciagaMenOrWomen(): void
    {
        $Balenciaga = new Balenciaga();

        $this->assertEquals(1, $Balenciaga->MenOrWomen());

    }

    public function testBalenciagaTypeOfShoe(): void
    {
        $Balenciaga = new Balenciaga();

        $this->assertEquals(-1, $Balenciaga->TypeOfShoe());

    }

)