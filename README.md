# StreamNetworkApi

Omnichannel for live streaming on social networks 
We're glad that you chose to use Live4.tv's API for managing your connection with social networks. 

Here in this documentation, you will find a step-by-step for integrating our API.

Feel free to contact us in case you need any help.

The login flow:

![login flow image](https://api-stream-network.live4.tv/mermaid-diagram-login-flow.png \"Login flow image\")


For more information, please visit [https://www.live4.tv/contato](https://www.live4.tv/contato).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Live4TV/stream-network-api-client-php-sdk.git"
    }
  ],
  "require": {
    "Live4TV/stream-network-api-client-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/StreamNetworkApi/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**socialNetworkAccountControllerGetAccount**](docs/Api/AccountsApi.md#socialnetworkaccountcontrollergetaccount) | **GET** /api/v1/social-network-account/{userExternalId}/{uuid} | Get social account information logged from user account
*AccountsApi* | [**socialNetworkAccountControllerGetAuthoriseUrl**](docs/Api/AccountsApi.md#socialnetworkaccountcontrollergetauthoriseurl) | **POST** /api/v1/social-network-account/{network}/authorise-url | Add a new social network account (e.g instagram account)
*CommentsApi* | [**commentsControllerGetComments**](docs/Api/CommentsApi.md#commentscontrollergetcomments) | **GET** /api/v1/live-streams/{uuid}/comments | Get a list of comments (call it every minute)
*CommentsApi* | [**commentsControllerMuteComment**](docs/Api/CommentsApi.md#commentscontrollermutecomment) | **POST** /api/v1/live-streams/{uuid}/comments/mute | Mute comments to the live stream
*CommentsApi* | [**commentsControllerPostComment**](docs/Api/CommentsApi.md#commentscontrollerpostcomment) | **POST** /api/v1/live-streams/{uuid}/comments | Post a comment into the live stream (all accounts)
*CommentsApi* | [**commentsControllerStartListening**](docs/Api/CommentsApi.md#commentscontrollerstartlistening) | **POST** /api/v1/live-streams/{uuid}/comments/start-listening | Start listening comments of the live stream
*CommentsApi* | [**commentsControllerStopListening**](docs/Api/CommentsApi.md#commentscontrollerstoplistening) | **POST** /api/v1/live-streams/{uuid}/comments/stop-listening | Stop listening comments of the live stream
*CommentsApi* | [**commentsControllerUnmuteComment**](docs/Api/CommentsApi.md#commentscontrollerunmutecomment) | **POST** /api/v1/live-streams/{uuid}/comments/unmute | Unmute comments to the live stream
*LiveStreamsApi* | [**liveStreamsControllerCreateAndStartLive**](docs/Api/LiveStreamsApi.md#livestreamscontrollercreateandstartlive) | **POST** /api/v1/live-streams/{uuid}/create-and-start | Start a live stream, return the stream key
*LiveStreamsApi* | [**liveStreamsControllerStopLive**](docs/Api/LiveStreamsApi.md#livestreamscontrollerstoplive) | **POST** /api/v1/live-streams/{uuid}/stop | Stop a live stream
*SocialNetworksApi* | [**socialNetworkControllerGetAllActive**](docs/Api/SocialNetworksApi.md#socialnetworkcontrollergetallactive) | **GET** /api/v1/social-networks | Get all social network integrations available

## Models

- [CommentsResponse](docs/Model/CommentsResponse.md)
- [CommentsResponseUser](docs/Model/CommentsResponseUser.md)
- [CreateAndStartLiveAccountDetailsResponse](docs/Model/CreateAndStartLiveAccountDetailsResponse.md)
- [CreateAndStartLiveRequest](docs/Model/CreateAndStartLiveRequest.md)
- [CreateAndStartLiveResponse](docs/Model/CreateAndStartLiveResponse.md)
- [GetAuthoriseUrlRequest](docs/Model/GetAuthoriseUrlRequest.md)
- [GetCommentsResponse](docs/Model/GetCommentsResponse.md)
- [HttpExceptionResponse](docs/Model/HttpExceptionResponse.md)
- [PostCommentRequest](docs/Model/PostCommentRequest.md)
- [PostCommentResponse](docs/Model/PostCommentResponse.md)
- [Redirect](docs/Model/Redirect.md)
- [SocialNetworkAccount](docs/Model/SocialNetworkAccount.md)
- [SocialNetworkDetail](docs/Model/SocialNetworkDetail.md)
- [SocialNetworkResponse](docs/Model/SocialNetworkResponse.md)
- [StartListeningToCommentsAccountDetailsResponse](docs/Model/StartListeningToCommentsAccountDetailsResponse.md)
- [StartListeningToCommentsRequest](docs/Model/StartListeningToCommentsRequest.md)
- [StartListeningToCommentsResponse](docs/Model/StartListeningToCommentsResponse.md)
- [StopListeningToCommentsAccountDetailsResponse](docs/Model/StopListeningToCommentsAccountDetailsResponse.md)
- [StopListeningToCommentsRequest](docs/Model/StopListeningToCommentsRequest.md)
- [StopListeningToCommentsResponse](docs/Model/StopListeningToCommentsResponse.md)
- [StopLiveDetailsResponse](docs/Model/StopLiveDetailsResponse.md)
- [StopLiveRequest](docs/Model/StopLiveRequest.md)
- [StopLiveResponse](docs/Model/StopLiveResponse.md)
- [ToggleCommentRequest](docs/Model/ToggleCommentRequest.md)
- [ToggleCommentResponse](docs/Model/ToggleCommentResponse.md)
- [ToggleCommentResponseDetails](docs/Model/ToggleCommentResponseDetails.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

contato@live4.tv

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Package version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
