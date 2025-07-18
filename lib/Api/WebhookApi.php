<?php
/**
 * WebhookApi
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
 * The version of the OpenAPI document: 2.7.10
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
 * WebhookApi Class Doc Comment
 *
 * @category Class
 * @package  Mainnet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebhookApi
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
     * Operation watchAddress
     *
     * Create a webhook to watch cashaddress balance and transactions.
     *
     * @param  \Mainnet\Model\WatchAddressRequest $watch_address_request Based on the &#39;type&#39; parameter the webhook will be triggered to either post balance or raw transactions to the &#39;url&#39;: - &#39;transaction:in&#39; for incoming BCH transactions - &#39;transaction:out&#39; for outgoing BCH transactions - &#39;transaction:in,out&#39; both for incoming and outgoing BCH transactions - &#39;balance&#39; will post the object according to &#39;BalanceResponse&#39; schema (required)
     *
     * @throws \Mainnet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Mainnet\Model\WatchAddressResponse
     */
    public function watchAddress($watch_address_request)
    {
        list($response) = $this->watchAddressWithHttpInfo($watch_address_request);
        return $response;
    }

    /**
     * Operation watchAddressWithHttpInfo
     *
     * Create a webhook to watch cashaddress balance and transactions.
     *
     * @param  \Mainnet\Model\WatchAddressRequest $watch_address_request Based on the &#39;type&#39; parameter the webhook will be triggered to either post balance or raw transactions to the &#39;url&#39;: - &#39;transaction:in&#39; for incoming BCH transactions - &#39;transaction:out&#39; for outgoing BCH transactions - &#39;transaction:in,out&#39; both for incoming and outgoing BCH transactions - &#39;balance&#39; will post the object according to &#39;BalanceResponse&#39; schema (required)
     *
     * @throws \Mainnet\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Mainnet\Model\WatchAddressResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function watchAddressWithHttpInfo($watch_address_request)
    {
        $request = $this->watchAddressRequest($watch_address_request);

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
                    if ('\Mainnet\Model\WatchAddressResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Mainnet\Model\WatchAddressResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Mainnet\Model\WatchAddressResponse';
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
                        '\Mainnet\Model\WatchAddressResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation watchAddressAsync
     *
     * Create a webhook to watch cashaddress balance and transactions.
     *
     * @param  \Mainnet\Model\WatchAddressRequest $watch_address_request Based on the &#39;type&#39; parameter the webhook will be triggered to either post balance or raw transactions to the &#39;url&#39;: - &#39;transaction:in&#39; for incoming BCH transactions - &#39;transaction:out&#39; for outgoing BCH transactions - &#39;transaction:in,out&#39; both for incoming and outgoing BCH transactions - &#39;balance&#39; will post the object according to &#39;BalanceResponse&#39; schema (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function watchAddressAsync($watch_address_request)
    {
        return $this->watchAddressAsyncWithHttpInfo($watch_address_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation watchAddressAsyncWithHttpInfo
     *
     * Create a webhook to watch cashaddress balance and transactions.
     *
     * @param  \Mainnet\Model\WatchAddressRequest $watch_address_request Based on the &#39;type&#39; parameter the webhook will be triggered to either post balance or raw transactions to the &#39;url&#39;: - &#39;transaction:in&#39; for incoming BCH transactions - &#39;transaction:out&#39; for outgoing BCH transactions - &#39;transaction:in,out&#39; both for incoming and outgoing BCH transactions - &#39;balance&#39; will post the object according to &#39;BalanceResponse&#39; schema (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function watchAddressAsyncWithHttpInfo($watch_address_request)
    {
        $returnType = '\Mainnet\Model\WatchAddressResponse';
        $request = $this->watchAddressRequest($watch_address_request);

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
     * Create request for operation 'watchAddress'
     *
     * @param  \Mainnet\Model\WatchAddressRequest $watch_address_request Based on the &#39;type&#39; parameter the webhook will be triggered to either post balance or raw transactions to the &#39;url&#39;: - &#39;transaction:in&#39; for incoming BCH transactions - &#39;transaction:out&#39; for outgoing BCH transactions - &#39;transaction:in,out&#39; both for incoming and outgoing BCH transactions - &#39;balance&#39; will post the object according to &#39;BalanceResponse&#39; schema (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function watchAddressRequest($watch_address_request)
    {
        // verify the required parameter 'watch_address_request' is set
        if ($watch_address_request === null || (is_array($watch_address_request) && count($watch_address_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $watch_address_request when calling watchAddress'
            );
        }

        $resourcePath = '/webhook/watch_address';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($watch_address_request)) {
            $_tempBody = $watch_address_request;
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
