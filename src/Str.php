<?php

namespace String;


class Str
{
    private $string;

    public static function on($string)
    {
        return new Str($string);
    }

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function replace($search, $replace)
    {
        $this->string = str_replace($search,$replace, $this->string);

        return $this;
    }

    public function ucwords()
    {
        $this->string = ucwords($this->string);
        return $this;
    }

    public function lcfirst()
    {
        $this->string = lcfirst($this->string);
        return $this;
    }

    public function strlower(){
        $this->string = strtolower($this->string);
        return $this;
    }

    public function __toString()
    {
        return $this->string;
    }

    public function toCamelCase(){
                if(preg_match('/[-,_, ]/', $this->string)) {
                        return $this
                            ->strlower()
                            ->replace('-', ' ')
                            ->replace('_', ' ')
                            ->ucwords()
                            ->replace(' ', '')
                            ->lcfirst();

         } else {
                        return $this;
         }
     }

    public function toString(){
                return $this->string;
     }

}