# # BuyerWithIncludes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Ідентифікатор покупця | [optional]
**full_name** | **string** |  |
**birthday** | **string** | Дата народження | [optional]
**email** | **string[]** |  | [optional]
**phone** | **string[]** |  | [optional]
**note** | **string** |  | [optional]
**company** | [**\OpenAPI\Client\Model\BuyerWithIncludesCompany**](BuyerWithIncludesCompany.md) |  | [optional]
**manager** | [**\OpenAPI\Client\Model\BuyerWithIncludesManager**](BuyerWithIncludesManager.md) |  | [optional]
**loyalty** | [**\OpenAPI\Client\Model\BuyerWithIncludesLoyaltyInner[]**](BuyerWithIncludesLoyaltyInner.md) | Інформація про програми лояльності. Повертається тільки заповнені, якщо вказати &#x60;include&#x3D;loyalty&#x60; | [optional]
**shipping** | [**\OpenAPI\Client\Model\BuyerWithIncludesShippingInner[]**](BuyerWithIncludesShippingInner.md) | Інформація про адреси доставки. Повертається тільки заповнені, якщо вказати &#x60;include&#x3D;shipping&#x60; | [optional]
**custom_fields** | [**\OpenAPI\Client\Model\CreateNewOrderRequestCustomFieldsInner[]**](CreateNewOrderRequestCustomFieldsInner.md) | Користувацькі поля для покупця | [optional]
**created_at** | **string** | Дата створення покупця в UTC форматі | [optional]
**updated_at** | **string** | Дата останньої зміни покупця в UTC форматі | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
