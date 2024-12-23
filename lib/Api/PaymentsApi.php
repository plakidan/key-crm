<?php
/**
 * PaymentsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * KeyCRM OpenAPI documentation
 *
 * Опис REST маршрутів для роботи з KeyCRM OpenAPI.<br><br> <b>Зверніть увагу:</b> <br> 1. Для авторизації потрібно передавати заголовок у форматі Bearer + <a href=\"https://help.keycrm.app/uk/process-automation-api-and-more/where-to-get-an-api-key\" target=\"_blank\">APIkey</a> (authorization:[Bearer `ваш-API-ключ`]); <br> 2. Є обмеження до 60 запитів на хвилину з однієї IP-адреси по API-ключу; <br> 3. Час у всіх сутностях використовується UTC (GMT+0) - при зчитуванні (GET-запити), при виборі (фільтрації) по часу створення сутності, а також при створенні сутностей (POST).
 *
 * The version of the OpenAPI document: 1.2.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * PaymentsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentsApi
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
        'attachExternalTransactionToPayment' => [
            'application/json',
        ],
        'getPaginatedListOfExternalTransactions' => [
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
        $this->config = $config ?: Configuration::getDefaultConfiguration();
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
     * Operation attachExternalTransactionToPayment
     *
     * Додавання зовнішньої транзакції до оплати
     *
     * @param  string $payment_id Ідентифікатор оплати. (required)
     * @param  \OpenAPI\Client\Model\AttachExternalTransactionToPaymentRequest $attach_external_transaction_to_payment_request Приклад об&#39;єкту запиту для додавання зовнішньої транзакції до оплати (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['attachExternalTransactionToPayment'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\Payment
     */
    public function attachExternalTransactionToPayment($payment_id, $attach_external_transaction_to_payment_request, string $contentType = self::contentTypes['attachExternalTransactionToPayment'][0])
    {
        list($response) = $this->attachExternalTransactionToPaymentWithHttpInfo($payment_id, $attach_external_transaction_to_payment_request, $contentType);
        return $response;
    }

    /**
     * Operation attachExternalTransactionToPaymentWithHttpInfo
     *
     * Додавання зовнішньої транзакції до оплати
     *
     * @param  string $payment_id Ідентифікатор оплати. (required)
     * @param  \OpenAPI\Client\Model\AttachExternalTransactionToPaymentRequest $attach_external_transaction_to_payment_request Приклад об&#39;єкту запиту для додавання зовнішньої транзакції до оплати (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['attachExternalTransactionToPayment'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\Payment, HTTP status code, HTTP response headers (array of strings)
     */
    public function attachExternalTransactionToPaymentWithHttpInfo($payment_id, $attach_external_transaction_to_payment_request, string $contentType = self::contentTypes['attachExternalTransactionToPayment'][0])
    {
        $request = $this->attachExternalTransactionToPaymentRequest($payment_id, $attach_external_transaction_to_payment_request, $contentType);

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


            switch($statusCode) {
                case 201:
                    if ('\OpenAPI\Client\Model\Payment' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\Payment' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\Payment', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\OpenAPI\Client\Model\Payment';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        '\OpenAPI\Client\Model\Payment',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation attachExternalTransactionToPaymentAsync
     *
     * Додавання зовнішньої транзакції до оплати
     *
     * @param  string $payment_id Ідентифікатор оплати. (required)
     * @param  \OpenAPI\Client\Model\AttachExternalTransactionToPaymentRequest $attach_external_transaction_to_payment_request Приклад об&#39;єкту запиту для додавання зовнішньої транзакції до оплати (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['attachExternalTransactionToPayment'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function attachExternalTransactionToPaymentAsync($payment_id, $attach_external_transaction_to_payment_request, string $contentType = self::contentTypes['attachExternalTransactionToPayment'][0])
    {
        return $this->attachExternalTransactionToPaymentAsyncWithHttpInfo($payment_id, $attach_external_transaction_to_payment_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation attachExternalTransactionToPaymentAsyncWithHttpInfo
     *
     * Додавання зовнішньої транзакції до оплати
     *
     * @param  string $payment_id Ідентифікатор оплати. (required)
     * @param  \OpenAPI\Client\Model\AttachExternalTransactionToPaymentRequest $attach_external_transaction_to_payment_request Приклад об&#39;єкту запиту для додавання зовнішньої транзакції до оплати (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['attachExternalTransactionToPayment'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function attachExternalTransactionToPaymentAsyncWithHttpInfo($payment_id, $attach_external_transaction_to_payment_request, string $contentType = self::contentTypes['attachExternalTransactionToPayment'][0])
    {
        $returnType = '\OpenAPI\Client\Model\Payment';
        $request = $this->attachExternalTransactionToPaymentRequest($payment_id, $attach_external_transaction_to_payment_request, $contentType);

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
     * Create request for operation 'attachExternalTransactionToPayment'
     *
     * @param  string $payment_id Ідентифікатор оплати. (required)
     * @param  \OpenAPI\Client\Model\AttachExternalTransactionToPaymentRequest $attach_external_transaction_to_payment_request Приклад об&#39;єкту запиту для додавання зовнішньої транзакції до оплати (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['attachExternalTransactionToPayment'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function attachExternalTransactionToPaymentRequest($payment_id, $attach_external_transaction_to_payment_request, string $contentType = self::contentTypes['attachExternalTransactionToPayment'][0])
    {

        // verify the required parameter 'payment_id' is set
        if ($payment_id === null || (is_array($payment_id) && count($payment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_id when calling attachExternalTransactionToPayment'
            );
        }

        // verify the required parameter 'attach_external_transaction_to_payment_request' is set
        if ($attach_external_transaction_to_payment_request === null || (is_array($attach_external_transaction_to_payment_request) && count($attach_external_transaction_to_payment_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $attach_external_transaction_to_payment_request when calling attachExternalTransactionToPayment'
            );
        }


        $resourcePath = '/payments/{paymentId}/external-transactions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($payment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentId' . '}',
                ObjectSerializer::toPathValue($payment_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($attach_external_transaction_to_payment_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($attach_external_transaction_to_payment_request));
            } else {
                $httpBody = $attach_external_transaction_to_payment_request;
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
     * Operation getPaginatedListOfExternalTransactions
     *
     * Отримання списку зовнішніх транзакцій
     *
     * @param  string $accept application/json (optional)
     * @param  int $limit Максимальна кількість елементів у пагінованому списку. Максимум 50. (optional, default to 15)
     * @param  int $page Вкажіть сторінку (optional, default to 1)
     * @param  object $filter Фільтрація списку транзакцій (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaginatedListOfExternalTransactions'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\GetPaginatedListOfExternalTransactions200Response
     */
    public function getPaginatedListOfExternalTransactions($accept = null, $limit = 15, $page = 1, $filter = null, string $contentType = self::contentTypes['getPaginatedListOfExternalTransactions'][0])
    {
        list($response) = $this->getPaginatedListOfExternalTransactionsWithHttpInfo($accept, $limit, $page, $filter, $contentType);
        return $response;
    }

    /**
     * Operation getPaginatedListOfExternalTransactionsWithHttpInfo
     *
     * Отримання списку зовнішніх транзакцій
     *
     * @param  string $accept application/json (optional)
     * @param  int $limit Максимальна кількість елементів у пагінованому списку. Максимум 50. (optional, default to 15)
     * @param  int $page Вкажіть сторінку (optional, default to 1)
     * @param  object $filter Фільтрація списку транзакцій (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaginatedListOfExternalTransactions'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\GetPaginatedListOfExternalTransactions200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaginatedListOfExternalTransactionsWithHttpInfo($accept = null, $limit = 15, $page = 1, $filter = null, string $contentType = self::contentTypes['getPaginatedListOfExternalTransactions'][0])
    {
        $request = $this->getPaginatedListOfExternalTransactionsRequest($accept, $limit, $page, $filter, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\GetPaginatedListOfExternalTransactions200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\GetPaginatedListOfExternalTransactions200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\GetPaginatedListOfExternalTransactions200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\OpenAPI\Client\Model\GetPaginatedListOfExternalTransactions200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
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
                        '\OpenAPI\Client\Model\GetPaginatedListOfExternalTransactions200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPaginatedListOfExternalTransactionsAsync
     *
     * Отримання списку зовнішніх транзакцій
     *
     * @param  string $accept application/json (optional)
     * @param  int $limit Максимальна кількість елементів у пагінованому списку. Максимум 50. (optional, default to 15)
     * @param  int $page Вкажіть сторінку (optional, default to 1)
     * @param  object $filter Фільтрація списку транзакцій (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaginatedListOfExternalTransactions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaginatedListOfExternalTransactionsAsync($accept = null, $limit = 15, $page = 1, $filter = null, string $contentType = self::contentTypes['getPaginatedListOfExternalTransactions'][0])
    {
        return $this->getPaginatedListOfExternalTransactionsAsyncWithHttpInfo($accept, $limit, $page, $filter, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPaginatedListOfExternalTransactionsAsyncWithHttpInfo
     *
     * Отримання списку зовнішніх транзакцій
     *
     * @param  string $accept application/json (optional)
     * @param  int $limit Максимальна кількість елементів у пагінованому списку. Максимум 50. (optional, default to 15)
     * @param  int $page Вкажіть сторінку (optional, default to 1)
     * @param  object $filter Фільтрація списку транзакцій (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaginatedListOfExternalTransactions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaginatedListOfExternalTransactionsAsyncWithHttpInfo($accept = null, $limit = 15, $page = 1, $filter = null, string $contentType = self::contentTypes['getPaginatedListOfExternalTransactions'][0])
    {
        $returnType = '\OpenAPI\Client\Model\GetPaginatedListOfExternalTransactions200Response';
        $request = $this->getPaginatedListOfExternalTransactionsRequest($accept, $limit, $page, $filter, $contentType);

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
     * Create request for operation 'getPaginatedListOfExternalTransactions'
     *
     * @param  string $accept application/json (optional)
     * @param  int $limit Максимальна кількість елементів у пагінованому списку. Максимум 50. (optional, default to 15)
     * @param  int $page Вкажіть сторінку (optional, default to 1)
     * @param  object $filter Фільтрація списку транзакцій (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaginatedListOfExternalTransactions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaginatedListOfExternalTransactionsRequest($accept = null, $limit = 15, $page = 1, $filter = null, string $contentType = self::contentTypes['getPaginatedListOfExternalTransactions'][0])
    {


        if ($limit !== null && $limit > 50) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling PaymentsApi.getPaginatedListOfExternalTransactions, must be smaller than or equal to 50.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling PaymentsApi.getPaginatedListOfExternalTransactions, must be bigger than or equal to 1.');
        }
        



        $resourcePath = '/payments/external-transactions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter,
            'filter', // param base name
            'object', // openApiType
            'deepObject', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
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
            'GET',
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
