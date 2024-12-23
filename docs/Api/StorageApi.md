# OpenAPI\Client\StorageApi

All URIs are relative to https://openapi.keycrm.app/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEntityListOfFiles()**](StorageApi.md#getEntityListOfFiles) | **GET** /storage/attachment/{entityType}/{entityId} | Отримання списку файлів по сутності |
| [**getPaginatedListOfFiles()**](StorageApi.md#getPaginatedListOfFiles) | **GET** /storage | Отримання списку завантажених файлів |
| [**uploadStorageFile()**](StorageApi.md#uploadStorageFile) | **POST** /storage/upload | Завантаження файла |


## `getEntityListOfFiles()`

```php
getEntityListOfFiles($entity_type, $entity_id): \OpenAPI\Client\Model\File[]
```

Отримання списку файлів по сутності

Даний маршрут повертає список файлів по сутності.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity_type = 'entity_type_example'; // string | Тип сутності, по якій потрібно отримати файли. Можливі значення: `order` (замовлення) або `pipelines` (картка у воронках).
$entity_id = 'entity_id_example'; // string | Ідентифікатор сутності в системі

try {
    $result = $apiInstance->getEntityListOfFiles($entity_type, $entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getEntityListOfFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_type** | **string**| Тип сутності, по якій потрібно отримати файли. Можливі значення: &#x60;order&#x60; (замовлення) або &#x60;pipelines&#x60; (картка у воронках). | |
| **entity_id** | **string**| Ідентифікатор сутності в системі | |

### Return type

[**\OpenAPI\Client\Model\File[]**](../Model/File.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaginatedListOfFiles()`

```php
getPaginatedListOfFiles($accept, $limit, $page, $sort): \OpenAPI\Client\Model\GetPaginatedListOfFiles200Response
```

Отримання списку завантажених файлів

Даний маршрут повертає список файлів.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку
$sort = size; // string | Сортування списку файлів

try {
    $result = $apiInstance->getPaginatedListOfFiles($accept, $limit, $page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->getPaginatedListOfFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |
| **sort** | **string**| Сортування списку файлів | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfFiles200Response**](../Model/GetPaginatedListOfFiles200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadStorageFile()`

```php
uploadStorageFile($file): \OpenAPI\Client\Model\File
```

Завантаження файла

Даний маршрут завантажує файл на сервер і створює новий запис у файловій системі.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\StorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = '/path/to/file.txt'; // \SplFileObject | Обраний файл для завантаження

try {
    $result = $apiInstance->uploadStorageFile($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageApi->uploadStorageFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| Обраний файл для завантаження | |

### Return type

[**\OpenAPI\Client\Model\File**](../Model/File.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
