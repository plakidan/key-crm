# OpenAPI\Client\ProductsApi

All URIs are relative to https://openapi.keycrm.app/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNewCategory()**](ProductsApi.md#createNewCategory) | **POST** /products/categories | Створення нової категорії товарів |
| [**createNewProduct()**](ProductsApi.md#createNewProduct) | **POST** /products | Створення нового товару |
| [**createNewProductImport()**](ProductsApi.md#createNewProductImport) | **POST** /products/import | Створення нових товарів списком |
| [**createNewProductOffers()**](ProductsApi.md#createNewProductOffers) | **POST** /products/{productId}/offers | Створення нових варіантів товару |
| [**getPaginatedListOfCategories()**](ProductsApi.md#getPaginatedListOfCategories) | **GET** /products/categories | Отримання списку категорій товарів |
| [**getPaginatedListOfProducts()**](ProductsApi.md#getPaginatedListOfProducts) | **GET** /products | Отримання списку товарів |
| [**getProductById()**](ProductsApi.md#getProductById) | **GET** /products/{productId} | Отримання сутності товару за ідентифікатором |
| [**updateExistingProduct()**](ProductsApi.md#updateExistingProduct) | **PUT** /products/{productId} | Оновлення існуючого товару |


## `createNewCategory()`

```php
createNewCategory($create_new_category_request, $accept): \OpenAPI\Client\Model\Category
```

Створення нової категорії товарів

Даний маршрут створює нову категорію товарів.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_new_category_request = new \OpenAPI\Client\Model\CreateNewCategoryRequest(); // \OpenAPI\Client\Model\CreateNewCategoryRequest | Приклад об'єкту запиту для створення нової категорії товарів
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->createNewCategory($create_new_category_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createNewCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_category_request** | [**\OpenAPI\Client\Model\CreateNewCategoryRequest**](../Model/CreateNewCategoryRequest.md)| Приклад об&#39;єкту запиту для створення нової категорії товарів | |
| **accept** | **string**| application/json | [optional] |

### Return type

[**\OpenAPI\Client\Model\Category**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewProduct()`

```php
createNewProduct($create_new_product_request, $accept): \OpenAPI\Client\Model\Product
```

Створення нового товару

Даний маршрут створює новий товар без варіантів (наборів властивостей). При створенні можна задавати значення для існуючих користувацьких полів у товарах.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_new_product_request = new \OpenAPI\Client\Model\CreateNewProductRequest(); // \OpenAPI\Client\Model\CreateNewProductRequest | Приклад об'єкту запиту для створення нового товару
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->createNewProduct($create_new_product_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createNewProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_product_request** | [**\OpenAPI\Client\Model\CreateNewProductRequest**](../Model/CreateNewProductRequest.md)| Приклад об&#39;єкту запиту для створення нового товару | |
| **accept** | **string**| application/json | [optional] |

### Return type

[**\OpenAPI\Client\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewProductImport()`

```php
createNewProductImport($create_new_product_import_request, $accept): \OpenAPI\Client\Model\AttachTagToOrder202Response
```

Створення нових товарів списком

Даний маршрут дозволяє створювати нові товари списком, до 100 шт. за один запит.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_new_product_import_request = new \OpenAPI\Client\Model\CreateNewProductImportRequest(); // \OpenAPI\Client\Model\CreateNewProductImportRequest | Приклад запиту для створення нових товарів списком.
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->createNewProductImport($create_new_product_import_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createNewProductImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_product_import_request** | [**\OpenAPI\Client\Model\CreateNewProductImportRequest**](../Model/CreateNewProductImportRequest.md)| Приклад запиту для створення нових товарів списком. | |
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

## `createNewProductOffers()`

```php
createNewProductOffers($product_id, $create_new_product_offers_request, $accept): \OpenAPI\Client\Model\AttachTagToOrder202Response
```

Створення нових варіантів товару

Даний маршрут створює нові варіанти товару. Максимум 100 шт. за один запит.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 'product_id_example'; // string | Ідентифікатор товару
$create_new_product_offers_request = new \OpenAPI\Client\Model\CreateNewProductOffersRequest(); // \OpenAPI\Client\Model\CreateNewProductOffersRequest | Приклад об'єкту запиту для створення новых варіантів товару
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->createNewProductOffers($product_id, $create_new_product_offers_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createNewProductOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Ідентифікатор товару | |
| **create_new_product_offers_request** | [**\OpenAPI\Client\Model\CreateNewProductOffersRequest**](../Model/CreateNewProductOffersRequest.md)| Приклад об&#39;єкту запиту для створення новых варіантів товару | |
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

## `getPaginatedListOfCategories()`

```php
getPaginatedListOfCategories($accept, $limit, $page, $filter): \OpenAPI\Client\Model\GetPaginatedListOfCategories200Response
```

Отримання списку категорій товарів

Даний маршрут повертає пагінований список категорій товарів.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку
$filter = {"category_id":"4545,4546"}; // object | Фільтрація списку категорій товарів

try {
    $result = $apiInstance->getPaginatedListOfCategories($accept, $limit, $page, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getPaginatedListOfCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |
| **filter** | [**object**](../Model/.md)| Фільтрація списку категорій товарів | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfCategories200Response**](../Model/GetPaginatedListOfCategories200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaginatedListOfProducts()`

```php
getPaginatedListOfProducts($accept, $limit, $page, $include, $filter): \OpenAPI\Client\Model\GetPaginatedListOfProducts200Response
```

Отримання списку товарів

Даний маршрут повертає пагінований список товарів.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку
$include = 'include_example'; // string | Підключення додаткових асоціацій, розділені комами. Приклад: <strong>custom_fields</strong> <br/><br/> Допустимі асоціації `custom_fields`
$filter = {"product_id":"4545,4546"}; // object | Фільтрація списку товарів

try {
    $result = $apiInstance->getPaginatedListOfProducts($accept, $limit, $page, $include, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getPaginatedListOfProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |
| **include** | **string**| Підключення додаткових асоціацій, розділені комами. Приклад: &lt;strong&gt;custom_fields&lt;/strong&gt; &lt;br/&gt;&lt;br/&gt; Допустимі асоціації &#x60;custom_fields&#x60; | [optional] |
| **filter** | [**object**](../Model/.md)| Фільтрація списку товарів | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfProducts200Response**](../Model/GetPaginatedListOfProducts200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductById()`

```php
getProductById($product_id, $accept, $include): \OpenAPI\Client\Model\ProductWithIncludes
```

Отримання сутності товару за ідентифікатором

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 'product_id_example'; // string | Ідентифікатор продукту
$accept = 'accept_example'; // string | application/json
$include = 'include_example'; // string | Підключення додаткових асоціацій, розділені комами. Приклад: <strong>custom_fields</strong> <br/><br/> Допустимі асоціації `custom_fields`

try {
    $result = $apiInstance->getProductById($product_id, $accept, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Ідентифікатор продукту | |
| **accept** | **string**| application/json | [optional] |
| **include** | **string**| Підключення додаткових асоціацій, розділені комами. Приклад: &lt;strong&gt;custom_fields&lt;/strong&gt; &lt;br/&gt;&lt;br/&gt; Допустимі асоціації &#x60;custom_fields&#x60; | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductWithIncludes**](../Model/ProductWithIncludes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExistingProduct()`

```php
updateExistingProduct($product_id, $update_existing_product_request, $accept): \OpenAPI\Client\Model\Product
```

Оновлення існуючого товару

Даний маршрут оновлює існуючий товар.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_id = 'product_id_example'; // string | Ідентифікатор товару
$update_existing_product_request = new \OpenAPI\Client\Model\UpdateExistingProductRequest(); // \OpenAPI\Client\Model\UpdateExistingProductRequest | Приклад об'єкту запиту для оновлення існуючого товару
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->updateExistingProduct($product_id, $update_existing_product_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateExistingProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Ідентифікатор товару | |
| **update_existing_product_request** | [**\OpenAPI\Client\Model\UpdateExistingProductRequest**](../Model/UpdateExistingProductRequest.md)| Приклад об&#39;єкту запиту для оновлення існуючого товару | |
| **accept** | **string**| application/json | [optional] |

### Return type

[**\OpenAPI\Client\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
