<?php

namespace rocketfellows\DEVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;

class DEVatFormatValidatorTest extends TestCase
{

    /**
     * @var DEVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new DEVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => '000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'DE000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'DE111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'DE999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'DE123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12A4567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12A45678',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234A6789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'AT123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'de123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'd123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'e123456789',
                'isValid' => false,
            ],
        ];
    }
}
