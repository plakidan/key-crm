# # CompanyWithIncludes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Ідентифікатор компанії | [optional]
**name** | **string** |  |
**title** | **string** |  | [optional]
**notes** | **string** |  | [optional]
**bank_account** | **string** |  | [optional]
**manager_id** | **int** | Ідентифікатор відповідального менеджера | [optional]
**manager** | [**\OpenAPI\Client\Model\CompanyWithIncludesManager**](CompanyWithIncludesManager.md) |  | [optional]
**buyer** | [**\OpenAPI\Client\Model\OrderWithIncludesBuyer**](OrderWithIncludesBuyer.md) |  | [optional]
**custom_fields** | [**\OpenAPI\Client\Model\OrderWithIncludesCustomFieldsInner[]**](OrderWithIncludesCustomFieldsInner.md) | Користувацькі поля в компангії. Повертаються тільки заповнені, якщо вказати &#x60;include&#x3D;custom_fields&#x60; | [optional]
**created_at** | **string** | Дата створення компанії в UTC форматі | [optional]
**updated_at** | **string** | Дата останньої зміни компанії в UTC форматі | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
