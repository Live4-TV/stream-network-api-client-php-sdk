# StreamNetworkApi\SocialNetworksApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**socialNetworkControllerGetAllActive()**](SocialNetworksApi.md#socialNetworkControllerGetAllActive) | **GET** /api/v1/social-networks | Get all social network integrations available |


## `socialNetworkControllerGetAllActive()`

```php
socialNetworkControllerGetAllActive($x_api_key): \StreamNetworkApi\Model\SocialNetworkResponse
```

Get all social network integrations available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StreamNetworkApi\Api\SocialNetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string

try {
    $result = $apiInstance->socialNetworkControllerGetAllActive($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialNetworksApi->socialNetworkControllerGetAllActive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |

### Return type

[**\StreamNetworkApi\Model\SocialNetworkResponse**](../Model/SocialNetworkResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
