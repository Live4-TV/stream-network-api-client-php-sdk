# StreamNetworkApi\LiveStreamsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**liveStreamsControllerCreateAndStartLive()**](LiveStreamsApi.md#liveStreamsControllerCreateAndStartLive) | **POST** /api/v1/live-streams/{uuid}/create-and-start | Start a live stream, return the stream key |
| [**liveStreamsControllerStopLive()**](LiveStreamsApi.md#liveStreamsControllerStopLive) | **POST** /api/v1/live-streams/{uuid}/stop | Stop a live stream |


## `liveStreamsControllerCreateAndStartLive()`

```php
liveStreamsControllerCreateAndStartLive($x_api_key, $uuid, $create_and_start_live_request): \StreamNetworkApi\Model\CreateAndStartLiveResponse
```

Start a live stream, return the stream key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StreamNetworkApi\Api\LiveStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string
$uuid = 'uuid_example'; // string | The uuid of the live stream
$create_and_start_live_request = new \StreamNetworkApi\Model\CreateAndStartLiveRequest(); // \StreamNetworkApi\Model\CreateAndStartLiveRequest

try {
    $result = $apiInstance->liveStreamsControllerCreateAndStartLive($x_api_key, $uuid, $create_and_start_live_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->liveStreamsControllerCreateAndStartLive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |
| **uuid** | **string**| The uuid of the live stream | |
| **create_and_start_live_request** | [**\StreamNetworkApi\Model\CreateAndStartLiveRequest**](../Model/CreateAndStartLiveRequest.md)|  | |

### Return type

[**\StreamNetworkApi\Model\CreateAndStartLiveResponse**](../Model/CreateAndStartLiveResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `liveStreamsControllerStopLive()`

```php
liveStreamsControllerStopLive($x_api_key, $uuid, $stop_live_request): \StreamNetworkApi\Model\StopLiveResponse
```

Stop a live stream

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StreamNetworkApi\Api\LiveStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string
$uuid = 'uuid_example'; // string | The uuid of the live stream
$stop_live_request = new \StreamNetworkApi\Model\StopLiveRequest(); // \StreamNetworkApi\Model\StopLiveRequest

try {
    $result = $apiInstance->liveStreamsControllerStopLive($x_api_key, $uuid, $stop_live_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveStreamsApi->liveStreamsControllerStopLive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |
| **uuid** | **string**| The uuid of the live stream | |
| **stop_live_request** | [**\StreamNetworkApi\Model\StopLiveRequest**](../Model/StopLiveRequest.md)|  | |

### Return type

[**\StreamNetworkApi\Model\StopLiveResponse**](../Model/StopLiveResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
