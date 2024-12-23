# # OrderWithIncludesProductsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Назва товару | [optional]
**sku** | **string** | Артикул товару | [optional]
**price** | **float** | Ціна товару за одиницю | [optional]
**price_sold** | **float** | Ціна товару продажу за одиницю | [optional]
**purchased_price** | **float** | Ціна закупівлі товару за одиницю | [optional]
**discount_percent** | **float** | Знижка на товар у % | [optional]
**discount_amount** | **float** | Знижка на товар фіксована | [optional]
**total_discount** | **float** | Сумарна знижка на товар | [optional]
**quantity** | **float** | Кількість замовлених одиниць товару | [optional]
**unit_type** | **string** | Одиниці виміру товару. Якщо використовуються системні &#x60;шт&#x60;, то значення буде &#x60;null&#x60; | [optional]
**upsale** | **bool** | Допродаж (так/ні) | [optional]
**comment** | **string** | Коментар до товару | [optional]
**product_status_id** | **int** | ID статусу товару в замовленні | [optional]
**picture** | **string** | Посилання на зображеня товару | [optional]
**properties** | [**\OpenAPI\Client\Model\CreateNewOrderRequestProductsInnerPropertiesInner[]**](CreateNewOrderRequestProductsInnerPropertiesInner.md) | Атрибути товару. &lt;br/&gt; Важливо: Кожен атрибут мае включати в себе поля &#x60;name&#x60; і &#x60;value&#x60;. &lt;br/&gt; Атрибут без цих ключів буде ігноруватися | [optional]
**shipment_type** | **string** | Тип відвантаження товару. Можливі значення: &#x60;warehouse&#x60; (склад) або &#x60;manufacturing&#x60; (виробництво) | [optional]
**warehouse** | [**\OpenAPI\Client\Model\OrderWithIncludesProductsInnerWarehouse**](OrderWithIncludesProductsInnerWarehouse.md) |  | [optional]
**offer** | [**\OpenAPI\Client\Model\OrderWithIncludesProductsInnerOffer**](OrderWithIncludesProductsInnerOffer.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
