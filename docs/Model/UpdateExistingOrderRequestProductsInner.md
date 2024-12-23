# # UpdateExistingOrderRequestProductsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Артикул товару. Не оновлюється, використовується лише для ідентифікації товару | [optional]
**id** | **int** | Ідентифікатор товару в замовленні. Не оновлюється, використовується лише для ідентифікації товару | [optional]
**name** | **string** | Назва товару. Оновлюється лише для «разових» товарів (ті, що існують в рамках конкретного замовлення, але в каталозі їх немає) | [optional]
**comment** | **string** | Коментар до товару. Оновлюється завжди, замінюючи попередній | [optional]
**price** | **float** | Вартість товару | [optional]
**purchased_price** | **float** | Закупівельна вартість товару | [optional]
**discount_amount** | **float** | Знижка на товар фіксована | [optional]
**discount_percent** | **float** | Знижка на товар у % | [optional]
**quantity** | **float** | Кількість одиниць товару | [optional]
**product_status_id** | **int** | ID статусу товару в замовленні | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
