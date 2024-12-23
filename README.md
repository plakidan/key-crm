# KeyCRM PHP SDK

## Опис REST маршрутів для роботи з KeyCRM OpenAPI
<b>Зверніть увагу:</b>
1. Для авторизації потрібно передавати заголовок у форматі Bearer + [APIkey](https://help.keycrm.app/uk/process-automation-api-and-more/where-to-get-an-api-key) 
> Authorization: [Bearer `ваш-API-ключ`] 
2. Є обмеження до 60 запитів на хвилину з однієї IP-адреси по API-ключу
3. Час у всіх сутностях використовується UTC (GMT+0) - при зчитуванні (GET-запити), при виборі (фільтрації) по часу створення сутності, а також при створенні сутностей (POST).


## Встановлення та використання

### Вимоги

- PHP 7.4+
- має також працювати на 8.0.

### Composer

Установка через [Composer](https://getcomposer.org/), введить таку команду:

```bash
composer require plakidan/key-crm
```

### Уставнока вручну

Завантажте файли та підключіть їх у `autoload.php`:

```php
<?php
require_once('/path/to/plakidan/key-crm/vendor/autoload.php');
```

## З чого почати
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$client = new \GuzzleHttp\Client([
        'base_uri' => 'https://openapi.keycrm.app/v1',
        'headers' => [
            'Authorization' => 'Bearer '.YOUR_API_KEY_HERE, // Ваш токен
        ],
    ]);

$apiInstance = new OpenAPI\Client\Api\BuyerApi(
    // Якщо ви хочете використовувати власний HTTP-клієнт, передайте свій клієнт, який реалізує `GuzzleHttp\ClientInterface`.
    // Це необов'язково, за замовчуванням буде використано `GuzzleHttp\Client`.
    $client
);
$update_existing_buyer_request = new \OpenAPI\Client\Model\UpdateExistingBuyerRequest(); // \OpenAPI\Client\Model\UpdateExistingBuyerRequest | Приклад об'єкту запиту для створення нового покупця
$accept = 'application/json'; // string | application/json

try {
    $result = $apiInstance->createNewBuyer($update_existing_buyer_request, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyerApi->createNewBuyer: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

Всі посилання відносні до базового *https://openapi.keycrm.app/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BuyerApi* | [**createNewBuyer**](docs/Api/BuyerApi.md#createnewbuyer) | **POST** /buyer | Створення нового покупця
*BuyerApi* | [**getBuyerById**](docs/Api/BuyerApi.md#getbuyerbyid) | **GET** /buyer/{buyerId} | Отримання сутності покупця за ідентифікатором
*BuyerApi* | [**getPaginatedListOfBuyers**](docs/Api/BuyerApi.md#getpaginatedlistofbuyers) | **GET** /buyer | Отримання списку покупців
*BuyerApi* | [**importBuyers**](docs/Api/BuyerApi.md#importbuyers) | **POST** /buyer/import | Імпорт покупців
*BuyerApi* | [**updateExistingBuyer**](docs/Api/BuyerApi.md#updateexistingbuyer) | **PUT** /buyer/{buyerId} | Оновлення існуючого покупця
*CompanyApi* | [**createNewCompany**](docs/Api/CompanyApi.md#createnewcompany) | **POST** /companies | Створення новой компанії
*CompanyApi* | [**getCompanyById**](docs/Api/CompanyApi.md#getcompanybyid) | **GET** /companies/{companyId} | Отримання сутності компанії за ідентифікатором
*CompanyApi* | [**getPaginatedListOfCompanies**](docs/Api/CompanyApi.md#getpaginatedlistofcompanies) | **GET** /companies | Отримання списку компаній
*CompanyApi* | [**updateExistingCompany**](docs/Api/CompanyApi.md#updateexistingcompany) | **PUT** /companies/{companyId} | Оновлення існуючої компанії
*CustomFieldsApi* | [**getListOfCustomFields**](docs/Api/CustomFieldsApi.md#getlistofcustomfields) | **GET** /custom-fields | Отримання списку користувацьких полів
*OfferApi* | [**getPaginatedListOfOffers**](docs/Api/OfferApi.md#getpaginatedlistofoffers) | **GET** /offers | Отримання варіантів товарів
*OfferApi* | [**getPaginatedListOfStocks**](docs/Api/OfferApi.md#getpaginatedlistofstocks) | **GET** /offers/stocks | Отримання списку залишків
*OfferApi* | [**offersStocksUpdate**](docs/Api/OfferApi.md#offersstocksupdate) | **PUT** /offers/stocks | Оновлення залишків товару на складі
*OfferApi* | [**offersUpdate**](docs/Api/OfferApi.md#offersupdate) | **PUT** /offers | Редагування варіантів товару
*OrderApi* | [**attachFileToOrder**](docs/Api/OrderApi.md#attachfiletoorder) | **POST** /order/{orderId}/attachment/{fileId} | Додавання файлу для існуючого замовлення
*OrderApi* | [**attachTagToOrder**](docs/Api/OrderApi.md#attachtagtoorder) | **POST** /order/{orderId}/tag/{tagId} | Додавання тегу для існуючого замовлення
*OrderApi* | [**createNewOrder**](docs/Api/OrderApi.md#createneworder) | **POST** /order | Створення нового замовлення
*OrderApi* | [**createNewOrderExpense**](docs/Api/OrderApi.md#createneworderexpense) | **POST** /order/{orderId}/expense | Додавання нової витрати для існуючого замовлення
*OrderApi* | [**createNewOrderImport**](docs/Api/OrderApi.md#createneworderimport) | **POST** /order/import | Створення нових замовлень списком
*OrderApi* | [**createNewOrderPayment**](docs/Api/OrderApi.md#createneworderpayment) | **POST** /order/{orderId}/payment | Додавання нової оплати для існуючого замовлення
*OrderApi* | [**deleteFileFromOrder**](docs/Api/OrderApi.md#deletefilefromorder) | **DELETE** /order/{orderId}/attachment/{fileId} | Видалення файлу із існуючого замовлення
*OrderApi* | [**deleteTagFromOrder**](docs/Api/OrderApi.md#deletetagfromorder) | **DELETE** /order/{orderId}/tag/{tagId} | Видалення тегу з існуючого замовлення
*OrderApi* | [**getOrderById**](docs/Api/OrderApi.md#getorderbyid) | **GET** /order/{orderId} | Отримання сутності замовлення за ідентифікатором
*OrderApi* | [**getPaginatedListOfDeliveryServices**](docs/Api/OrderApi.md#getpaginatedlistofdeliveryservices) | **GET** /order/delivery-service | Отримання списку доступних методів доставки
*OrderApi* | [**getPaginatedListOfExpenseTypes**](docs/Api/OrderApi.md#getpaginatedlistofexpensetypes) | **GET** /order/expense-type | Отримання списку типів витрат
*OrderApi* | [**getPaginatedListOfOrders**](docs/Api/OrderApi.md#getpaginatedlistoforders) | **GET** /order | Отримання списку замовлень
*OrderApi* | [**getPaginatedListOfPaymentMethods**](docs/Api/OrderApi.md#getpaginatedlistofpaymentmethods) | **GET** /order/payment-method | Отримання списку платіжних методів
*OrderApi* | [**getPaginatedListOfProductStatuses**](docs/Api/OrderApi.md#getpaginatedlistofproductstatuses) | **GET** /order/product-status | Отримання списку статусів товарів
*OrderApi* | [**getPaginatedListOfSources**](docs/Api/OrderApi.md#getpaginatedlistofsources) | **GET** /order/source | Отримання списку джерел
*OrderApi* | [**getPaginatedListOfStatuses**](docs/Api/OrderApi.md#getpaginatedlistofstatuses) | **GET** /order/status | Отримання списку статусів
*OrderApi* | [**getPaginatedListOfTags**](docs/Api/OrderApi.md#getpaginatedlistoftags) | **GET** /order/tag | Отримання списку тегів
*OrderApi* | [**updateExistingOrder**](docs/Api/OrderApi.md#updateexistingorder) | **PUT** /order/{orderId} | Оновлення існуючого замовлення
*OrderApi* | [**updateExistingOrderExpense**](docs/Api/OrderApi.md#updateexistingorderexpense) | **PUT** /order/{orderId}/expense/{expenseId} | Оновлення витрати для існуючого замовлення
*OrderApi* | [**updateExistingOrderPayment**](docs/Api/OrderApi.md#updateexistingorderpayment) | **PUT** /order/{orderId}/payment/{paymentId} | Оновлення оплати для існуючого замовлення
*PaymentsApi* | [**attachExternalTransactionToPayment**](docs/Api/PaymentsApi.md#attachexternaltransactiontopayment) | **POST** /payments/{paymentId}/external-transactions | Додавання зовнішньої транзакції до оплати
*PaymentsApi* | [**getPaginatedListOfExternalTransactions**](docs/Api/PaymentsApi.md#getpaginatedlistofexternaltransactions) | **GET** /payments/external-transactions | Отримання списку зовнішніх транзакцій
*PipelinesApi* | [**attachFileToPipelinesCard**](docs/Api/PipelinesApi.md#attachfiletopipelinescard) | **POST** /pipelines/cards/{cardId}/attachment/{fileId} | Додавання файлу до картки у воронці
*PipelinesApi* | [**createNewPipelineCard**](docs/Api/PipelinesApi.md#createnewpipelinecard) | **POST** /pipelines/cards | Створення нової картки у воронці
*PipelinesApi* | [**createNewPipelinesCardPayment**](docs/Api/PipelinesApi.md#createnewpipelinescardpayment) | **POST** /pipelines/cards/{cardId}/payment | Додавання нової оплати для існуючої картки у воронці
*PipelinesApi* | [**deleteFileFromCard**](docs/Api/PipelinesApi.md#deletefilefromcard) | **DELETE** /pipelines/cards/{cardId}/attachment/{fileId} | Видалення файлу з картки воронки
*PipelinesApi* | [**getPaginatedListOfPipelines**](docs/Api/PipelinesApi.md#getpaginatedlistofpipelines) | **GET** /pipelines | Отримання списку воронок
*PipelinesApi* | [**getPaginatedListOfPipelinesCards**](docs/Api/PipelinesApi.md#getpaginatedlistofpipelinescards) | **GET** /pipelines/cards | Отримання списку карток воронок
*PipelinesApi* | [**getPaginatedListOfPipelinesStatuses**](docs/Api/PipelinesApi.md#getpaginatedlistofpipelinesstatuses) | **GET** /pipelines/{pipelineId}/statuses | Отримання статусів воронки
*PipelinesApi* | [**getPipelinesCard**](docs/Api/PipelinesApi.md#getpipelinescard) | **GET** /pipelines/cards/{cardId} | Отримання картки воронки
*PipelinesApi* | [**updateExistingPipelinesCardPayment**](docs/Api/PipelinesApi.md#updateexistingpipelinescardpayment) | **PUT** /pipelines/cards/{cardId}/payment/{paymentId} | Оновлення оплати для існуючої картки у воронці
*PipelinesApi* | [**updatePipelinesCard**](docs/Api/PipelinesApi.md#updatepipelinescard) | **PUT** /pipelines/cards/{cardId} | Оновлення картки воронки
*ProductsApi* | [**createNewCategory**](docs/Api/ProductsApi.md#createnewcategory) | **POST** /products/categories | Створення нової категорії товарів
*ProductsApi* | [**createNewProduct**](docs/Api/ProductsApi.md#createnewproduct) | **POST** /products | Створення нового товару
*ProductsApi* | [**createNewProductImport**](docs/Api/ProductsApi.md#createnewproductimport) | **POST** /products/import | Створення нових товарів списком
*ProductsApi* | [**createNewProductOffers**](docs/Api/ProductsApi.md#createnewproductoffers) | **POST** /products/{productId}/offers | Створення нових варіантів товару
*ProductsApi* | [**getPaginatedListOfCategories**](docs/Api/ProductsApi.md#getpaginatedlistofcategories) | **GET** /products/categories | Отримання списку категорій товарів
*ProductsApi* | [**getPaginatedListOfProducts**](docs/Api/ProductsApi.md#getpaginatedlistofproducts) | **GET** /products | Отримання списку товарів
*ProductsApi* | [**getProductById**](docs/Api/ProductsApi.md#getproductbyid) | **GET** /products/{productId} | Отримання сутності товару за ідентифікатором
*ProductsApi* | [**updateExistingProduct**](docs/Api/ProductsApi.md#updateexistingproduct) | **PUT** /products/{productId} | Оновлення існуючого товару
*StorageApi* | [**getEntityListOfFiles**](docs/Api/StorageApi.md#getentitylistoffiles) | **GET** /storage/attachment/{entityType}/{entityId} | Отримання списку файлів по сутності
*StorageApi* | [**getPaginatedListOfFiles**](docs/Api/StorageApi.md#getpaginatedlistoffiles) | **GET** /storage | Отримання списку завантажених файлів
*StorageApi* | [**uploadStorageFile**](docs/Api/StorageApi.md#uploadstoragefile) | **POST** /storage/upload | Завантаження файла

## Models

- [AttachExternalTransactionToPaymentRequest](docs/Model/AttachExternalTransactionToPaymentRequest.md)
- [AttachTagToOrder202Response](docs/Model/AttachTagToOrder202Response.md)
- [Buyer](docs/Model/Buyer.md)
- [BuyerWithIncludes](docs/Model/BuyerWithIncludes.md)
- [BuyerWithIncludesCompany](docs/Model/BuyerWithIncludesCompany.md)
- [BuyerWithIncludesLoyaltyInner](docs/Model/BuyerWithIncludesLoyaltyInner.md)
- [BuyerWithIncludesManager](docs/Model/BuyerWithIncludesManager.md)
- [BuyerWithIncludesShippingInner](docs/Model/BuyerWithIncludesShippingInner.md)
- [Category](docs/Model/Category.md)
- [Company](docs/Model/Company.md)
- [CompanyWithIncludes](docs/Model/CompanyWithIncludes.md)
- [CompanyWithIncludesManager](docs/Model/CompanyWithIncludesManager.md)
- [CreateNewCategoryRequest](docs/Model/CreateNewCategoryRequest.md)
- [CreateNewCompanyRequest](docs/Model/CreateNewCompanyRequest.md)
- [CreateNewCompanyRequestCustomFieldsInner](docs/Model/CreateNewCompanyRequestCustomFieldsInner.md)
- [CreateNewOrderExpenseRequest](docs/Model/CreateNewOrderExpenseRequest.md)
- [CreateNewOrderImportRequest](docs/Model/CreateNewOrderImportRequest.md)
- [CreateNewOrderImportRequestOrdersInner](docs/Model/CreateNewOrderImportRequestOrdersInner.md)
- [CreateNewOrderImportRequestOrdersInnerPaymentsInner](docs/Model/CreateNewOrderImportRequestOrdersInnerPaymentsInner.md)
- [CreateNewOrderImportRequestOrdersInnerShipping](docs/Model/CreateNewOrderImportRequestOrdersInnerShipping.md)
- [CreateNewOrderPaymentRequest](docs/Model/CreateNewOrderPaymentRequest.md)
- [CreateNewOrderRequest](docs/Model/CreateNewOrderRequest.md)
- [CreateNewOrderRequestBuyer](docs/Model/CreateNewOrderRequestBuyer.md)
- [CreateNewOrderRequestCustomFieldsInner](docs/Model/CreateNewOrderRequestCustomFieldsInner.md)
- [CreateNewOrderRequestMarketing](docs/Model/CreateNewOrderRequestMarketing.md)
- [CreateNewOrderRequestPaymentsInner](docs/Model/CreateNewOrderRequestPaymentsInner.md)
- [CreateNewOrderRequestProductsInner](docs/Model/CreateNewOrderRequestProductsInner.md)
- [CreateNewOrderRequestProductsInnerPropertiesInner](docs/Model/CreateNewOrderRequestProductsInnerPropertiesInner.md)
- [CreateNewOrderRequestShipping](docs/Model/CreateNewOrderRequestShipping.md)
- [CreateNewPipelineCardRequest](docs/Model/CreateNewPipelineCardRequest.md)
- [CreateNewPipelineCardRequestContact](docs/Model/CreateNewPipelineCardRequestContact.md)
- [CreateNewPipelineCardRequestCustomFieldsInner](docs/Model/CreateNewPipelineCardRequestCustomFieldsInner.md)
- [CreateNewPipelineCardRequestProductsInner](docs/Model/CreateNewPipelineCardRequestProductsInner.md)
- [CreateNewProductImportRequest](docs/Model/CreateNewProductImportRequest.md)
- [CreateNewProductOffersRequest](docs/Model/CreateNewProductOffersRequest.md)
- [CreateNewProductOffersRequestOffersInner](docs/Model/CreateNewProductOffersRequestOffersInner.md)
- [CreateNewProductRequest](docs/Model/CreateNewProductRequest.md)
- [CreateNewProductRequestCustomFieldsInner](docs/Model/CreateNewProductRequestCustomFieldsInner.md)
- [CustomField](docs/Model/CustomField.md)
- [CustomFieldOptionsInner](docs/Model/CustomFieldOptionsInner.md)
- [DeliveryService](docs/Model/DeliveryService.md)
- [Expense](docs/Model/Expense.md)
- [ExpenseType](docs/Model/ExpenseType.md)
- [ExternalTransaction](docs/Model/ExternalTransaction.md)
- [File](docs/Model/File.md)
- [GetPaginatedListOfBuyers200Response](docs/Model/GetPaginatedListOfBuyers200Response.md)
- [GetPaginatedListOfCategories200Response](docs/Model/GetPaginatedListOfCategories200Response.md)
- [GetPaginatedListOfCompanies200Response](docs/Model/GetPaginatedListOfCompanies200Response.md)
- [GetPaginatedListOfDeliveryServices200Response](docs/Model/GetPaginatedListOfDeliveryServices200Response.md)
- [GetPaginatedListOfExpenseTypes200Response](docs/Model/GetPaginatedListOfExpenseTypes200Response.md)
- [GetPaginatedListOfExternalTransactions200Response](docs/Model/GetPaginatedListOfExternalTransactions200Response.md)
- [GetPaginatedListOfFiles200Response](docs/Model/GetPaginatedListOfFiles200Response.md)
- [GetPaginatedListOfOffers200Response](docs/Model/GetPaginatedListOfOffers200Response.md)
- [GetPaginatedListOfOrders200Response](docs/Model/GetPaginatedListOfOrders200Response.md)
- [GetPaginatedListOfPaymentMethods200Response](docs/Model/GetPaginatedListOfPaymentMethods200Response.md)
- [GetPaginatedListOfPipelines200Response](docs/Model/GetPaginatedListOfPipelines200Response.md)
- [GetPaginatedListOfPipelines400Response](docs/Model/GetPaginatedListOfPipelines400Response.md)
- [GetPaginatedListOfPipelinesCards200Response](docs/Model/GetPaginatedListOfPipelinesCards200Response.md)
- [GetPaginatedListOfPipelinesStatuses200Response](docs/Model/GetPaginatedListOfPipelinesStatuses200Response.md)
- [GetPaginatedListOfProducts200Response](docs/Model/GetPaginatedListOfProducts200Response.md)
- [GetPaginatedListOfSources200Response](docs/Model/GetPaginatedListOfSources200Response.md)
- [GetPaginatedListOfStatuses200Response](docs/Model/GetPaginatedListOfStatuses200Response.md)
- [GetPaginatedListOfStocks200Response](docs/Model/GetPaginatedListOfStocks200Response.md)
- [GetPaginatedListOfTags200Response](docs/Model/GetPaginatedListOfTags200Response.md)
- [ImportBuyers400Response](docs/Model/ImportBuyers400Response.md)
- [ImportBuyersRequest](docs/Model/ImportBuyersRequest.md)
- [ImportBuyersRequestBuyersInner](docs/Model/ImportBuyersRequestBuyersInner.md)
- [Marketing](docs/Model/Marketing.md)
- [Offer](docs/Model/Offer.md)
- [OfferStocks](docs/Model/OfferStocks.md)
- [OffersStocksUpdateRequest](docs/Model/OffersStocksUpdateRequest.md)
- [OffersStocksUpdateRequestStocksInner](docs/Model/OffersStocksUpdateRequestStocksInner.md)
- [OffersUpdateRequest](docs/Model/OffersUpdateRequest.md)
- [OffersUpdateRequestOffersInner](docs/Model/OffersUpdateRequestOffersInner.md)
- [Order](docs/Model/Order.md)
- [OrderWithIncludes](docs/Model/OrderWithIncludes.md)
- [OrderWithIncludesAssignedInner](docs/Model/OrderWithIncludesAssignedInner.md)
- [OrderWithIncludesAssignedInnerRole](docs/Model/OrderWithIncludesAssignedInnerRole.md)
- [OrderWithIncludesBuyer](docs/Model/OrderWithIncludesBuyer.md)
- [OrderWithIncludesCustomFieldsInner](docs/Model/OrderWithIncludesCustomFieldsInner.md)
- [OrderWithIncludesExpensesInner](docs/Model/OrderWithIncludesExpensesInner.md)
- [OrderWithIncludesManager](docs/Model/OrderWithIncludesManager.md)
- [OrderWithIncludesMarketing](docs/Model/OrderWithIncludesMarketing.md)
- [OrderWithIncludesPaymentsInner](docs/Model/OrderWithIncludesPaymentsInner.md)
- [OrderWithIncludesProductsInner](docs/Model/OrderWithIncludesProductsInner.md)
- [OrderWithIncludesProductsInnerOffer](docs/Model/OrderWithIncludesProductsInnerOffer.md)
- [OrderWithIncludesProductsInnerOfferPropertiesInner](docs/Model/OrderWithIncludesProductsInnerOfferPropertiesInner.md)
- [OrderWithIncludesProductsInnerWarehouse](docs/Model/OrderWithIncludesProductsInnerWarehouse.md)
- [OrderWithIncludesShipping](docs/Model/OrderWithIncludesShipping.md)
- [OrderWithIncludesStatus](docs/Model/OrderWithIncludesStatus.md)
- [OrderWithIncludesTagsInner](docs/Model/OrderWithIncludesTagsInner.md)
- [PaginatedResponse](docs/Model/PaginatedResponse.md)
- [Payment](docs/Model/Payment.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [Pipeline](docs/Model/Pipeline.md)
- [PipelineCard](docs/Model/PipelineCard.md)
- [PipelineCardWithIncludes](docs/Model/PipelineCardWithIncludes.md)
- [PipelineCardWithIncludesContact](docs/Model/PipelineCardWithIncludesContact.md)
- [PipelineCardWithIncludesContactClient](docs/Model/PipelineCardWithIncludesContactClient.md)
- [PipelineCardWithIncludesManager](docs/Model/PipelineCardWithIncludesManager.md)
- [PipelineCardWithIncludesPaymentsInner](docs/Model/PipelineCardWithIncludesPaymentsInner.md)
- [PipelineCardWithIncludesProductsInner](docs/Model/PipelineCardWithIncludesProductsInner.md)
- [PipelineCardWithIncludesStatus](docs/Model/PipelineCardWithIncludesStatus.md)
- [PipelineStatuses](docs/Model/PipelineStatuses.md)
- [Product](docs/Model/Product.md)
- [ProductOffer](docs/Model/ProductOffer.md)
- [ProductOfferPropertiesAgg](docs/Model/ProductOfferPropertiesAgg.md)
- [ProductStatus](docs/Model/ProductStatus.md)
- [ProductWithIncludes](docs/Model/ProductWithIncludes.md)
- [Source](docs/Model/Source.md)
- [Status](docs/Model/Status.md)
- [Tag](docs/Model/Tag.md)
- [UpdateExistingBuyerRequest](docs/Model/UpdateExistingBuyerRequest.md)
- [UpdateExistingBuyerRequestShippingInner](docs/Model/UpdateExistingBuyerRequestShippingInner.md)
- [UpdateExistingOrderExpenseRequest](docs/Model/UpdateExistingOrderExpenseRequest.md)
- [UpdateExistingOrderPaymentRequest](docs/Model/UpdateExistingOrderPaymentRequest.md)
- [UpdateExistingOrderRequest](docs/Model/UpdateExistingOrderRequest.md)
- [UpdateExistingOrderRequestProductsInner](docs/Model/UpdateExistingOrderRequestProductsInner.md)
- [UpdateExistingOrderRequestShipping](docs/Model/UpdateExistingOrderRequestShipping.md)
- [UpdateExistingProductRequest](docs/Model/UpdateExistingProductRequest.md)
- [UpdatePipelinesCardRequest](docs/Model/UpdatePipelinesCardRequest.md)
- [UpdatePipelinesCardRequestProductsInner](docs/Model/UpdatePipelinesCardRequestProductsInner.md)
- [Warehouse](docs/Model/Warehouse.md)

## Tests

Запуск тестів:

```bash
composer install
vendor/bin/phpunit
```

## Author
Yaroslav Plakyda

## About
Цей пакет згенеровано через  OpenAPI генератор на основі документації з https://docs.keycrm.app/
