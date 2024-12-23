# # OfferStocks

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Ідентифікатор варіанту товару | [optional]
**sku** | **string** | SKU варіанту товару | [optional]
**price** | **float** | Вартість варіанту товару | [optional]
**purchased_price** | **float** | Закупівельна вартість варіанту товару | [optional]
**quantity** | **float** | Загальна кількість залишків | [optional]
**reserve** | **float** | Загальна кількість зарезервованих залишків | [optional]
**warehouse** | [**\OpenAPI\Client\Model\Warehouse[]**](Warehouse.md) | Інформація по складам з залишками. Приходить тільки якщо вказати &#x60;filter[details]&#x3D;true&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
