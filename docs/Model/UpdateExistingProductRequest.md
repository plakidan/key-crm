# # UpdateExistingProductRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Назва товару | [optional]
**description** | **string** | Опис товару | [optional]
**pictures** | **string[]** | Зображення товару, максимум 6 штук, перше - головне | [optional]
**currency_code** | **string** | Валюта товару | [optional]
**sku** | **string** | Артикул товару | [optional]
**barcode** | **string** | Штрих-код товару | [optional]
**price** | **float** | Ціна товару за одиницю | [optional]
**purchased_price** | **float** | Ціна закупівлі товару за одиницю | [optional]
**unit_type** | **string** | Одиниці виміру товару | [optional]
**weight** | **float** | Вага товару за замовчуванням | [optional]
**length** | **float** | Довжина товару за замовчуванням | [optional]
**width** | **float** | Ширина товару за замовчуванням | [optional]
**height** | **float** | Висота товару за замовчуванням в системних одиницях | [optional]
**category_id** | **float** | ID категорії товару | [optional]
**custom_fields** | [**\OpenAPI\Client\Model\CreateNewProductRequestCustomFieldsInner[]**](CreateNewProductRequestCustomFieldsInner.md) | Користувацькі поля в товарі | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
