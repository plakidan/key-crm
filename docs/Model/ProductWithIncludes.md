# # ProductWithIncludes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Ідентифікатор товару | [optional]
**name** | **string** | Назва товару | [optional]
**sku** | **string** | Артикул товару. Повертається тільки якщо у товару немає варіантів (&#x60;has_offers &#x3D;&#x3D; false&#x60;). | [optional]
**barcode** | **string** | Штрихкод товару. Повертається тільки якщо у товару немає варіантів (&#x60;has_offers &#x3D;&#x3D; false&#x60;). | [optional]
**price** | **float** | Вартість товару. Повертається тільки якщо у товару немає варіантів (&#x60;has_offers &#x3D;&#x3D; false&#x60;). | [optional]
**purchased_price** | **float** | Закупівельна вартість товару. Повертається тільки якщо у товару немає варіантів (&#x60;has_offers &#x3D;&#x3D; false&#x60;). | [optional]
**description** | **string** | Опис товару | [optional]
**thumbnail_url** | **string** | Основне зображення товару | [optional]
**attachments_data** | **string[]** | Зображення товару | [optional]
**quantity** | **float** | Загальні залишки по товару, або по всіх варіантах товару, якщо вони є. | [optional]
**unit_type** | **string** | Одиниці виміру товару. Якщо використовуються системні &#x60;шт&#x60;, то значення буде &#x60;null&#x60; | [optional]
**currency_code** | **string** | Валюта товару | [optional]
**min_price** | **float** | Мінімальна вартість варіантів товару. Якщо товар без варіантів (&#x60;has_offers &#x3D;&#x3D; false&#x60;), то буде дорівнювати вартості товару. | [optional]
**max_price** | **float** | Максимальна вартість варіантів товару. Якщо товар без варіантів (&#x60;has_offers &#x3D;&#x3D; false&#x60;), то буде дорівнювати вартості товару. | [optional]
**weight** | **float** | Вага товару за замовчуванням | [optional]
**length** | **float** | Довжина товару за замовчуванням | [optional]
**width** | **float** | Ширина товару за замовчуванням | [optional]
**height** | **float** | Висота товару за замовчуванням в системних одиницях | [optional]
**has_offers** | **bool** | Ознака наявності варіантів у товару. Якщо &#x60;true&#x60;, то інформацію по варіантам можна отримати окремим запитом &#x60;GET /offers&#x60; вказавши в &#x60;filter[product_id]&#x60; ID товару. | [optional]
**is_archived** | **bool** | Чи товар архівний | [optional]
**category_id** | **float** | ID категорії товару | [optional]
**created_at** | **string** | Дата створення в UTC форматі | [optional]
**updated_at** | **string** | Дата останньої зміни в UTC форматі | [optional]
**custom_fields** | [**\OpenAPI\Client\Model\OrderWithIncludesCustomFieldsInner[]**](OrderWithIncludesCustomFieldsInner.md) | Користувацькі поля в товарі. Повертаються тільки заповнені, якщо вказати &#x60;include&#x3D;custom_fields&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
