<?php

namespace OrderBundle\Validators\Test;

use OrderBundle\Validators\NotEmptyValidator;
use PHPUnit\Framework\TestCase;

//TestCase Para poder usar as funcionalidade de PHP unity
class NotEmptyValidatorTest extends TestCase
{
    /**
     * @test
     * @dataProvider valueProvider
     */
    public function testIsValid($value, $expectedResult)
    {
        $notEmptyValidator = new NotEmptyValidator($value);

        $isValid = $notEmptyValidator->isValid();

        $this->assertEquals($expectedResult, $isValid);
    }

    public function valueProvider()
    {
        return [
            'shouldBeValidWhenValueIsNotEmpty' => ['value' => 'foo', 'expectedResult' => true],
            'shouldNotBeValidWhenValueIsEmpty' => ['value' => '', 'expectedResult' => false]
        ];
    }

    /*criei para testar
    public function testIsValidWithEmptyValue()
    {
        $notEmptyValidator = new NotEmptyValidator('');

        $isValid = $notEmptyValidator->isValid();

        $this->assertFalse($isValid);
    }

    public function testIsValidWithNotEmptyValue()
    {
        $notEmptyValidator = new NotEmptyValidator('passando valores ');

        $isValid = $notEmptyValidator->isValid();

        $this->assertTrue($isValid);
    }
    */


}