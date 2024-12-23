# # CustomField

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID поля в системі | [optional]
**name** | **string** | Назва поля | [optional]
**uuid** | **string** | Зовнішній ідентифікатор поля | [optional]
**model** | **string** | Сутність до якої відноситься поле. Можливі значення: &#x60;order (замовлення)&#x60;, &#x60;lead (заявка)&#x60;, &#x60;client (покупець)&#x60;, &#x60;crm_product (товар)&#x60; | [optional]
**type** | **string** | Тип поля. Можливі значення: &#x60;link (посилання)&#x60;, &#x60;select (список/мультисписок)&#x60;, &#x60;switcher (так/ні)&#x60;, &#x60;float (число)&#x60;, &#x60;number (ціле число)&#x60;, &#x60;textarea (текст)&#x60;, &#x60;text (рядок)&#x60;, &#x60;date (дата)&#x60;, &#x60;datetime (дата і час)&#x60; | [optional]
**required** | **bool** | Обов&#39;язкове поле (так/ні) | [optional]
**position** | **int** | Позиція поля | [optional]
**is_multiple** | **bool** | Мультисписок (так/ні) | [optional]
**options** | [**\OpenAPI\Client\Model\CustomFieldOptionsInner[]**](CustomFieldOptionsInner.md) | Опції для полів з типом &#x60;select (список/мультисписок)&#x60;. Для решти типів масив буде пустим. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
