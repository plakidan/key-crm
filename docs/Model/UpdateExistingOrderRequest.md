# # UpdateExistingOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**buyer_comment** | **string** | Коментар покупця | [optional]
**manager_comment** | **string** | Коментар менеджера | [optional]
**status_id** | **int** | Ідентифікатор статусу замовлення | [optional]
**discount_percent** | **float** | Знижка на замовлення у % | [optional]
**discount_amount** | **float** | Знижка на замовлення фіксована | [optional]
**products** | [**\OpenAPI\Client\Model\UpdateExistingOrderRequestProductsInner[]**](UpdateExistingOrderRequestProductsInner.md) | Масив товарів. Нові товари в замовлення не додаються, тільки оновлюються існуючі | [optional]
**shipping** | [**\OpenAPI\Client\Model\UpdateExistingOrderRequestShipping**](UpdateExistingOrderRequestShipping.md) |  | [optional]
**custom_fields** | [**\OpenAPI\Client\Model\CreateNewOrderRequestCustomFieldsInner[]**](CreateNewOrderRequestCustomFieldsInner.md) | Користувацькі поля в замовленні | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
