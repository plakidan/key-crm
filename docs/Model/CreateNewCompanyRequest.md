# # CreateNewCompanyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Назва компанії |
**title** | **string** | Повна назва компанії | [optional]
**bank_account** | **string** | Банківські реквізити | [optional]
**notes** | **string** | Примітка до компанії | [optional]
**manager_id** | **int** | ID менеджера зв&#39;язаного с компанією | [optional]
**buyer_id** | **string[]** | Перелік покупців, які потрібно зв&#39;язати з компанією | [optional]
**custom_fields** | [**\OpenAPI\Client\Model\CreateNewCompanyRequestCustomFieldsInner[]**](CreateNewCompanyRequestCustomFieldsInner.md) | Користувацькі поля для покупця | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
