# SwaggerClient-php
This is a microservice used to make a credit decision for a user based on input

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/futurepay/swagger-creditdecisioning-php.git"
    }
  ],
  "require": {
    "futurepay/swagger-creditdecisioning-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new FuturePay\SDK\CreditDecisioning\Api\DefaultApi();
$data = new \FuturePay\SDK\CreditDecisioning\Model\Data(); // \FuturePay\SDK\CreditDecisioning\Model\Data | User information

try {
    $result = $api_instance->decision($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->decision: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://credit.futurepay.ca*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**decision**](docs/Api/DefaultApi.md#decision) | **POST** /v1/decision | Submit some information to perform a decision on


## Documentation For Models

 - [CreditInformation](docs/Model/CreditInformation.md)
 - [CreditSummary](docs/Model/CreditSummary.md)
 - [CreditSummaryClosedWithBalanceAmount](docs/Model/CreditSummaryClosedWithBalanceAmount.md)
 - [CreditSummaryInstallmentAmount](docs/Model/CreditSummaryInstallmentAmount.md)
 - [CreditSummaryRevolvingAmount](docs/Model/CreditSummaryRevolvingAmount.md)
 - [CreditSummaryTotalHistory](docs/Model/CreditSummaryTotalHistory.md)
 - [Data](docs/Model/Data.md)
 - [Decision](docs/Model/Decision.md)
 - [FraudAlert](docs/Model/FraudAlert.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InputCategoryCreditRule](docs/Model/InputCategoryCreditRule.md)
 - [InputUser](docs/Model/InputUser.md)
 - [SuppliedInformation](docs/Model/SuppliedInformation.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author

developer@futurepay.com


