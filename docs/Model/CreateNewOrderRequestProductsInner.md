# # CreateNewOrderRequestProductsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Артикул товару | [optional]
**price** | **float** | Ціна товару за одиницю | [optional]
**purchased_price** | **float** | Ціна закупки товару за одиницю | [optional]
**discount_percent** | **float** | Знижка на товар у % | [optional]
**discount_amount** | **float** | Знижка на товар фіксована | [optional]
**quantity** | **float** | Кількість замовлених одиниць товару | [optional]
**unit_type** | **string** | Одиниці виміру товару | [optional]
**name** | **string** | Назва товару | [optional]
**comment** | **string** | Коментар до товару | [optional]
**picture** | **string** | Посилання на зображеня товару | [optional]
**properties** | [**\OpenAPI\Client\Model\CreateNewOrderRequestProductsInnerPropertiesInner[]**](CreateNewOrderRequestProductsInnerPropertiesInner.md) | Атрибути товару. &lt;br/&gt; Важливо: Кожен атрибут мае включати в себе поля &#x60;name&#x60; і &#x60;value&#x60;. &lt;br/&gt; Атрибут без цих ключів буде ігноруватися | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
