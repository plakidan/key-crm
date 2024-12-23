# OpenAPI\Client\PipelinesApi

All URIs are relative to https://openapi.keycrm.app/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachFileToPipelinesCard()**](PipelinesApi.md#attachFileToPipelinesCard) | **POST** /pipelines/cards/{cardId}/attachment/{fileId} | Додавання файлу до картки у воронці |
| [**createNewPipelineCard()**](PipelinesApi.md#createNewPipelineCard) | **POST** /pipelines/cards | Створення нової картки у воронці |
| [**createNewPipelinesCardPayment()**](PipelinesApi.md#createNewPipelinesCardPayment) | **POST** /pipelines/cards/{cardId}/payment | Додавання нової оплати для існуючої картки у воронці |
| [**deleteFileFromCard()**](PipelinesApi.md#deleteFileFromCard) | **DELETE** /pipelines/cards/{cardId}/attachment/{fileId} | Видалення файлу з картки воронки |
| [**getPaginatedListOfPipelines()**](PipelinesApi.md#getPaginatedListOfPipelines) | **GET** /pipelines | Отримання списку воронок |
| [**getPaginatedListOfPipelinesCards()**](PipelinesApi.md#getPaginatedListOfPipelinesCards) | **GET** /pipelines/cards | Отримання списку карток воронок |
| [**getPaginatedListOfPipelinesStatuses()**](PipelinesApi.md#getPaginatedListOfPipelinesStatuses) | **GET** /pipelines/{pipelineId}/statuses | Отримання статусів воронки |
| [**getPipelinesCard()**](PipelinesApi.md#getPipelinesCard) | **GET** /pipelines/cards/{cardId} | Отримання картки воронки |
| [**updateExistingPipelinesCardPayment()**](PipelinesApi.md#updateExistingPipelinesCardPayment) | **PUT** /pipelines/cards/{cardId}/payment/{paymentId} | Оновлення оплати для існуючої картки у воронці |
| [**updatePipelinesCard()**](PipelinesApi.md#updatePipelinesCard) | **PUT** /pipelines/cards/{cardId} | Оновлення картки воронки |


## `attachFileToPipelinesCard()`

```php
attachFileToPipelinesCard($card_id, $file_id, $accept): \OpenAPI\Client\Model\AttachTagToOrder202Response
```

Додавання файлу до картки у воронці

Даний маршрут додає файл до картки у воронці.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Ідентифікатор картки у воронці
$file_id = 'file_id_example'; // string | Ідентифікатор файлу
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->attachFileToPipelinesCard($card_id, $file_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->attachFileToPipelinesCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Ідентифікатор картки у воронці | |
| **file_id** | **string**| Ідентифікатор файлу | |
| **accept** | **string**| application/json | [optional] |

### Return type

[**\OpenAPI\Client\Model\AttachTagToOrder202Response**](../Model/AttachTagToOrder202Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewPipelineCard()`

```php
createNewPipelineCard($create_new_pipeline_card_request): \OpenAPI\Client\Model\PipelineCard
```

Створення нової картки у воронці

Даний маршрут створює нову картку у воронці.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_new_pipeline_card_request = new \OpenAPI\Client\Model\CreateNewPipelineCardRequest(); // \OpenAPI\Client\Model\CreateNewPipelineCardRequest | Приклад об'єкту запиту для створення нової картки у воронці

try {
    $result = $apiInstance->createNewPipelineCard($create_new_pipeline_card_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->createNewPipelineCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_pipeline_card_request** | [**\OpenAPI\Client\Model\CreateNewPipelineCardRequest**](../Model/CreateNewPipelineCardRequest.md)| Приклад об&#39;єкту запиту для створення нової картки у воронці | |

### Return type

[**\OpenAPI\Client\Model\PipelineCard**](../Model/PipelineCard.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewPipelinesCardPayment()`

```php
createNewPipelinesCardPayment($card_id, $create_new_order_payment_request, $accept): \OpenAPI\Client\Model\Payment
```

Додавання нової оплати для існуючої картки у воронці

Даний маршрут створює нову оплату для картки у воронці.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Ідентифікатор картки у воронці
$create_new_order_payment_request = new \OpenAPI\Client\Model\CreateNewOrderPaymentRequest(); // \OpenAPI\Client\Model\CreateNewOrderPaymentRequest | Приклад об'єкту запиту для створення нової оплати
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->createNewPipelinesCardPayment($card_id, $create_new_order_payment_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->createNewPipelinesCardPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Ідентифікатор картки у воронці | |
| **create_new_order_payment_request** | [**\OpenAPI\Client\Model\CreateNewOrderPaymentRequest**](../Model/CreateNewOrderPaymentRequest.md)| Приклад об&#39;єкту запиту для створення нової оплати | |
| **accept** | **string**| application/json | [optional] |

### Return type

[**\OpenAPI\Client\Model\Payment**](../Model/Payment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFileFromCard()`

```php
deleteFileFromCard($card_id, $file_id, $accept): \OpenAPI\Client\Model\AttachTagToOrder202Response
```

Видалення файлу з картки воронки

Даний маршрут видаляє файл з картки воронки.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Ідентифікатор картки воронки
$file_id = 'file_id_example'; // string | Ідентифікатор файлу
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->deleteFileFromCard($card_id, $file_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->deleteFileFromCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Ідентифікатор картки воронки | |
| **file_id** | **string**| Ідентифікатор файлу | |
| **accept** | **string**| application/json | [optional] |

### Return type

[**\OpenAPI\Client\Model\AttachTagToOrder202Response**](../Model/AttachTagToOrder202Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaginatedListOfPipelines()`

```php
getPaginatedListOfPipelines($accept, $limit, $page): \OpenAPI\Client\Model\GetPaginatedListOfPipelines200Response
```

Отримання списку воронок

Даний маршрут повертає список воронок.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку

try {
    $result = $apiInstance->getPaginatedListOfPipelines($accept, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->getPaginatedListOfPipelines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfPipelines200Response**](../Model/GetPaginatedListOfPipelines200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaginatedListOfPipelinesCards()`

```php
getPaginatedListOfPipelinesCards($accept, $limit, $page, $include, $filter): \OpenAPI\Client\Model\GetPaginatedListOfPipelinesCards200Response
```

Отримання списку карток воронок

Даний маршрут повертає список карток воронок.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку
$include = 'include_example'; // string | Підключення додаткових асоціацій, розділені комами. Приклад: <strong>contact,products.offer,manager</strong> <br/><br/> Допустимі асоціації `contact.client`, `products`, `manager`, `status`, `payments`,  `custom_fields`
$filter = {"pipeline_id":1}; // object | Фільтрація списку карток воронок

try {
    $result = $apiInstance->getPaginatedListOfPipelinesCards($accept, $limit, $page, $include, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->getPaginatedListOfPipelinesCards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |
| **include** | **string**| Підключення додаткових асоціацій, розділені комами. Приклад: &lt;strong&gt;contact,products.offer,manager&lt;/strong&gt; &lt;br/&gt;&lt;br/&gt; Допустимі асоціації &#x60;contact.client&#x60;, &#x60;products&#x60;, &#x60;manager&#x60;, &#x60;status&#x60;, &#x60;payments&#x60;,  &#x60;custom_fields&#x60; | [optional] |
| **filter** | [**object**](../Model/.md)| Фільтрація списку карток воронок | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfPipelinesCards200Response**](../Model/GetPaginatedListOfPipelinesCards200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaginatedListOfPipelinesStatuses()`

```php
getPaginatedListOfPipelinesStatuses($pipeline_id, $accept, $limit, $page): \OpenAPI\Client\Model\GetPaginatedListOfPipelinesStatuses200Response
```

Отримання статусів воронки

Даний маршрут повертає список статусів воронки.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pipeline_id = 'pipeline_id_example'; // string | Ідентифікатор воронки
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку

try {
    $result = $apiInstance->getPaginatedListOfPipelinesStatuses($pipeline_id, $accept, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->getPaginatedListOfPipelinesStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pipeline_id** | **string**| Ідентифікатор воронки | |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfPipelinesStatuses200Response**](../Model/GetPaginatedListOfPipelinesStatuses200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPipelinesCard()`

```php
getPipelinesCard($card_id, $accept, $include): \OpenAPI\Client\Model\GetPaginatedListOfPipelinesCards200Response
```

Отримання картки воронки

Даний маршрут повертає картку воронки.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Ідентифікатор картки у воронці
$accept = 'accept_example'; // string | application/json
$include = 'include_example'; // string | Підключення додаткових асоціацій, розділені комами. Приклад: <strong>contact,products.offer,manager</strong> <br/><br/> Допустимі асоціації `contact.client`, `products`, `manager`, `status`, `payments`,  `custom_fields`

try {
    $result = $apiInstance->getPipelinesCard($card_id, $accept, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->getPipelinesCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Ідентифікатор картки у воронці | |
| **accept** | **string**| application/json | [optional] |
| **include** | **string**| Підключення додаткових асоціацій, розділені комами. Приклад: &lt;strong&gt;contact,products.offer,manager&lt;/strong&gt; &lt;br/&gt;&lt;br/&gt; Допустимі асоціації &#x60;contact.client&#x60;, &#x60;products&#x60;, &#x60;manager&#x60;, &#x60;status&#x60;, &#x60;payments&#x60;,  &#x60;custom_fields&#x60; | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfPipelinesCards200Response**](../Model/GetPaginatedListOfPipelinesCards200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExistingPipelinesCardPayment()`

```php
updateExistingPipelinesCardPayment($card_id, $payment_id, $update_existing_order_payment_request, $accept): \OpenAPI\Client\Model\Payment
```

Оновлення оплати для існуючої картки у воронці

Даний маршрут оновлює оплату існуючої картки у воронці.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Ідентифікатор картки у воронці
$payment_id = 'payment_id_example'; // string | Ідентифікатор оплати
$update_existing_order_payment_request = new \OpenAPI\Client\Model\UpdateExistingOrderPaymentRequest(); // \OpenAPI\Client\Model\UpdateExistingOrderPaymentRequest | Приклад об'єкту запиту для оновлення оплати
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->updateExistingPipelinesCardPayment($card_id, $payment_id, $update_existing_order_payment_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->updateExistingPipelinesCardPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Ідентифікатор картки у воронці | |
| **payment_id** | **string**| Ідентифікатор оплати | |
| **update_existing_order_payment_request** | [**\OpenAPI\Client\Model\UpdateExistingOrderPaymentRequest**](../Model/UpdateExistingOrderPaymentRequest.md)| Приклад об&#39;єкту запиту для оновлення оплати | |
| **accept** | **string**| application/json | [optional] |

### Return type

[**\OpenAPI\Client\Model\Payment**](../Model/Payment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePipelinesCard()`

```php
updatePipelinesCard($card_id, $update_pipelines_card_request, $accept): \OpenAPI\Client\Model\AttachTagToOrder202Response
```

Оновлення картки воронки

Даний маршрут оновлює картку воронки.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$card_id = 'card_id_example'; // string | Ідентифікатор картки у воронці
$update_pipelines_card_request = new \OpenAPI\Client\Model\UpdatePipelinesCardRequest(); // \OpenAPI\Client\Model\UpdatePipelinesCardRequest | Приклад об'єкту запиту для оновлення картки воронки
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->updatePipelinesCard($card_id, $update_pipelines_card_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->updatePipelinesCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **card_id** | **string**| Ідентифікатор картки у воронці | |
| **update_pipelines_card_request** | [**\OpenAPI\Client\Model\UpdatePipelinesCardRequest**](../Model/UpdatePipelinesCardRequest.md)| Приклад об&#39;єкту запиту для оновлення картки воронки | |
| **accept** | **string**| application/json | [optional] |

### Return type

[**\OpenAPI\Client\Model\AttachTagToOrder202Response**](../Model/AttachTagToOrder202Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
