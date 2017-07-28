# FuturePay\SDK\CreditDecisioning\DefaultApi

All URIs are relative to *http://credit.futurepay.ca*

Method | HTTP request | Description
------------- | ------------- | -------------
[**decision**](DefaultApi.md#decision) | **POST** /v1/decision | Submit some information to perform a decision on


# **decision**
> \FuturePay\SDK\CreditDecisioning\Model\InlineResponse200 decision($data)

Submit some information to perform a decision on



### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\FuturePay\SDK\CreditDecisioning\Model\Data**](../Model/\FuturePay\SDK\CreditDecisioning\Model\Data.md)| User information |

### Return type

[**\FuturePay\SDK\CreditDecisioning\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

