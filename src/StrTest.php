<?php

namespace String;

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testExo1()
    {
        $string = (string) Str::on('my_string')
            ->replace('_', ' ')
            ->ucwords()
            ->replace(' ', '')
            ->lcfirst();

        $this->assertSame('myString', $string);

    }

    public function testExo2(){

               $string = Str::on('my_string')->camelCase()->toString();
               $this->assertSame('myString', $string);
    }
}
?>