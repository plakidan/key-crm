# # CreateNewPipelineCardRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Назва картки. При відсутності параметра буде використано ID створеної картки | [optional]
**source_id** | **int** | Ідентифікатор джерела. | [optional]
**manager_comment** | **string** | Коментар менеджера | [optional]
**manager_id** | **int** | Ідентифікатор відповідального менеджера | [optional]
**pipeline_id** | **int** | Ідентифікатор воронки (при відсутності параметра буде використана перша воронка у списку) | [optional]
**communicate_at** | **string** | Дата і час наступного контакту | [optional]
**contact** | [**\OpenAPI\Client\Model\CreateNewPipelineCardRequestContact**](CreateNewPipelineCardRequestContact.md) |  |
**utm_source** | **string** | Джерело кампанії | [optional]
**utm_medium** | **string** | Тип трафіку | [optional]
**utm_campaign** | **string** | Назва кампанії | [optional]
**utm_term** | **string** | Ключове слово | [optional]
**utm_content** | **string** | Ідентифікатор оголошення | [optional]
**products** | [**\OpenAPI\Client\Model\CreateNewPipelineCardRequestProductsInner[]**](CreateNewPipelineCardRequestProductsInner.md) |  | [optional]
**payments** | [**\OpenAPI\Client\Model\CreateNewOrderRequestPaymentsInner[]**](CreateNewOrderRequestPaymentsInner.md) | Масив з платежами | [optional]
**custom_fields** | [**\OpenAPI\Client\Model\CreateNewPipelineCardRequestCustomFieldsInner[]**](CreateNewPipelineCardRequestCustomFieldsInner.md) | Користувацькі поля у картці воронки | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
