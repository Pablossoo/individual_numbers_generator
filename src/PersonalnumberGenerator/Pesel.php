<?php

namespace PersonalNumberGenerator;

class Pesel implements PersonalNumberInterface
{
    /**
     * @return string
     */
    public function generate(): string
    {
        $weightToGenerateLastNumber = [1, 3, 7, 9, 1, 3, 7, 9, 1, 3];
        $centuries = ['18' => 80, '20' => 20, '21'=> 40, '22' => 60];
        $numberSeries = null;
        $monthRand = rand(1,12);
        $fullYear = rand(1800,2299);

        $subStrLastDigitFromFullYear = (string)substr($fullYear,0,-2);
        // for 1900-1993
        $month = str_pad($monthRand,2,'0',STR_PAD_LEFT);
        $day = cal_days_in_month(CAL_GREGORIAN,$month,$fullYear);
         //for 1800-2299 witchout 1900-1999
        if(array_key_exists($subStrLastDigitFromFullYear,$centuries))
        {
            $month = $centuries[$subStrLastDigitFromFullYear] + $monthRand;
        }
        foreach (range(1,4) as $number ) {
            $numberSeries .= (string)rand(0,9);
        }
        $pesel = (string)substr($fullYear, -2) . $month . $day . $numberSeries;

        $controlSum = 0;
        foreach (str_split($pesel) as $key => $item) {
                $controlSum += $item*$weightToGenerateLastNumber[$key];
        }
        $controlSum%=10;
        return $pesel.$controlSum;
    }
}
