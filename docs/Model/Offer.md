# # Offer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Ідентифікатор варіанту товару | [optional]
**product_id** | **int** | Ідентифікатор товару до якого відноситься варіант | [optional]
**sku** | **string** | SKU варіанту товару | [optional]
**barcode** | **string** | Штрих-код товару | [optional]
**thumbnail_url** | **string** | Зображення варіанту товару | [optional]
**price** | **float** | Вартість варіанту товару | [optional]
**purchased_price** | **float** | Закупівельна вартість варіанту товару | [optional]
**quantity** | **float** | Загальна кількість залишків | [optional]
**weight** | **float** | Вага варіанту товару в системних одиницях | [optional]
**length** | **float** | Довжина варіанту товару в системних одиницях | [optional]
**width** | **float** | Ширина варіанту товару в системних одиницях | [optional]
**height** | **float** | Висота варіанту товару в системних одиницях | [optional]
**properties** | [**\OpenAPI\Client\Model\OrderWithIncludesProductsInnerOfferPropertiesInner[]**](OrderWithIncludesProductsInnerOfferPropertiesInner.md) | Властивості варіанту товару | [optional]
**product** | [**\OpenAPI\Client\Model\ProductOffer**](ProductOffer.md) | Інформація про товар якому належить варіант. Приходить тільки якщо вказати &#x60;include&#x3D;product&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
