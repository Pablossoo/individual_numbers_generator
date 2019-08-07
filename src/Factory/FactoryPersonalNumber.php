<?php


namespace Factory;


use PersonalNumberGenerator\BSN;
use PersonalNumberGenerator\PersonalNumberInternationalization;
use PersonalNumberGenerator\Pesel;
use PersonalNumberGenerator\SVN;

class FactoryPersonalNumber
{
    public function create(string $nationalizationNumber): PersonalNumberInternationalization
    {

        switch ($nationalizationNumber) {
            case 'Pesel':
                $personalNumber = new Pesel();
                break;
            case 'BSN':
                $personalNumber = new BSN();
                break;
            case 'SVN':
                $personalNumber = new SVN();
                break;
            default:
                throw new \Exception("Unknown type personal number");

        }

        return new PersonalNumberInternationalization($personalNumber);


    }
}