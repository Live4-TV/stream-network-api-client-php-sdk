# StreamNetworkApi\CommentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**commentsControllerGetComments()**](CommentsApi.md#commentsControllerGetComments) | **GET** /api/v1/live-streams/{uuid}/comments | Get a list of comments (call it every minute) |
| [**commentsControllerMuteComment()**](CommentsApi.md#commentsControllerMuteComment) | **POST** /api/v1/live-streams/{uuid}/comments/mute | Mute comments to the live stream |
| [**commentsControllerPostComment()**](CommentsApi.md#commentsControllerPostComment) | **POST** /api/v1/live-streams/{uuid}/comments | Post a comment into the live stream (all accounts) |
| [**commentsControllerStartListening()**](CommentsApi.md#commentsControllerStartListening) | **POST** /api/v1/live-streams/{uuid}/comments/start-listening | Start listening comments of the live stream |
| [**commentsControllerStopListening()**](CommentsApi.md#commentsControllerStopListening) | **POST** /api/v1/live-streams/{uuid}/comments/stop-listening | Stop listening comments of the live stream |
| [**commentsControllerUnmuteComment()**](CommentsApi.md#commentsControllerUnmuteComment) | **POST** /api/v1/live-streams/{uuid}/comments/unmute | Unmute comments to the live stream |


## `commentsControllerGetComments()`

```php
commentsControllerGetComments($x_api_key, $uuid, $last_comment_timestamp): \StreamNetworkApi\Model\GetCommentsResponse
```

Get a list of comments (call it every minute)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StreamNetworkApi\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string
$uuid = 'uuid_example'; // string | The uuid of the live stream
$last_comment_timestamp = 1619515200000; // float | The timestamp of the last comment received. If requesting for the first time, you can send 0

try {
    $result = $apiInstance->commentsControllerGetComments($x_api_key, $uuid, $last_comment_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsControllerGetComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |
| **uuid** | **string**| The uuid of the live stream | |
| **last_comment_timestamp** | **float**| The timestamp of the last comment received. If requesting for the first time, you can send 0 | |

### Return type

[**\StreamNetworkApi\Model\GetCommentsResponse**](../Model/GetCommentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commentsControllerMuteComment()`

```php
commentsControllerMuteComment($x_api_key, $uuid, $toggle_comment_request): \StreamNetworkApi\Model\ToggleCommentResponse
```

Mute comments to the live stream

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StreamNetworkApi\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string
$uuid = 'uuid_example'; // string | The uuid of the live stream
$toggle_comment_request = new \StreamNetworkApi\Model\ToggleCommentRequest(); // \StreamNetworkApi\Model\ToggleCommentRequest

try {
    $result = $apiInstance->commentsControllerMuteComment($x_api_key, $uuid, $toggle_comment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsControllerMuteComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |
| **uuid** | **string**| The uuid of the live stream | |
| **toggle_comment_request** | [**\StreamNetworkApi\Model\ToggleCommentRequest**](../Model/ToggleCommentRequest.md)|  | |

### Return type

[**\StreamNetworkApi\Model\ToggleCommentResponse**](../Model/ToggleCommentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commentsControllerPostComment()`

```php
commentsControllerPostComment($x_api_key, $uuid, $post_comment_request): \StreamNetworkApi\Model\PostCommentResponse
```

Post a comment into the live stream (all accounts)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StreamNetworkApi\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string
$uuid = 'uuid_example'; // string | The uuid of the live stream
$post_comment_request = new \StreamNetworkApi\Model\PostCommentRequest(); // \StreamNetworkApi\Model\PostCommentRequest

try {
    $result = $apiInstance->commentsControllerPostComment($x_api_key, $uuid, $post_comment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsControllerPostComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |
| **uuid** | **string**| The uuid of the live stream | |
| **post_comment_request** | [**\StreamNetworkApi\Model\PostCommentRequest**](../Model/PostCommentRequest.md)|  | |

### Return type

[**\StreamNetworkApi\Model\PostCommentResponse**](../Model/PostCommentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commentsControllerStartListening()`

```php
commentsControllerStartListening($x_api_key, $uuid, $start_listening_to_comments_request): \StreamNetworkApi\Model\StartListeningToCommentsResponse
```

Start listening comments of the live stream

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StreamNetworkApi\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string
$uuid = 'uuid_example'; // string | The uuid of the live stream
$start_listening_to_comments_request = new \StreamNetworkApi\Model\StartListeningToCommentsRequest(); // \StreamNetworkApi\Model\StartListeningToCommentsRequest

try {
    $result = $apiInstance->commentsControllerStartListening($x_api_key, $uuid, $start_listening_to_comments_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsControllerStartListening: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |
| **uuid** | **string**| The uuid of the live stream | |
| **start_listening_to_comments_request** | [**\StreamNetworkApi\Model\StartListeningToCommentsRequest**](../Model/StartListeningToCommentsRequest.md)|  | |

### Return type

[**\StreamNetworkApi\Model\StartListeningToCommentsResponse**](../Model/StartListeningToCommentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commentsControllerStopListening()`

```php
commentsControllerStopListening($x_api_key, $uuid, $stop_listening_to_comments_request): \StreamNetworkApi\Model\StopListeningToCommentsResponse
```

Stop listening comments of the live stream

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StreamNetworkApi\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string
$uuid = 'uuid_example'; // string | The uuid of the live stream
$stop_listening_to_comments_request = new \StreamNetworkApi\Model\StopListeningToCommentsRequest(); // \StreamNetworkApi\Model\StopListeningToCommentsRequest

try {
    $result = $apiInstance->commentsControllerStopListening($x_api_key, $uuid, $stop_listening_to_comments_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsControllerStopListening: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |
| **uuid** | **string**| The uuid of the live stream | |
| **stop_listening_to_comments_request** | [**\StreamNetworkApi\Model\StopListeningToCommentsRequest**](../Model/StopListeningToCommentsRequest.md)|  | |

### Return type

[**\StreamNetworkApi\Model\StopListeningToCommentsResponse**](../Model/StopListeningToCommentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commentsControllerUnmuteComment()`

```php
commentsControllerUnmuteComment($x_api_key, $uuid, $toggle_comment_request): \StreamNetworkApi\Model\ToggleCommentResponse
```

Unmute comments to the live stream

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StreamNetworkApi\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string
$uuid = 'uuid_example'; // string | The uuid of the live stream
$toggle_comment_request = new \StreamNetworkApi\Model\ToggleCommentRequest(); // \StreamNetworkApi\Model\ToggleCommentRequest

try {
    $result = $apiInstance->commentsControllerUnmuteComment($x_api_key, $uuid, $toggle_comment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsControllerUnmuteComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |
| **uuid** | **string**| The uuid of the live stream | |
| **toggle_comment_request** | [**\StreamNetworkApi\Model\ToggleCommentRequest**](../Model/ToggleCommentRequest.md)|  | |

### Return type

[**\StreamNetworkApi\Model\ToggleCommentResponse**](../Model/ToggleCommentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
