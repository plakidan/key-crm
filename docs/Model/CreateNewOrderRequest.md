# # CreateNewOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_id** | **int** | Ідентифікатор джерела. Обов&#39;язкове поле |
**source_uuid** | **string** | Номер замовлення у джерелі | [optional]
**buyer_comment** | **string** | Коментар покупця | [optional]
**manager_id** | **int** | Ідентифікатор відповідального менеджера | [optional]
**manager_comment** | **string** | Коментар менеджера | [optional]
**promocode** | **string** | Промо код | [optional]
**discount_percent** | **float** | Знижка на замовлення у % | [optional]
**discount_amount** | **float** | Знижка на замовлення фіксована | [optional]
**shipping_price** | **float** | Вартість доставки | [optional]
**wrap_price** | **float** | Вартість подарункової упаковки | [optional]
**gift_message** | **string** | Привітальне повідомлення | [optional]
**is_gift** | **bool** | Ознака, що замовлення для подарунку | [optional]
**gift_wrap** | **bool** | Ознака, що потрібна подарункова упаковка | [optional]
**taxes** | **float** | Сума податків | [optional]
**ordered_at** | **string** | Дата і час замовлення. Якщо не передається, буде використаний поточний час | [optional]
**buyer** | [**\OpenAPI\Client\Model\CreateNewOrderRequestBuyer**](CreateNewOrderRequestBuyer.md) |  |
**shipping** | [**\OpenAPI\Client\Model\CreateNewOrderRequestShipping**](CreateNewOrderRequestShipping.md) |  | [optional]
**marketing** | [**\OpenAPI\Client\Model\CreateNewOrderRequestMarketing**](CreateNewOrderRequestMarketing.md) |  | [optional]
**products** | [**\OpenAPI\Client\Model\CreateNewOrderRequestProductsInner[]**](CreateNewOrderRequestProductsInner.md) |  | [optional]
**payments** | [**\OpenAPI\Client\Model\CreateNewOrderRequestPaymentsInner[]**](CreateNewOrderRequestPaymentsInner.md) |  | [optional]
**custom_fields** | [**\OpenAPI\Client\Model\CreateNewOrderRequestCustomFieldsInner[]**](CreateNewOrderRequestCustomFieldsInner.md) | Користувацькі поля в замовленні | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
