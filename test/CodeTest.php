<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CodeTest extends TestCase
{
    public function testDataDirectory(){
        $this->assertDirectoryExists('data');
    }
    public function testCSVFileExists() {
        $this->assertFileExists('data/data.csv');
    }

    public function testSrcDirectory(){
        $this->assertDirectoryExists('src');
    }
    public function testTestDirectory(){
        $this->assertDirectoryExists('test');
    }

    public function testReadCSVtoArrayExists(){
        $this->assertTrue();
            method_exists(File::class,'readCSVtoArray');
    }
    public function testReadCSVtoArray() {

        $records = File::readCSVtoArray("data/data.csv",'Shoe');
        print_r($records);

    }
}
