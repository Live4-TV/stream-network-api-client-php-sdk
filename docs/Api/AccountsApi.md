# StreamNetworkApi\AccountsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**socialNetworkAccountControllerGetAccount()**](AccountsApi.md#socialNetworkAccountControllerGetAccount) | **GET** /api/v1/social-network-account/{userExternalId}/{uuid} | Get social account information logged from user account |
| [**socialNetworkAccountControllerGetAuthoriseUrl()**](AccountsApi.md#socialNetworkAccountControllerGetAuthoriseUrl) | **POST** /api/v1/social-network-account/{network}/authorise-url | Add a new social network account (e.g instagram account) |


## `socialNetworkAccountControllerGetAccount()`

```php
socialNetworkAccountControllerGetAccount($x_api_key, $user_external_id, $uuid): \StreamNetworkApi\Model\SocialNetworkAccount
```

Get social account information logged from user account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StreamNetworkApi\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string
$user_external_id = john.doe@gmail.com; // string | The user's unique identifier on your system. The same of you use to authorise-url endpoint.
$uuid = 21d6ac22-cf0c-42d2-8aa9-95e71ec32c2b; // string | The reference to the new account that you can use to identify the account. The same of you use to authorise-url endpoint

try {
    $result = $apiInstance->socialNetworkAccountControllerGetAccount($x_api_key, $user_external_id, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->socialNetworkAccountControllerGetAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |
| **user_external_id** | **string**| The user&#39;s unique identifier on your system. The same of you use to authorise-url endpoint. | |
| **uuid** | **string**| The reference to the new account that you can use to identify the account. The same of you use to authorise-url endpoint | |

### Return type

[**\StreamNetworkApi\Model\SocialNetworkAccount**](../Model/SocialNetworkAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `socialNetworkAccountControllerGetAuthoriseUrl()`

```php
socialNetworkAccountControllerGetAuthoriseUrl($x_api_key, $network, $get_authorise_url_request): \StreamNetworkApi\Model\Redirect
```

Add a new social network account (e.g instagram account)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StreamNetworkApi\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string
$network = instagram; // string | The social network code
$get_authorise_url_request = new \StreamNetworkApi\Model\GetAuthoriseUrlRequest(); // \StreamNetworkApi\Model\GetAuthoriseUrlRequest

try {
    $result = $apiInstance->socialNetworkAccountControllerGetAuthoriseUrl($x_api_key, $network, $get_authorise_url_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->socialNetworkAccountControllerGetAuthoriseUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |
| **network** | **string**| The social network code | |
| **get_authorise_url_request** | [**\StreamNetworkApi\Model\GetAuthoriseUrlRequest**](../Model/GetAuthoriseUrlRequest.md)|  | |

### Return type

[**\StreamNetworkApi\Model\Redirect**](../Model/Redirect.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
