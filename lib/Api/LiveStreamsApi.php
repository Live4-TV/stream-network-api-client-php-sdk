<?php
/**
 * LiveStreamsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  StreamNetworkApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Live4.tv - Stream Networks API
 *
 * Omnichannel for live streaming on social networks  We're glad that you chose to use Live4.tv's API for managing your connection with social networks (currently Instagram).            We understand that Instagram currently restricts users from conducting live broadcasts without their official app.           However, our innovative API empowers users to go live on Instagram without relying on the app itself.        By leveraging our API, users gain access to a stream key, enabling them to seamlessly transmit their live broadcasts using popular software like OBS (Open Broadcaster Software).        This breakthrough feature provides users with the freedom to connect with their audience and share captivating live content on Instagram, all without the constraints of the official app.  The login flow:  ![login flow image](https://api-stream-network.live4.tv/mermaid-diagram-login-flow.png \"Login flow image\")
 *
 * The version of the OpenAPI document: 1.0
 * Contact: contato@live4.tv
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace StreamNetworkApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use StreamNetworkApi\ApiException;
use StreamNetworkApi\Configuration;
use StreamNetworkApi\HeaderSelector;
use StreamNetworkApi\ObjectSerializer;

/**
 * LiveStreamsApi Class Doc Comment
 *
 * @category Class
 * @package  StreamNetworkApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LiveStreamsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'liveStreamsControllerCreateAndStartLive' => [
            'application/json',
        ],
        'liveStreamsControllerStopLive' => [
            'application/json',
        ],
    ];

    /**
         * @param ClientInterface $client
         * @param Configuration   $config
         * @param HeaderSelector  $selector
         * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
         */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation liveStreamsControllerCreateAndStartLive
     *
     * Start a live stream, return the stream key
     *
     * @param  string $x_api_key x_api_key (required)
     * @param  string $uuid The uuid of the live stream (required)
     * @param  \StreamNetworkApi\Model\CreateAndStartLiveRequest $create_and_start_live_request create_and_start_live_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liveStreamsControllerCreateAndStartLive'] to see the possible values for this operation
     *
     * @throws \StreamNetworkApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \StreamNetworkApi\Model\CreateAndStartLiveResponse
     */
    public function liveStreamsControllerCreateAndStartLive($x_api_key, $uuid, $create_and_start_live_request, string $contentType = self::contentTypes['liveStreamsControllerCreateAndStartLive'][0])
    {
        list($response) = $this->liveStreamsControllerCreateAndStartLiveWithHttpInfo($x_api_key, $uuid, $create_and_start_live_request, $contentType);
        return $response;
    }

    /**
     * Operation liveStreamsControllerCreateAndStartLiveWithHttpInfo
     *
     * Start a live stream, return the stream key
     *
     * @param  string $x_api_key (required)
     * @param  string $uuid The uuid of the live stream (required)
     * @param  \StreamNetworkApi\Model\CreateAndStartLiveRequest $create_and_start_live_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liveStreamsControllerCreateAndStartLive'] to see the possible values for this operation
     *
     * @throws \StreamNetworkApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \StreamNetworkApi\Model\CreateAndStartLiveResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function liveStreamsControllerCreateAndStartLiveWithHttpInfo($x_api_key, $uuid, $create_and_start_live_request, string $contentType = self::contentTypes['liveStreamsControllerCreateAndStartLive'][0])
    {
        $request = $this->liveStreamsControllerCreateAndStartLiveRequest($x_api_key, $uuid, $create_and_start_live_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 201:
                    if ('\StreamNetworkApi\Model\CreateAndStartLiveResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\StreamNetworkApi\Model\CreateAndStartLiveResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\StreamNetworkApi\Model\CreateAndStartLiveResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\StreamNetworkApi\Model\CreateAndStartLiveResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\StreamNetworkApi\Model\CreateAndStartLiveResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation liveStreamsControllerCreateAndStartLiveAsync
     *
     * Start a live stream, return the stream key
     *
     * @param  string $x_api_key (required)
     * @param  string $uuid The uuid of the live stream (required)
     * @param  \StreamNetworkApi\Model\CreateAndStartLiveRequest $create_and_start_live_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liveStreamsControllerCreateAndStartLive'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function liveStreamsControllerCreateAndStartLiveAsync($x_api_key, $uuid, $create_and_start_live_request, string $contentType = self::contentTypes['liveStreamsControllerCreateAndStartLive'][0])
    {
        return $this->liveStreamsControllerCreateAndStartLiveAsyncWithHttpInfo($x_api_key, $uuid, $create_and_start_live_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation liveStreamsControllerCreateAndStartLiveAsyncWithHttpInfo
     *
     * Start a live stream, return the stream key
     *
     * @param  string $x_api_key (required)
     * @param  string $uuid The uuid of the live stream (required)
     * @param  \StreamNetworkApi\Model\CreateAndStartLiveRequest $create_and_start_live_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liveStreamsControllerCreateAndStartLive'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function liveStreamsControllerCreateAndStartLiveAsyncWithHttpInfo($x_api_key, $uuid, $create_and_start_live_request, string $contentType = self::contentTypes['liveStreamsControllerCreateAndStartLive'][0])
    {
        $returnType = '\StreamNetworkApi\Model\CreateAndStartLiveResponse';
        $request = $this->liveStreamsControllerCreateAndStartLiveRequest($x_api_key, $uuid, $create_and_start_live_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'liveStreamsControllerCreateAndStartLive'
     *
     * @param  string $x_api_key (required)
     * @param  string $uuid The uuid of the live stream (required)
     * @param  \StreamNetworkApi\Model\CreateAndStartLiveRequest $create_and_start_live_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liveStreamsControllerCreateAndStartLive'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function liveStreamsControllerCreateAndStartLiveRequest($x_api_key, $uuid, $create_and_start_live_request, string $contentType = self::contentTypes['liveStreamsControllerCreateAndStartLive'][0])
    {

        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null || (is_array($x_api_key) && count($x_api_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_api_key when calling liveStreamsControllerCreateAndStartLive'
            );
        }

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uuid when calling liveStreamsControllerCreateAndStartLive'
            );
        }

        // verify the required parameter 'create_and_start_live_request' is set
        if ($create_and_start_live_request === null || (is_array($create_and_start_live_request) && count($create_and_start_live_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_and_start_live_request when calling liveStreamsControllerCreateAndStartLive'
            );
        }


        $resourcePath = '/api/v1/live-streams/{uuid}/create-and-start';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = ObjectSerializer::toHeaderValue($x_api_key);
        }

        // path params
        if ($uuid !== null) {
            $resourcePath = str_replace(
                '{' . 'uuid' . '}',
                ObjectSerializer::toPathValue($uuid),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($create_and_start_live_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($create_and_start_live_request));
            } else {
                $httpBody = $create_and_start_live_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation liveStreamsControllerStopLive
     *
     * Stop a live stream
     *
     * @param  string $x_api_key x_api_key (required)
     * @param  string $uuid The uuid of the live stream (required)
     * @param  \StreamNetworkApi\Model\StopLiveRequest $stop_live_request stop_live_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liveStreamsControllerStopLive'] to see the possible values for this operation
     *
     * @throws \StreamNetworkApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \StreamNetworkApi\Model\StopLiveResponse
     */
    public function liveStreamsControllerStopLive($x_api_key, $uuid, $stop_live_request, string $contentType = self::contentTypes['liveStreamsControllerStopLive'][0])
    {
        list($response) = $this->liveStreamsControllerStopLiveWithHttpInfo($x_api_key, $uuid, $stop_live_request, $contentType);
        return $response;
    }

    /**
     * Operation liveStreamsControllerStopLiveWithHttpInfo
     *
     * Stop a live stream
     *
     * @param  string $x_api_key (required)
     * @param  string $uuid The uuid of the live stream (required)
     * @param  \StreamNetworkApi\Model\StopLiveRequest $stop_live_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liveStreamsControllerStopLive'] to see the possible values for this operation
     *
     * @throws \StreamNetworkApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \StreamNetworkApi\Model\StopLiveResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function liveStreamsControllerStopLiveWithHttpInfo($x_api_key, $uuid, $stop_live_request, string $contentType = self::contentTypes['liveStreamsControllerStopLive'][0])
    {
        $request = $this->liveStreamsControllerStopLiveRequest($x_api_key, $uuid, $stop_live_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 201:
                    if ('\StreamNetworkApi\Model\StopLiveResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\StreamNetworkApi\Model\StopLiveResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\StreamNetworkApi\Model\StopLiveResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\StreamNetworkApi\Model\StopLiveResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\StreamNetworkApi\Model\StopLiveResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation liveStreamsControllerStopLiveAsync
     *
     * Stop a live stream
     *
     * @param  string $x_api_key (required)
     * @param  string $uuid The uuid of the live stream (required)
     * @param  \StreamNetworkApi\Model\StopLiveRequest $stop_live_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liveStreamsControllerStopLive'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function liveStreamsControllerStopLiveAsync($x_api_key, $uuid, $stop_live_request, string $contentType = self::contentTypes['liveStreamsControllerStopLive'][0])
    {
        return $this->liveStreamsControllerStopLiveAsyncWithHttpInfo($x_api_key, $uuid, $stop_live_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation liveStreamsControllerStopLiveAsyncWithHttpInfo
     *
     * Stop a live stream
     *
     * @param  string $x_api_key (required)
     * @param  string $uuid The uuid of the live stream (required)
     * @param  \StreamNetworkApi\Model\StopLiveRequest $stop_live_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liveStreamsControllerStopLive'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function liveStreamsControllerStopLiveAsyncWithHttpInfo($x_api_key, $uuid, $stop_live_request, string $contentType = self::contentTypes['liveStreamsControllerStopLive'][0])
    {
        $returnType = '\StreamNetworkApi\Model\StopLiveResponse';
        $request = $this->liveStreamsControllerStopLiveRequest($x_api_key, $uuid, $stop_live_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'liveStreamsControllerStopLive'
     *
     * @param  string $x_api_key (required)
     * @param  string $uuid The uuid of the live stream (required)
     * @param  \StreamNetworkApi\Model\StopLiveRequest $stop_live_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['liveStreamsControllerStopLive'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function liveStreamsControllerStopLiveRequest($x_api_key, $uuid, $stop_live_request, string $contentType = self::contentTypes['liveStreamsControllerStopLive'][0])
    {

        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null || (is_array($x_api_key) && count($x_api_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_api_key when calling liveStreamsControllerStopLive'
            );
        }

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uuid when calling liveStreamsControllerStopLive'
            );
        }

        // verify the required parameter 'stop_live_request' is set
        if ($stop_live_request === null || (is_array($stop_live_request) && count($stop_live_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $stop_live_request when calling liveStreamsControllerStopLive'
            );
        }


        $resourcePath = '/api/v1/live-streams/{uuid}/stop';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = ObjectSerializer::toHeaderValue($x_api_key);
        }

        // path params
        if ($uuid !== null) {
            $resourcePath = str_replace(
                '{' . 'uuid' . '}',
                ObjectSerializer::toPathValue($uuid),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($stop_live_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($stop_live_request));
            } else {
                $httpBody = $stop_live_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
