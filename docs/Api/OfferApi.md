# OpenAPI\Client\OfferApi

All URIs are relative to https://openapi.keycrm.app/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPaginatedListOfOffers()**](OfferApi.md#getPaginatedListOfOffers) | **GET** /offers | Отримання варіантів товарів |
| [**getPaginatedListOfStocks()**](OfferApi.md#getPaginatedListOfStocks) | **GET** /offers/stocks | Отримання списку залишків |
| [**offersStocksUpdate()**](OfferApi.md#offersStocksUpdate) | **PUT** /offers/stocks | Оновлення залишків товару на складі |
| [**offersUpdate()**](OfferApi.md#offersUpdate) | **PUT** /offers | Редагування варіантів товару |


## `getPaginatedListOfOffers()`

```php
getPaginatedListOfOffers($accept, $limit, $page, $include, $sort, $filter): \OpenAPI\Client\Model\GetPaginatedListOfOffers200Response
```

Отримання варіантів товарів

Даний маршрут дозволяє отримати список варіантів товарів. Якщо потрібно отримати інформацію про товар, якому належить варіант, то вкажіть параметр `include=product`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку
$include = 'include_example'; // string | Підключення додаткових асоціацій<br/><br/> Допустимі асоціації `product`
$sort = id; // string | Сортування списку вариантів товарів
$filter = {"id":"1,2"}; // object | Фільтрація списку вариантів товарів

try {
    $result = $apiInstance->getPaginatedListOfOffers($accept, $limit, $page, $include, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->getPaginatedListOfOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |
| **include** | **string**| Підключення додаткових асоціацій&lt;br/&gt;&lt;br/&gt; Допустимі асоціації &#x60;product&#x60; | [optional] |
| **sort** | **string**| Сортування списку вариантів товарів | [optional] |
| **filter** | [**object**](../Model/.md)| Фільтрація списку вариантів товарів | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfOffers200Response**](../Model/GetPaginatedListOfOffers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaginatedListOfStocks()`

```php
getPaginatedListOfStocks($accept, $limit, $page, $filter): \OpenAPI\Client\Model\GetPaginatedListOfStocks200Response
```

Отримання списку залишків

Даний маршрут повертає список залишків.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку
$filter = {"offers_id":"4545,4546"}; // object | Фільтрація списку залишків

try {
    $result = $apiInstance->getPaginatedListOfStocks($accept, $limit, $page, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->getPaginatedListOfStocks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |
| **filter** | [**object**](../Model/.md)| Фільтрація списку залишків | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfStocks200Response**](../Model/GetPaginatedListOfStocks200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `offersStocksUpdate()`

```php
offersStocksUpdate($offers_stocks_update_request): \OpenAPI\Client\Model\AttachTagToOrder202Response
```

Оновлення залишків товару на складі

Створює запис руху товарів для приведення залишків на складі до потрібної кількості.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offers_stocks_update_request = new \OpenAPI\Client\Model\OffersStocksUpdateRequest(); // \OpenAPI\Client\Model\OffersStocksUpdateRequest | Приклад об'єкту запиту для зміни залишків на складі. Для кожного із товарів у масиві обов'язково має бути вказаний один із параметрів, offer_id або sku

try {
    $result = $apiInstance->offersStocksUpdate($offers_stocks_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->offersStocksUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offers_stocks_update_request** | [**\OpenAPI\Client\Model\OffersStocksUpdateRequest**](../Model/OffersStocksUpdateRequest.md)| Приклад об&#39;єкту запиту для зміни залишків на складі. Для кожного із товарів у масиві обов&#39;язково має бути вказаний один із параметрів, offer_id або sku | |

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

## `offersUpdate()`

```php
offersUpdate($offers_update_request): \OpenAPI\Client\Model\AttachTagToOrder202Response
```

Редагування варіантів товару

Даний маршрут дозволяє змінити параметри вартості, закупівельної вартості, ваги і габаритів варіанту товару.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offers_update_request = new \OpenAPI\Client\Model\OffersUpdateRequest(); // \OpenAPI\Client\Model\OffersUpdateRequest | Приклад об'єкту запиту для зміни варіантів. Для кожного з товарів у масиві обов'язково має бути вказано один з параметрів, id або sku.

try {
    $result = $apiInstance->offersUpdate($offers_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->offersUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offers_update_request** | [**\OpenAPI\Client\Model\OffersUpdateRequest**](../Model/OffersUpdateRequest.md)| Приклад об&#39;єкту запиту для зміни варіантів. Для кожного з товарів у масиві обов&#39;язково має бути вказано один з параметрів, id або sku. | |

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
