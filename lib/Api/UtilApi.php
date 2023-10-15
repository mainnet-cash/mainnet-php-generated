<?php
/**
 * UtilApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Mainnet Cash
 *
 * A developer friendly bitcoin cash wallet api  This API is currently in *active* development, breaking changes may be made prior to official release of version 1.0.0.
 *
 * The version of the OpenAPI document: 2.2.5
 * Contact: hello@mainnet.cash
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Mainnet\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Mainnet\ApiException;
use Mainnet\Configuration;
use Mainnet\HeaderSelector;
use Mainnet\ObjectSerializer;

/**
 * UtilApi Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UtilApi
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

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
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
     * Operation convert
     *
     * convert between units
     *
     * @param  \Mainnet\Model\ConvertRequest $convert_request convert_request (optional)
     *
     * @throws \Mainnet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return float
     */
    public function convert($convert_request = null)
    {
        list($response) = $this->convertWithHttpInfo($convert_request);
        return $response;
    }

    /**
     * Operation convertWithHttpInfo
     *
     * convert between units
     *
     * @param  \Mainnet\Model\ConvertRequest $convert_request (optional)
     *
     * @throws \Mainnet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of float, HTTP status code, HTTP response headers (array of strings)
     */
    public function convertWithHttpInfo($convert_request = null)
    {
        $request = $this->convertRequest($convert_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('float' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'float', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'float';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'float',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation convertAsync
     *
     * convert between units
     *
     * @param  \Mainnet\Model\ConvertRequest $convert_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertAsync($convert_request = null)
    {
        return $this->convertAsyncWithHttpInfo($convert_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation convertAsyncWithHttpInfo
     *
     * convert between units
     *
     * @param  \Mainnet\Model\ConvertRequest $convert_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function convertAsyncWithHttpInfo($convert_request = null)
    {
        $returnType = 'float';
        $request = $this->convertRequest($convert_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'convert'
     *
     * @param  \Mainnet\Model\ConvertRequest $convert_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function convertRequest($convert_request = null)
    {

        $resourcePath = '/util/convert';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($convert_request)) {
            $_tempBody = $convert_request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAddrsByXpubKey
     *
     * Derive heristic determined addresses from an extended public key, per BIP32
     *
     * @param  \Mainnet\Model\GetAddrsByXpubKeyRequest $get_addrs_by_xpub_key_request get_addrs_by_xpub_key_request (optional)
     *
     * @throws \Mainnet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return AnyOfString[]
     */
    public function getAddrsByXpubKey($get_addrs_by_xpub_key_request = null)
    {
        list($response) = $this->getAddrsByXpubKeyWithHttpInfo($get_addrs_by_xpub_key_request);
        return $response;
    }

    /**
     * Operation getAddrsByXpubKeyWithHttpInfo
     *
     * Derive heristic determined addresses from an extended public key, per BIP32
     *
     * @param  \Mainnet\Model\GetAddrsByXpubKeyRequest $get_addrs_by_xpub_key_request (optional)
     *
     * @throws \Mainnet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of AnyOfString[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAddrsByXpubKeyWithHttpInfo($get_addrs_by_xpub_key_request = null)
    {
        $request = $this->getAddrsByXpubKeyRequest($get_addrs_by_xpub_key_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('AnyOfString[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'AnyOfString[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'AnyOfString[]';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'AnyOfString[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAddrsByXpubKeyAsync
     *
     * Derive heristic determined addresses from an extended public key, per BIP32
     *
     * @param  \Mainnet\Model\GetAddrsByXpubKeyRequest $get_addrs_by_xpub_key_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAddrsByXpubKeyAsync($get_addrs_by_xpub_key_request = null)
    {
        return $this->getAddrsByXpubKeyAsyncWithHttpInfo($get_addrs_by_xpub_key_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAddrsByXpubKeyAsyncWithHttpInfo
     *
     * Derive heristic determined addresses from an extended public key, per BIP32
     *
     * @param  \Mainnet\Model\GetAddrsByXpubKeyRequest $get_addrs_by_xpub_key_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAddrsByXpubKeyAsyncWithHttpInfo($get_addrs_by_xpub_key_request = null)
    {
        $returnType = 'AnyOfString[]';
        $request = $this->getAddrsByXpubKeyRequest($get_addrs_by_xpub_key_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAddrsByXpubKey'
     *
     * @param  \Mainnet\Model\GetAddrsByXpubKeyRequest $get_addrs_by_xpub_key_request (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAddrsByXpubKeyRequest($get_addrs_by_xpub_key_request = null)
    {

        $resourcePath = '/util/get_addrs_by_xpubkey';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($get_addrs_by_xpub_key_request)) {
            $_tempBody = $get_addrs_by_xpub_key_request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getXpubKeyInfo
     *
     * Decode information about an extended public key, per BIP32
     *
     * @param  \Mainnet\Model\GetXpubKeyInfoRequest $get_xpub_key_info_request Decode information about an extended public key, per BIP32 (required)
     *
     * @throws \Mainnet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Mainnet\Model\GetXpubKeyInfoResponse
     */
    public function getXpubKeyInfo($get_xpub_key_info_request)
    {
        list($response) = $this->getXpubKeyInfoWithHttpInfo($get_xpub_key_info_request);
        return $response;
    }

    /**
     * Operation getXpubKeyInfoWithHttpInfo
     *
     * Decode information about an extended public key, per BIP32
     *
     * @param  \Mainnet\Model\GetXpubKeyInfoRequest $get_xpub_key_info_request Decode information about an extended public key, per BIP32 (required)
     *
     * @throws \Mainnet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Mainnet\Model\GetXpubKeyInfoResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getXpubKeyInfoWithHttpInfo($get_xpub_key_info_request)
    {
        $request = $this->getXpubKeyInfoRequest($get_xpub_key_info_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Mainnet\Model\GetXpubKeyInfoResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Mainnet\Model\GetXpubKeyInfoResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Mainnet\Model\GetXpubKeyInfoResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Mainnet\Model\GetXpubKeyInfoResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getXpubKeyInfoAsync
     *
     * Decode information about an extended public key, per BIP32
     *
     * @param  \Mainnet\Model\GetXpubKeyInfoRequest $get_xpub_key_info_request Decode information about an extended public key, per BIP32 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getXpubKeyInfoAsync($get_xpub_key_info_request)
    {
        return $this->getXpubKeyInfoAsyncWithHttpInfo($get_xpub_key_info_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getXpubKeyInfoAsyncWithHttpInfo
     *
     * Decode information about an extended public key, per BIP32
     *
     * @param  \Mainnet\Model\GetXpubKeyInfoRequest $get_xpub_key_info_request Decode information about an extended public key, per BIP32 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getXpubKeyInfoAsyncWithHttpInfo($get_xpub_key_info_request)
    {
        $returnType = '\Mainnet\Model\GetXpubKeyInfoResponse';
        $request = $this->getXpubKeyInfoRequest($get_xpub_key_info_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getXpubKeyInfo'
     *
     * @param  \Mainnet\Model\GetXpubKeyInfoRequest $get_xpub_key_info_request Decode information about an extended public key, per BIP32 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getXpubKeyInfoRequest($get_xpub_key_info_request)
    {
        // verify the required parameter 'get_xpub_key_info_request' is set
        if ($get_xpub_key_info_request === null || (is_array($get_xpub_key_info_request) && count($get_xpub_key_info_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $get_xpub_key_info_request when calling getXpubKeyInfo'
            );
        }

        $resourcePath = '/util/get_xpubkey_info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($get_xpub_key_info_request)) {
            $_tempBody = $get_xpub_key_info_request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
