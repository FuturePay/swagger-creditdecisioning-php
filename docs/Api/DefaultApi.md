# Swagger\Client\DefaultApi

All URIs are relative to *http://localhost:8085/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**decision**](DefaultApi.md#decision) | **POST** /decision | Submit some information to perform a decision on


# **decision**
> \Swagger\Client\Model\InlineResponse200 decision($credit_file, $first_name, $last_name, $city, $region, $zip, $dob, $ssn, $address)

Submit some information to perform a decision on



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$credit_file = "/path/to/file.txt"; // \SplFileObject | TUNA Customer Credit File
$first_name = "first_name_example"; // string | 
$last_name = "last_name_example"; // string | 
$city = "city_example"; // string | 
$region = "region_example"; // string | 
$zip = "zip_example"; // string | 
$dob = "dob_example"; // string | 
$ssn = "ssn_example"; // string | 
$address = "address_example"; // string | 

try {
    $result = $api_instance->decision($credit_file, $first_name, $last_name, $city, $region, $zip, $dob, $ssn, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->decision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_file** | **\SplFileObject**| TUNA Customer Credit File |
 **first_name** | **string**|  |
 **last_name** | **string**|  |
 **city** | **string**|  |
 **region** | **string**|  |
 **zip** | **string**|  |
 **dob** | **string**|  |
 **ssn** | **string**|  |
 **address** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

