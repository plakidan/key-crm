# OpenAPI\Client\CustomFieldsApi

All URIs are relative to https://openapi.keycrm.app/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getListOfCustomFields()**](CustomFieldsApi.md#getListOfCustomFields) | **GET** /custom-fields | Отримання списку користувацьких полів |


## `getListOfCustomFields()`

```php
getListOfCustomFields($accept, $include, $sort, $filter): \OpenAPI\Client\Model\CustomField[]
```

Отримання списку користувацьких полів

Даний маршрут дозволяє отримати список всіх користувацьких полів. Якщо потрібно отримати опції списочних полів, то вкажіть параметр `include=options`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$include = 'include_example'; // string | Підключення додаткових асоціацій<br/><br/> Допустимі асоціації: `options`(опції списочних полів)
$sort = position; // string | Сортування списку користувацьких полів
$filter = {"model":"lead,order,client,crm_product"}; // object | Фільтрація списку користувацьких полів

try {
    $result = $apiInstance->getListOfCustomFields($accept, $include, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getListOfCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **include** | **string**| Підключення додаткових асоціацій&lt;br/&gt;&lt;br/&gt; Допустимі асоціації: &#x60;options&#x60;(опції списочних полів) | [optional] |
| **sort** | **string**| Сортування списку користувацьких полів | [optional] |
| **filter** | [**object**](../Model/.md)| Фільтрація списку користувацьких полів | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomField[]**](../Model/CustomField.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
