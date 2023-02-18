# Germany vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Germany vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/de-vat-format-validator
```

## Usage example

Valid Germany vat number:

```php
$validator = new DEVatFormatValidator();
$validator->isValid('123456789');
$validator->isValid('DE123456789');
```

Returns:

```shell
true
true
```

Invalid Germany vat number:

```php
$validator = new DEVatFormatValidator();
$validator->isValid('1234567890');
$validator->isValid('12345678');
```

```shell
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
