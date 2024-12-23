# OpenAPI\Client\CompanyApi

All URIs are relative to https://openapi.keycrm.app/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNewCompany()**](CompanyApi.md#createNewCompany) | **POST** /companies | Створення новой компанії |
| [**getCompanyById()**](CompanyApi.md#getCompanyById) | **GET** /companies/{companyId} | Отримання сутності компанії за ідентифікатором |
| [**getPaginatedListOfCompanies()**](CompanyApi.md#getPaginatedListOfCompanies) | **GET** /companies | Отримання списку компаній |
| [**updateExistingCompany()**](CompanyApi.md#updateExistingCompany) | **PUT** /companies/{companyId} | Оновлення існуючої компанії |


## `createNewCompany()`

```php
createNewCompany($create_new_company_request, $accept): \OpenAPI\Client\Model\Company
```

Створення новой компанії

Даний маршрут створює нову компанію.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_new_company_request = new \OpenAPI\Client\Model\CreateNewCompanyRequest(); // \OpenAPI\Client\Model\CreateNewCompanyRequest | Приклад об'єкту запиту для створення нової компанії
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->createNewCompany($create_new_company_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->createNewCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_company_request** | [**\OpenAPI\Client\Model\CreateNewCompanyRequest**](../Model/CreateNewCompanyRequest.md)| Приклад об&#39;єкту запиту для створення нової компанії | |
| **accept** | **string**| application/json | [optional] |

### Return type

[**\OpenAPI\Client\Model\Company**](../Model/Company.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyById()`

```php
getCompanyById($company_id, $accept, $include): \OpenAPI\Client\Model\CompanyWithIncludes
```

Отримання сутності компанії за ідентифікатором

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 'company_id_example'; // string | Ідентифікатор компанії
$accept = 'accept_example'; // string | application/json
$include = 'include_example'; // string | Підключення додаткових асоціацій, розділені комами. Приклад: <strong>manager,company</strong> <br/><br/> Допустимі асоціації `manager`, `buyer`, `custom_fields`

try {
    $result = $apiInstance->getCompanyById($company_id, $accept, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getCompanyById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Ідентифікатор компанії | |
| **accept** | **string**| application/json | [optional] |
| **include** | **string**| Підключення додаткових асоціацій, розділені комами. Приклад: &lt;strong&gt;manager,company&lt;/strong&gt; &lt;br/&gt;&lt;br/&gt; Допустимі асоціації &#x60;manager&#x60;, &#x60;buyer&#x60;, &#x60;custom_fields&#x60; | [optional] |

### Return type

[**\OpenAPI\Client\Model\CompanyWithIncludes**](../Model/CompanyWithIncludes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaginatedListOfCompanies()`

```php
getPaginatedListOfCompanies($accept, $limit, $page, $include, $filter): \OpenAPI\Client\Model\GetPaginatedListOfCompanies200Response
```

Отримання списку компаній

Даний маршрут повертає список компаній.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string | application/json
$limit = 15; // int | Максимальна кількість елементів у пагінованому списку. Максимум 50.
$page = 1; // int | Вкажіть сторінку
$include = 'include_example'; // string | Підключення додаткових асоціацій, розділені комами. Приклад: <strong>manager,company</strong> <br/><br/> Допустимі асоціації `manager`, `buyer`, `custom_fields`
$filter = {"company_id":"4545,4546"}; // object | Фільтрація списку компаній

try {
    $result = $apiInstance->getPaginatedListOfCompanies($accept, $limit, $page, $include, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getPaginatedListOfCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| application/json | [optional] |
| **limit** | **int**| Максимальна кількість елементів у пагінованому списку. Максимум 50. | [optional] [default to 15] |
| **page** | **int**| Вкажіть сторінку | [optional] [default to 1] |
| **include** | **string**| Підключення додаткових асоціацій, розділені комами. Приклад: &lt;strong&gt;manager,company&lt;/strong&gt; &lt;br/&gt;&lt;br/&gt; Допустимі асоціації &#x60;manager&#x60;, &#x60;buyer&#x60;, &#x60;custom_fields&#x60; | [optional] |
| **filter** | [**object**](../Model/.md)| Фільтрація списку компаній | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaginatedListOfCompanies200Response**](../Model/GetPaginatedListOfCompanies200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExistingCompany()`

```php
updateExistingCompany($company_id, $create_new_company_request, $accept): \OpenAPI\Client\Model\Company
```

Оновлення існуючої компанії

Даний маршрут оновлює існуючу компанію.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_id = 'company_id_example'; // string | Ідентифікатор компанії
$create_new_company_request = new \OpenAPI\Client\Model\CreateNewCompanyRequest(); // \OpenAPI\Client\Model\CreateNewCompanyRequest | Приклад об'єкту запиту для оновлення компанії
$accept = 'accept_example'; // string | application/json

try {
    $result = $apiInstance->updateExistingCompany($company_id, $create_new_company_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->updateExistingCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Ідентифікатор компанії | |
| **create_new_company_request** | [**\OpenAPI\Client\Model\CreateNewCompanyRequest**](../Model/CreateNewCompanyRequest.md)| Приклад об&#39;єкту запиту для оновлення компанії | |
| **accept** | **string**| application/json | [optional] |

### Return type

[**\OpenAPI\Client\Model\Company**](../Model/Company.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
