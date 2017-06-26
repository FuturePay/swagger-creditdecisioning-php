# FuturePay\SDK\CreditDecisioning\DefaultApi

All URIs are relative to *http://micro.futurepay.com/creditdecisioning*

Method | HTTP request | Description
------------- | ------------- | -------------
[**decision**](DefaultApi.md#decision) | **POST** /v1/decision | Submit some information to perform a decision on


# **decision**
> \FuturePay\SDK\CreditDecisioning\Model\InlineResponse200 decision($creditFile, $firstName, $lastName, $city, $region, $zip, $dob, $ssn, $address)

Submit some information to perform a decision on



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new FuturePay\SDK\CreditDecisioning\Api\DefaultApi();
$creditFile = "/path/to/file.txt"; // \SplFileObject | TUNA Customer Credit File
$firstName = "firstName_example"; // string | 
$lastName = "lastName_example"; // string | 
$city = "city_example"; // string | 
$region = "region_example"; // string | 
$zip = "zip_example"; // string | 
$dob = "dob_example"; // string | 
$ssn = "ssn_example"; // string | 
$address = "address_example"; // string | 

try {
    $result = $api_instance->decision($creditFile, $firstName, $lastName, $city, $region, $zip, $dob, $ssn, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->decision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditFile** | **\SplFileObject**| TUNA Customer Credit File |
 **firstName** | **string**|  |
 **lastName** | **string**|  |
 **city** | **string**|  |
 **region** | **string**|  |
 **zip** | **string**|  |
 **dob** | **string**|  |
 **ssn** | **string**|  |
 **address** | **string**|  |

### Return type

[**\FuturePay\SDK\CreditDecisioning\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

