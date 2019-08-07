<?php

namespace PersonalNumberGenerator;


interface PersonalNumberInterface
{

    /**
     * @return string
     */
    public function generate(): string ;
}