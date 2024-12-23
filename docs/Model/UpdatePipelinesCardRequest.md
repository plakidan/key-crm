# # UpdatePipelinesCardRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Назва картки | [optional]
**note** | **string** | Примітка до картки | [optional]
**status_id** | **int** | Ідентифікатор статусу картки. Щоб змінити воронку картки, достатньо просто передати статус з потрібної воронки | [optional]
**source_id** | **int** | Ідентифікатор джерела | [optional]
**client_id** | **int** | Ідентифікатор існуючого в системі покупця. Якщо передати, то картка буде зв&#39;язана з цим покупцем | [optional]
**communicate_at** | **string** | Дата і час наступного контакту | [optional]
**products** | [**\OpenAPI\Client\Model\UpdatePipelinesCardRequestProductsInner[]**](UpdatePipelinesCardRequestProductsInner.md) | Масив товарів для додавання в картку. Існуючі товари в картці не оновлюються, завжди додаються нові | [optional]
**custom_fields** | [**\OpenAPI\Client\Model\CreateNewPipelineCardRequestCustomFieldsInner[]**](CreateNewPipelineCardRequestCustomFieldsInner.md) | Користувацькі поля у картці воронки | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
