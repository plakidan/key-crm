# OpenAPI\Client\BuyerApi

All URIs are relative to https://openapi.keycrm.app/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNewBuyer()**](BuyerApi.md#createNewBuyer) | **POST** /buyer | Створення нового покупця |
| [**getBuyerById()**](BuyerApi.md#getBuyerById) | **GET** /buyer/{buyerId} | Отримання сутності покупця за ідентифікатором |
| [**getPaginatedListOfBuyers()**](BuyerApi.md#getPaginatedListOfBuyers) | **GET** /buyer | Отримання списку покупців |
| [**importBuyers()**](BuyerApi.md#importBuyers) | **POST** /buyer/import | Імпорт покупців |
| [**updateExistingBuyer()**](BuyerApi.md#updateExistingBuyer) | **PUT** /buyer/{buyerId} | Оновлення існуючого покупця |


## `createNewBuyer()`

```php
createNewBuyer($update_existing_buyer_request, $accept): \OpenAPI\Client\Model\Buyer
```

Створення нового покупця

Даний маршрут створює нового покупця.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_existing_buyer_request = new \OpenAPI\Client\Model\UpdateExistingBuyerRequest(); // \OpenAPI\Client\Model\UpdateExistingBuyerRequest | Приклад об'єкту запиту для створення нового покупця
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->createNewBuyer($update_existing_buyer_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createNewBuyer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_existing_buyer_request** | [**\OpenAPI\Client\Model\UpdateExistingBuyerRequest**](../Model/UpdateExistingBuyerRequest.md)| Приклад об&#39;єкту запиту для створення нового покупця | |
| **accept** | **string**| application/json | [optional] |

### Return type

[**\OpenAPI\Client\Model\Buyer**](../Model/Buyer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBuyerById()`

```php
getBuyerById($buyer_id, $accept, $include): \OpenAPI\Client\Model\BuyerWithIncludes
```

Отримання сутності покупця за ідентифікатором

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$buyer_id = 'buyer_id_example'; // string | Ідентифікатор покупця
$accept = 'accept_example'; // string | application/json
$include = 'include_example'; // string | Підключення додаткових асоціацій, розділені комами. Приклад: <strong>manager,company</strong> <br/><br/> Допустимі асоціації `manager`, `shipping`, `company`, `loyalty`, `custom_fields`

try {
    $result = $apiInstance->getBuyerById($buyer_id, $accept, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getBuyerById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buyer_id** | **string**| Ідентифікатор покупця | |
| **accept** | **string**| application/json | [optional] |
| **include** | **string**| Підключення додаткових асоціацій, розділені комами. Приклад: &lt;strong&gt;manager,company&lt;/strong&gt; &lt;br/&gt;&lt;br/&gt; Допустимі асоціації &#x60;manager&#x60;, &#x60;shipping&#x60;, &#x60;company&#x60;, &#x60;loyalty&#x60;, &#x60;custom_fields&#x60; | [optional] |

### Return type

[**\OpenAPI\Client\Model\BuyerWithIncludes**](../Model/BuyerWithIncludes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaginatedListOfBuyers()`

```php
getPaginatedListOfBuyers($accept, $limit, $page, $include, $filter): \OpenAPI\Client\Model\GetPaginatedListOfBuyers200Response
```

Отримання списку покупців

Даний маршрут повертає список покупців.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку
$include = 'include_example'; // string | Підключення додаткових асоціацій, розділені комами. Приклад: <strong>manager,company</strong> <br/><br/> Допустимі асоціації `manager`, `shipping`, `company`, `loyalty`, `custom_fields`
$filter = {"buyer_id":"4545,4546"}; // object | Фільтрація списку покупців

try {
    $result = $apiInstance->getPaginatedListOfBuyers($accept, $limit, $page, $include, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->getPaginatedListOfBuyers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |
| **include** | **string**| Підключення додаткових асоціацій, розділені комами. Приклад: &lt;strong&gt;manager,company&lt;/strong&gt; &lt;br/&gt;&lt;br/&gt; Допустимі асоціації &#x60;manager&#x60;, &#x60;shipping&#x60;, &#x60;company&#x60;, &#x60;loyalty&#x60;, &#x60;custom_fields&#x60; | [optional] |
| **filter** | [**object**](../Model/.md)| Фільтрація списку покупців | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfBuyers200Response**](../Model/GetPaginatedListOfBuyers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importBuyers()`

```php
importBuyers($import_buyers_request, $accept): \OpenAPI\Client\Model\AttachTagToOrder202Response
```

Імпорт покупців

Даний маршрут імпортує покупців.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$import_buyers_request = new \OpenAPI\Client\Model\ImportBuyersRequest(); // \OpenAPI\Client\Model\ImportBuyersRequest | Приклад об'єкту запиту для імпорту покупців
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->importBuyers($import_buyers_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->importBuyers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **import_buyers_request** | [**\OpenAPI\Client\Model\ImportBuyersRequest**](../Model/ImportBuyersRequest.md)| Приклад об&#39;єкту запиту для імпорту покупців | |
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

## `updateExistingBuyer()`

```php
updateExistingBuyer($buyer_id, $update_existing_buyer_request, $accept): \OpenAPI\Client\Model\Buyer
```

Оновлення існуючого покупця

Даний маршрут оновлює існуючого покупця.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BuyerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$buyer_id = 'buyer_id_example'; // string | Ідентифікатор покупця
$update_existing_buyer_request = new \OpenAPI\Client\Model\UpdateExistingBuyerRequest(); // \OpenAPI\Client\Model\UpdateExistingBuyerRequest | Приклад об'єкту запиту для оновлення покупця
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->updateExistingBuyer($buyer_id, $update_existing_buyer_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->updateExistingBuyer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **buyer_id** | **string**| Ідентифікатор покупця | |
| **update_existing_buyer_request** | [**\OpenAPI\Client\Model\UpdateExistingBuyerRequest**](../Model/UpdateExistingBuyerRequest.md)| Приклад об&#39;єкту запиту для оновлення покупця | |
| **accept** | **string**| application/json | [optional] |

### Return type

[**\OpenAPI\Client\Model\Buyer**](../Model/Buyer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
