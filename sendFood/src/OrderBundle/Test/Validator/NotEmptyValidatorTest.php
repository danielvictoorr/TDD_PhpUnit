<?php


namespace OrderBundle\Validator\Test;

use OrderBundle\Validators\NotEmptyValidator;
use PHPUnit\Framework\TestCase;

class NotEmptyValidatorTest extends TestCase
{
    public function testIsValid()
    {
        $dataProvider = [
            ""=>false,
            "Daniel"=>true
        ];

        foreach ($dataProvider as $value => $expectedResult) {
            $notEmptyValidator = new NotEmptyValidator($value);
            $isvalid = $notEmptyValidator->isValid();
    
            $this->assertEquals($expectedResult,$isvalid);
        }

    }
}