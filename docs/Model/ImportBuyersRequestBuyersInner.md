# # ImportBuyersRequestBuyersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**full_name** | **string** | Повне ім&#39;я покупця | [optional]
**birthday** | **string** | Дата народження | [optional]
**email** | **string[]** | Перелік e-mail покупця | [optional]
**phone** | **string[]** | Перелік телефонів покупця. Телефони рекомендуємо передавати в міжнародному форматі з плюсом | [optional]
**note** | **string** | Примітка до покупця | [optional]
**discount** | **float** | Знижка для покупця | [optional]
**company_id** | **int** | ID компанії зв&#39;язаної с покупцем | [optional]
**manager_id** | **int** | ID менеджера зв&#39;язаного с покупцем | [optional]
**shipping** | [**\OpenAPI\Client\Model\UpdateExistingBuyerRequestShippingInner[]**](UpdateExistingBuyerRequestShippingInner.md) |  | [optional]
**custom_fields** | [**\OpenAPI\Client\Model\CreateNewPipelineCardRequestCustomFieldsInner[]**](CreateNewPipelineCardRequestCustomFieldsInner.md) | Користувацькі поля для покупця | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
