# OpenAPI\Client\OrderApi

All URIs are relative to https://openapi.keycrm.app/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachFileToOrder()**](OrderApi.md#attachFileToOrder) | **POST** /order/{orderId}/attachment/{fileId} | Додавання файлу для існуючого замовлення |
| [**attachTagToOrder()**](OrderApi.md#attachTagToOrder) | **POST** /order/{orderId}/tag/{tagId} | Додавання тегу для існуючого замовлення |
| [**createNewOrder()**](OrderApi.md#createNewOrder) | **POST** /order | Створення нового замовлення |
| [**createNewOrderExpense()**](OrderApi.md#createNewOrderExpense) | **POST** /order/{orderId}/expense | Додавання нової витрати для існуючого замовлення |
| [**createNewOrderImport()**](OrderApi.md#createNewOrderImport) | **POST** /order/import | Створення нових замовлень списком |
| [**createNewOrderPayment()**](OrderApi.md#createNewOrderPayment) | **POST** /order/{orderId}/payment | Додавання нової оплати для існуючого замовлення |
| [**deleteFileFromOrder()**](OrderApi.md#deleteFileFromOrder) | **DELETE** /order/{orderId}/attachment/{fileId} | Видалення файлу із існуючого замовлення |
| [**deleteTagFromOrder()**](OrderApi.md#deleteTagFromOrder) | **DELETE** /order/{orderId}/tag/{tagId} | Видалення тегу з існуючого замовлення |
| [**getOrderById()**](OrderApi.md#getOrderById) | **GET** /order/{orderId} | Отримання сутності замовлення за ідентифікатором |
| [**getPaginatedListOfDeliveryServices()**](OrderApi.md#getPaginatedListOfDeliveryServices) | **GET** /order/delivery-service | Отримання списку доступних методів доставки |
| [**getPaginatedListOfExpenseTypes()**](OrderApi.md#getPaginatedListOfExpenseTypes) | **GET** /order/expense-type | Отримання списку типів витрат |
| [**getPaginatedListOfOrders()**](OrderApi.md#getPaginatedListOfOrders) | **GET** /order | Отримання списку замовлень |
| [**getPaginatedListOfPaymentMethods()**](OrderApi.md#getPaginatedListOfPaymentMethods) | **GET** /order/payment-method | Отримання списку платіжних методів |
| [**getPaginatedListOfProductStatuses()**](OrderApi.md#getPaginatedListOfProductStatuses) | **GET** /order/product-status | Отримання списку статусів товарів |
| [**getPaginatedListOfSources()**](OrderApi.md#getPaginatedListOfSources) | **GET** /order/source | Отримання списку джерел |
| [**getPaginatedListOfStatuses()**](OrderApi.md#getPaginatedListOfStatuses) | **GET** /order/status | Отримання списку статусів |
| [**getPaginatedListOfTags()**](OrderApi.md#getPaginatedListOfTags) | **GET** /order/tag | Отримання списку тегів |
| [**updateExistingOrder()**](OrderApi.md#updateExistingOrder) | **PUT** /order/{orderId} | Оновлення існуючого замовлення |
| [**updateExistingOrderExpense()**](OrderApi.md#updateExistingOrderExpense) | **PUT** /order/{orderId}/expense/{expenseId} | Оновлення витрати для існуючого замовлення |
| [**updateExistingOrderPayment()**](OrderApi.md#updateExistingOrderPayment) | **PUT** /order/{orderId}/payment/{paymentId} | Оновлення оплати для існуючого замовлення |


## `attachFileToOrder()`

```php
attachFileToOrder($order_id, $file_id, $accept): \OpenAPI\Client\Model\AttachTagToOrder202Response
```

Додавання файлу для існуючого замовлення

Даний маршрут додає файл до існуючого замовлення.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Ідентифікатор замовлення
$file_id = 'file_id_example'; // string | Ідентифікатор файлу
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->attachFileToOrder($order_id, $file_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->attachFileToOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Ідентифікатор замовлення | |
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

## `attachTagToOrder()`

```php
attachTagToOrder($order_id, $tag_id, $accept): \OpenAPI\Client\Model\AttachTagToOrder202Response
```

Додавання тегу для існуючого замовлення

Даний маршрут додає тег до існуючого замовлення.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Ідентифікатор замовлення
$tag_id = 'tag_id_example'; // string | Ідентифікатор тегу
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->attachTagToOrder($order_id, $tag_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->attachTagToOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Ідентифікатор замовлення | |
| **tag_id** | **string**| Ідентифікатор тегу | |
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

## `createNewOrder()`

```php
createNewOrder($create_new_order_request, $accept): \OpenAPI\Client\Model\Order
```

Створення нового замовлення

Даний маршрут створює нове замовлення.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_new_order_request = new \OpenAPI\Client\Model\CreateNewOrderRequest(); // \OpenAPI\Client\Model\CreateNewOrderRequest | Приклад об'єкту запиту для створення нового замовлення
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->createNewOrder($create_new_order_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createNewOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_order_request** | [**\OpenAPI\Client\Model\CreateNewOrderRequest**](../Model/CreateNewOrderRequest.md)| Приклад об&#39;єкту запиту для створення нового замовлення | |
| **accept** | **string**| application/json | [optional] |

### Return type

[**\OpenAPI\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewOrderExpense()`

```php
createNewOrderExpense($order_id, $create_new_order_expense_request, $accept): \OpenAPI\Client\Model\Expense
```

Додавання нової витрати для існуючого замовлення

Даний маршрут створює нову витрату для замовлення.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Ідентифікатор замовлення
$create_new_order_expense_request = new \OpenAPI\Client\Model\CreateNewOrderExpenseRequest(); // \OpenAPI\Client\Model\CreateNewOrderExpenseRequest | Приклад об'єкту запиту для створення нової витрати
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->createNewOrderExpense($order_id, $create_new_order_expense_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createNewOrderExpense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Ідентифікатор замовлення | |
| **create_new_order_expense_request** | [**\OpenAPI\Client\Model\CreateNewOrderExpenseRequest**](../Model/CreateNewOrderExpenseRequest.md)| Приклад об&#39;єкту запиту для створення нової витрати | |
| **accept** | **string**| application/json | [optional] |

### Return type

[**\OpenAPI\Client\Model\Expense**](../Model/Expense.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewOrderImport()`

```php
createNewOrderImport($create_new_order_import_request, $accept)
```

Створення нових замовлень списком

Даний маршрут дозволяє створювати нові замовлення списком, до 50 шт. за один запит.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_new_order_import_request = new \OpenAPI\Client\Model\CreateNewOrderImportRequest(); // \OpenAPI\Client\Model\CreateNewOrderImportRequest | Приклад запиту для створення нових заломлень списком.
$accept = 'accept_example'; // string | application/json

try {
    $apiInstance->createNewOrderImport($create_new_order_import_request, $accept);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createNewOrderImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_order_import_request** | [**\OpenAPI\Client\Model\CreateNewOrderImportRequest**](../Model/CreateNewOrderImportRequest.md)| Приклад запиту для створення нових заломлень списком. | |
| **accept** | **string**| application/json | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewOrderPayment()`

```php
createNewOrderPayment($order_id, $create_new_order_payment_request, $accept): \OpenAPI\Client\Model\Payment
```

Додавання нової оплати для існуючого замовлення

Даний маршрут створює нову оплату для замовлення.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Ідентифікатор замовлення
$create_new_order_payment_request = new \OpenAPI\Client\Model\CreateNewOrderPaymentRequest(); // \OpenAPI\Client\Model\CreateNewOrderPaymentRequest | Приклад об'єкту запиту для створення нової оплати
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->createNewOrderPayment($order_id, $create_new_order_payment_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createNewOrderPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Ідентифікатор замовлення | |
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

## `deleteFileFromOrder()`

```php
deleteFileFromOrder($order_id, $file_id, $accept): \OpenAPI\Client\Model\AttachTagToOrder202Response
```

Видалення файлу із існуючого замовлення

Даний маршрут видаляє файл із існуючого замовлення.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Ідентифікатор замовлення
$file_id = 'file_id_example'; // string | Ідентифікатор файлу
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->deleteFileFromOrder($order_id, $file_id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->deleteFileFromOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Ідентифікатор замовлення | |
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

## `deleteTagFromOrder()`

```php
deleteTagFromOrder($order_id, $tag_id, $accept)
```

Видалення тегу з існуючого замовлення

Даний маршрут видаляє тег із існуючого замовлення.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Ідентифікатор замовлення
$tag_id = 'tag_id_example'; // string | Ідентифікатор тегу
$accept = 'accept_example'; // string | application/json

try {
    $apiInstance->deleteTagFromOrder($order_id, $tag_id, $accept);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->deleteTagFromOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Ідентифікатор замовлення | |
| **tag_id** | **string**| Ідентифікатор тегу | |
| **accept** | **string**| application/json | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderById()`

```php
getOrderById($order_id, $accept, $include): \OpenAPI\Client\Model\OrderWithIncludes
```

Отримання сутності замовлення за ідентифікатором

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Ідентифікатор замовлення
$accept = 'accept_example'; // string | application/json
$include = 'include_example'; // string | Підключення додаткових асоціацій, розділені комами. Приклад: <strong>buyer,status,tags</strong> <br/><br/> Допустимі асоціації `buyer`, `products.offer`, `manager`, `tags`, `status`, `marketing`,  `payments`, `shipping.lastHistory`, `shipping.deliveryService`, `expenses`, `custom_fields`, `assigned`

try {
    $result = $apiInstance->getOrderById($order_id, $accept, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Ідентифікатор замовлення | |
| **accept** | **string**| application/json | [optional] |
| **include** | **string**| Підключення додаткових асоціацій, розділені комами. Приклад: &lt;strong&gt;buyer,status,tags&lt;/strong&gt; &lt;br/&gt;&lt;br/&gt; Допустимі асоціації &#x60;buyer&#x60;, &#x60;products.offer&#x60;, &#x60;manager&#x60;, &#x60;tags&#x60;, &#x60;status&#x60;, &#x60;marketing&#x60;,  &#x60;payments&#x60;, &#x60;shipping.lastHistory&#x60;, &#x60;shipping.deliveryService&#x60;, &#x60;expenses&#x60;, &#x60;custom_fields&#x60;, &#x60;assigned&#x60; | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderWithIncludes**](../Model/OrderWithIncludes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaginatedListOfDeliveryServices()`

```php
getPaginatedListOfDeliveryServices($accept, $limit, $page, $sort): \OpenAPI\Client\Model\GetPaginatedListOfDeliveryServices200Response
```

Отримання списку доступних методів доставки

Даний маршрут повертає список доступних методів доставки.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку
$sort = id; // string | Сортування списку методів

try {
    $result = $apiInstance->getPaginatedListOfDeliveryServices($accept, $limit, $page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getPaginatedListOfDeliveryServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |
| **sort** | **string**| Сортування списку методів | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfDeliveryServices200Response**](../Model/GetPaginatedListOfDeliveryServices200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaginatedListOfExpenseTypes()`

```php
getPaginatedListOfExpenseTypes($accept, $limit, $page, $sort): \OpenAPI\Client\Model\GetPaginatedListOfExpenseTypes200Response
```

Отримання списку типів витрат

Даний маршрут повертає список типів витрат.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку
$sort = id; // string | Сортування списку типів витрат

try {
    $result = $apiInstance->getPaginatedListOfExpenseTypes($accept, $limit, $page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getPaginatedListOfExpenseTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |
| **sort** | **string**| Сортування списку типів витрат | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfExpenseTypes200Response**](../Model/GetPaginatedListOfExpenseTypes200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaginatedListOfOrders()`

```php
getPaginatedListOfOrders($accept, $limit, $page, $include, $sort, $filter): \OpenAPI\Client\Model\GetPaginatedListOfOrders200Response
```

Отримання списку замовлень

Даний маршрут повертає список замовлень.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку
$include = 'include_example'; // string | Підключення додаткових асоціацій, розділені комами. Приклад: <strong>buyer,status,tags</strong> <br/><br/> Допустимі асоціації `buyer`, `products.offer`, `manager`, `tags`, `status`, `marketing`,  `payments`, `shipping.lastHistory`, `shipping.deliveryService`, `expenses`, `custom_fields`, `assigned`
$sort = id; // string | Сортування списку замовлень
$filter = {"status_id":1}; // object | Фільтрація списку замовлень

try {
    $result = $apiInstance->getPaginatedListOfOrders($accept, $limit, $page, $include, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getPaginatedListOfOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |
| **include** | **string**| Підключення додаткових асоціацій, розділені комами. Приклад: &lt;strong&gt;buyer,status,tags&lt;/strong&gt; &lt;br/&gt;&lt;br/&gt; Допустимі асоціації &#x60;buyer&#x60;, &#x60;products.offer&#x60;, &#x60;manager&#x60;, &#x60;tags&#x60;, &#x60;status&#x60;, &#x60;marketing&#x60;,  &#x60;payments&#x60;, &#x60;shipping.lastHistory&#x60;, &#x60;shipping.deliveryService&#x60;, &#x60;expenses&#x60;, &#x60;custom_fields&#x60;, &#x60;assigned&#x60; | [optional] |
| **sort** | **string**| Сортування списку замовлень | [optional] |
| **filter** | [**object**](../Model/.md)| Фільтрація списку замовлень | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfOrders200Response**](../Model/GetPaginatedListOfOrders200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaginatedListOfPaymentMethods()`

```php
getPaginatedListOfPaymentMethods($accept, $limit, $page, $sort): \OpenAPI\Client\Model\GetPaginatedListOfPaymentMethods200Response
```

Отримання списку платіжних методів

Даний маршрут повертає список платіжних методів.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку
$sort = id; // string | Сортування списку методів

try {
    $result = $apiInstance->getPaginatedListOfPaymentMethods($accept, $limit, $page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getPaginatedListOfPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |
| **sort** | **string**| Сортування списку методів | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfPaymentMethods200Response**](../Model/GetPaginatedListOfPaymentMethods200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaginatedListOfProductStatuses()`

```php
getPaginatedListOfProductStatuses($accept, $limit, $page, $sort): \OpenAPI\Client\Model\GetPaginatedListOfStatuses200Response
```

Отримання списку статусів товарів

Даний маршрут повертає список активних статусів товарів.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку
$sort = id; // string | Сортування списку статусів товарів

try {
    $result = $apiInstance->getPaginatedListOfProductStatuses($accept, $limit, $page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getPaginatedListOfProductStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |
| **sort** | **string**| Сортування списку статусів товарів | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfStatuses200Response**](../Model/GetPaginatedListOfStatuses200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaginatedListOfSources()`

```php
getPaginatedListOfSources($accept, $limit, $page, $sort): \OpenAPI\Client\Model\GetPaginatedListOfSources200Response
```

Отримання списку джерел

Даний маршрут повертає список створених джерел замовлень.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку
$sort = id; // string | Сортування списку замовлень

try {
    $result = $apiInstance->getPaginatedListOfSources($accept, $limit, $page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getPaginatedListOfSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |
| **sort** | **string**| Сортування списку замовлень | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfSources200Response**](../Model/GetPaginatedListOfSources200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaginatedListOfStatuses()`

```php
getPaginatedListOfStatuses($accept, $limit, $page, $sort): \OpenAPI\Client\Model\GetPaginatedListOfStatuses200Response
```

Отримання списку статусів

Даний маршрут повертає список активних статусів замовлень.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку
$sort = id; // string | Сортування списку статусів

try {
    $result = $apiInstance->getPaginatedListOfStatuses($accept, $limit, $page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getPaginatedListOfStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |
| **sort** | **string**| Сортування списку статусів | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfStatuses200Response**](../Model/GetPaginatedListOfStatuses200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaginatedListOfTags()`

```php
getPaginatedListOfTags($accept, $limit, $page, $sort): \OpenAPI\Client\Model\GetPaginatedListOfTags200Response
```

Отримання списку тегів

Даний маршрут повертає список створених тегів.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку
$sort = id; // string | Сортування списку замовлень

try {
    $result = $apiInstance->getPaginatedListOfTags($accept, $limit, $page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getPaginatedListOfTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |
| **sort** | **string**| Сортування списку замовлень | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfTags200Response**](../Model/GetPaginatedListOfTags200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExistingOrder()`

```php
updateExistingOrder($order_id, $update_existing_order_request, $accept): \OpenAPI\Client\Model\Order
```

Оновлення існуючого замовлення

Даний маршрут оновлює існуюче замовлення. Зверніть увагу, що можна тільки оновити уже доданий в замовлення товар, а не додати новий. Також, якщо в замовленні вже є трекінг-код, то при повторному додаванні буде помилка.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Ідентифікатор замовлення
$update_existing_order_request = new \OpenAPI\Client\Model\UpdateExistingOrderRequest(); // \OpenAPI\Client\Model\UpdateExistingOrderRequest | Приклад об'єкту запиту для оновлення існуючого замовлення
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->updateExistingOrder($order_id, $update_existing_order_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->updateExistingOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Ідентифікатор замовлення | |
| **update_existing_order_request** | [**\OpenAPI\Client\Model\UpdateExistingOrderRequest**](../Model/UpdateExistingOrderRequest.md)| Приклад об&#39;єкту запиту для оновлення існуючого замовлення | |
| **accept** | **string**| application/json | [optional] |

### Return type

[**\OpenAPI\Client\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExistingOrderExpense()`

```php
updateExistingOrderExpense($order_id, $expense_id, $update_existing_order_expense_request, $accept): \OpenAPI\Client\Model\Expense
```

Оновлення витрати для існуючого замовлення

Даний маршрут оновлює витрату існуючого замовлення.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Ідентифікатор замовлення
$expense_id = 'expense_id_example'; // string | Ідентифікатор витрати
$update_existing_order_expense_request = new \OpenAPI\Client\Model\UpdateExistingOrderExpenseRequest(); // \OpenAPI\Client\Model\UpdateExistingOrderExpenseRequest | Приклад об'єкту запиту для оновлення витрати
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->updateExistingOrderExpense($order_id, $expense_id, $update_existing_order_expense_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->updateExistingOrderExpense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Ідентифікатор замовлення | |
| **expense_id** | **string**| Ідентифікатор витрати | |
| **update_existing_order_expense_request** | [**\OpenAPI\Client\Model\UpdateExistingOrderExpenseRequest**](../Model/UpdateExistingOrderExpenseRequest.md)| Приклад об&#39;єкту запиту для оновлення витрати | |
| **accept** | **string**| application/json | [optional] |

### Return type

[**\OpenAPI\Client\Model\Expense**](../Model/Expense.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExistingOrderPayment()`

```php
updateExistingOrderPayment($order_id, $payment_id, $update_existing_order_payment_request, $accept): \OpenAPI\Client\Model\Payment
```

Оновлення оплати для існуючого замовлення

Даний маршрут оновлює оплату існуючого замовлення.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | Ідентифікатор замовлення
$payment_id = 'payment_id_example'; // string | Ідентифікатор оплати
$update_existing_order_payment_request = new \OpenAPI\Client\Model\UpdateExistingOrderPaymentRequest(); // \OpenAPI\Client\Model\UpdateExistingOrderPaymentRequest | Приклад об'єкту запиту для оновлення оплати
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->updateExistingOrderPayment($order_id, $payment_id, $update_existing_order_payment_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->updateExistingOrderPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Ідентифікатор замовлення | |
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
