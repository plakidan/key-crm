# OpenAPI\Client\PaymentsApi

All URIs are relative to https://openapi.keycrm.app/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachExternalTransactionToPayment()**](PaymentsApi.md#attachExternalTransactionToPayment) | **POST** /payments/{paymentId}/external-transactions | Додавання зовнішньої транзакції до оплати |
| [**getPaginatedListOfExternalTransactions()**](PaymentsApi.md#getPaginatedListOfExternalTransactions) | **GET** /payments/external-transactions | Отримання списку зовнішніх транзакцій |


## `attachExternalTransactionToPayment()`

```php
attachExternalTransactionToPayment($payment_id, $attach_external_transaction_to_payment_request): \OpenAPI\Client\Model\Payment
```

Додавання зовнішньої транзакції до оплати

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_id = 'payment_id_example'; // string | Ідентифікатор оплати.
$attach_external_transaction_to_payment_request = new \OpenAPI\Client\Model\AttachExternalTransactionToPaymentRequest(); // \OpenAPI\Client\Model\AttachExternalTransactionToPaymentRequest | Приклад об'єкту запиту для додавання зовнішньої транзакції до оплати

try {
    $result = $apiInstance->attachExternalTransactionToPayment($payment_id, $attach_external_transaction_to_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->attachExternalTransactionToPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **string**| Ідентифікатор оплати. | |
| **attach_external_transaction_to_payment_request** | [**\OpenAPI\Client\Model\AttachExternalTransactionToPaymentRequest**](../Model/AttachExternalTransactionToPaymentRequest.md)| Приклад об&#39;єкту запиту для додавання зовнішньої транзакції до оплати | |

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

## `getPaginatedListOfExternalTransactions()`

```php
getPaginatedListOfExternalTransactions($accept, $limit, $page, $filter): \OpenAPI\Client\Model\GetPaginatedListOfExternalTransactions200Response
```

Отримання списку зовнішніх транзакцій

Даний маршрут повертає пагінований список зовнішніх транзакцій.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку
$filter = {"id":"4545,4546"}; // object | Фільтрація списку транзакцій

try {
    $result = $apiInstance->getPaginatedListOfExternalTransactions($accept, $limit, $page, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaginatedListOfExternalTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |
| **filter** | [**object**](../Model/.md)| Фільтрація списку транзакцій | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfExternalTransactions200Response**](../Model/GetPaginatedListOfExternalTransactions200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
